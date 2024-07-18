<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo route('admin') ?>"><?php ee('Dashboard') ?></a></li>
        <li class="breadcrumb-item"><?php ee('QR Codes') ?></li>
    </ol>
</nav>

<h1 class="h3 mb-5 fw-bold"><?php ee('QR Codes') ?>
    <?php echo request()->userid ? ' - '.e('User').' #'.request()->userid.' <a href="'.route('admin.qr').'"><i data-feather="x-circle" class="text-dark"></i></a>' : '' ?>
    <?php echo request()->q ? ' - '.e('Search result for {q}', null, ['q' => $q]).' <a href="'.route('admin.qr').'"><i data-feather="x-circle" class="text-dark"></i></a>' : '' ?>
</h1>

<div class="card flex-fill shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover my-0">
            <thead>
                <tr>
                    <th><?php ee('QR') ?></th>
                    <th><?php ee('User') ?></th>
                    <th><?php ee('Type') ?></th>
                    <th><?php ee('Data') ?></th>
                    <th><?php ee('Scans') ?></th>
                    <th><?php ee('Date') ?></th>
                    <th>
                        <button type="button" class="btn btn-default bg-transparent float-end" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="filter"></i></button>
                        <form action="" method="get" class="dropdown-menu p-2">
                            <div class="input-select d-block mb-2">
                                <label for="userid" class="form-label fw-bold"><?php ee('For User') ?></label>
                                <select name="userid" id="userid" data-name="userid" class="form-select">
                                    <option value="all"<?php if(!request()->userid) echo " selected" ?>><?php ee('All') ?></option>
                                    <?php foreach($users as $user): ?>
                                        <option value="<?php echo $user['id'] ?>"<?php if(request()->userid == $user['id']) echo " selected" ?>>#<?php echo $user['id'] ?>- <?php echo $user['email'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php ee('Filter') ?></button>
                        </form>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($qrs as $qr): ?>
                    <tr>
                        <td>
                            <a href="<?php echo route('qr.generate', [$qr->alias]) ?>" target="_blank"><img src="<?php echo route('qr.generate', [$qr->alias]) ?>" width="100" class="rounded"></a> <br>
                            <?php echo $qr->name ?>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo $qr->user->avatar() ?>" alt="" width="36" class="img-responsive rounded-circle">
                                <div class="ms-2">
                                    <?php echo ($qr->user->admin)?"<strong>{$qr->user->email}</strong>":$qr->user->email ?>
                                </div>
                            </div>
                        </td>
                        <td><?php echo $qr->data['type'] ?></td>
                        <td><textarea class="form-control" disabled><?php echo $qr->source ?></textarea></td>
                        <td><?php echo $qr->url->click ?? 'n/a' ?></td>
                        <td><?php echo $qr->created_at ?></td>
                        <td>
                            <button type="button" class="btn btn-default bg-transparent float-end" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="more-horizontal"></i></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo route('admin.users.view', [$qr->user->id]) ?>"><i data-feather="user"></i> <?php ee('View User') ?></span></a></li>
                                <li><a class="dropdown-item" href="<?php echo route('admin.qr.reassign', [$qr->id]) ?>" data-bs-toggle="modal" data-bs-target="#assignModal" data-toggle="updateFormContent" data-content='<?php echo htmlentities(json_encode(['user' => $qr->userid]), ENT_QUOTES) ?>'><i data-feather="repeat"></i> <?php ee('Reassign') ?></span></a></li>
                                <?php if($qr->url): ?>
                                    <li><a class="dropdown-item" href="<?php echo route('stats', [$qr->url->id]) ?>"><i data-feather="bar-chart"></i> <?php ee('View Stats') ?></span></a></li>
                                <?php endif ?>
                                <li><a class="dropdown-item text-danger" data-bs-toggle="modal" data-trigger="modalopen" data-bs-target="#deleteModal" href="<?php echo route('admin.qr.delete', [$qr->id, \Core\Helper::nonce('qr.delete')]) ?>"><i data-feather="trash"></i> <?php ee('Delete') ?></a></li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <?php echo pagination('pagination') ?>
</div>
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold"><?php ee('Are you sure you want to delete this?') ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php ee('You are trying to delete a record. This action is permanent and cannot be reversed.') ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php ee('Cancel') ?></button>
        <a href="#" class="btn btn-danger" data-trigger="confirm"><?php ee('Confirm') ?></a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="assignModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <form action="#" method="post">
            <div class="modal-header">
                <h5 class="modal-title fw-bold"><?php ee('Reassign') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo csrf() ?>
                <div class="form-group mb-3">
                    <label class="form-label fw-bold"><?php ee("User") ?></label>
                    <div class="input-select">
                        <select name="user" id="user" class="form-select">
                            <?php foreach($users as $user): ?>
                                <option value="<?php echo $user['id'] ?>"><?php echo $user['id'] ?> - <?php echo $user['email'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label><input class="form-check-input me-2" type="checkbox" id="accept" name="accept" value="1"> <?php ee('I understand that this item will be move from one user to another.') ?><label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php ee('Cancel') ?></button>
                <button type="submit" class="btn btn-success"><?php ee('Reassign') ?></button>
            </div>
        </form>
    </div>
  </div>
</div>