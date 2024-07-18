<div class="d-flex mb-5 align-items-center">
    <h1 class="h3 mb-0 fw-bold"><span class="align-middle"><?php ee('CTA Overlay') ?> </span> <i class="fa fa-question-circle text-muted fs-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo ee('An overlay page allows you to display a small non-intrusive overlay on the destination website to advertise your product or your services. You can also use this feature to send a message to your users. You can customize the message and the appearance of the overlay right from this page. As soon as you save it, the changes will be applied immediately across all your URLs using this type. Please note that some secured and sensitive websites such as google.com or facebook.com do not work with this feature. You can have unlimited overlay pages and you can choose one for each URL.') ?>"></i></h1>
    <div class="ms-auto">
        <?php if(\Core\Auth::user()->teamPermission('overlay.create')): ?>
            <a href="<?php echo route('overlay.create') ?>" class="btn btn-primary"><?php ee('Create') ?></a>
        <?php endif ?>
    </div>
</div>
<div class="card shadow-sm p-2">
    <div class="d-block d-md-flex align-items-center">
        <div>
			<span class="h3 ms-2"><?php echo $count ?></span> <span class="text-muted"> <?php ee('CTA Overlay') ?> / <?php echo $total == 0 ? e('Unlimited') : $total ?></span>
		</div>
        <div class="ms-auto">
            <form action="<?php echo route('overlay') ?>" method="get" class="d-flex align-items-center border rounded-3 p-1">
                <div class="me-2 flex-fill">
                    <input type="text" class="form-control border-0 p-2" name="q" value="<?php echo clean(request()->q) ?>" placeholder="<?php ee('Search for {t}', null, ['t' => e('CTA Overlay')]) ?>">
                </div>
                <div>
                    <button type="submit" class="btn bg-white py-2 px-3"><i data-feather="search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php if($overlaypages): ?>
    <div class="row">
    <?php foreach($overlaypages as $overlay): ?>
        <div class="col-md-6">
            <div class="card flex-fill shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="icon-45" data-feather="<?php echo $overlay->icon ?>"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="float-end">
                                <button type="button" class="btn btn-default bg-white btn-sm" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="more-horizontal"></i></button>
                                <ul class="dropdown-menu">
                                <?php if(\Core\Auth::user()->teamPermission('overlay.edit')): ?>
                                    <li><a class="dropdown-item" href="<?php echo route('overlay.edit', [$overlay->id]) ?>"><i data-feather="edit"></i> <?php ee('Edit') ?></span></a></li>
                                <?php endif ?>
                                <?php if(\Core\Auth::user()->teamPermission('overlay.delete')): ?>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="<?php echo route('overlay.delete', [$overlay->id, \Core\Helper::nonce('overlay.delete')]) ?>" data-bs-toggle="modal" data-trigger="modalopen" data-bs-target="#deleteModal"><i data-feather="trash"></i> <?php ee('Delete') ?></span></a></li>
                                <?php endif ?>
                                </ul>
                            </div>
                            <strong><?php echo $overlay->name ?></strong>
                            <br />
                            <small class="badge bg-primary"><?php ee(ucfirst($overlay->type)) ?></small>
                            <small class="text-navy ms-2"><?php echo \Core\Helper::timeago($overlay->date) ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    </div>
    <div class="mt-4 d-block">
        <?php echo pagination('pagination justify-content-center border rounded p-3', 'page-item mx-2 shadow-sm text-center', 'page-link rounded') ?>
    </div>
<?php else: ?>
    <div class="card flex-fill shadow-sm">
        <div class="card-body text-center">
            <p><?php ee('No content found. You can create some.') ?></p>
            <?php if(\Core\Auth::user()->teamPermission('overlay.edit')): ?>
                <a href="<?php echo route('overlay.create') ?>" class="btn btn-primary"><?php ee('Create a CTA Overlay') ?></a>
            <?php endif ?>
        </div>
    </div>
<?php endif ?>
<?php if(\Core\Auth::user()->teamPermission('overlay.delete')): ?>
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
<?php endif ?>