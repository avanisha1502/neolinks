<div class="modal fade" id="quickshortener" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold"><?php ee('Quick Shortener') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo route('shorten') ?>" method="post" data-trigger="shorten-form">
                    <?php echo csrf() ?>
                    <div class="d-flex items-align-center border rounded">
                        <div class="flex-grow-1" id="linksinput">
                            <div id="single" class="collapse show" data-bs-parent="#linksinput">
                                <input type="text" class="form-control p-3 border-0" name="url" id="url" placeholder="<?php ee('Paste a long link') ?>">
                            </div>
                        </div>
                        <div class="align-self-center me-3">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default border" data-bs-toggle="collapse" data-bs-target="#qsadvancedOptions"><i data-feather="sliders"></i></button>
                                <button type="submit" class="btn btn-primary">
                                    <span class="d-none d-sm-block"><?php ee('Shorten') ?></span>
                                    <span class="d-block d-sm-none"><i class="fa fa-link"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="qsadvancedOptions">
                        <div class="row">
                            <?php if($domains = \Helpers\App::domains()): ?>
                            <div class="col-sm-6 mt-3">
                                <div class="form-group rounded input-select">
                                    <label for="qsdomain" class="form-label fw-bold"><?php ee('Domain') ?></label>
                                    <select name="domain" id="qsdomain" class="form-select border-start-0 ps-0" data-toggle="select">
                                        <?php foreach($domains as $domain): ?>
                                            <option value="<?php echo $domain ?>" <?php echo user()->domain == $domain ? 'selected' : '' ?>><?php echo $domain ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <?php endif ?>
                            <?php if($redirects = \Helpers\App::redirects()): ?>
                            <div class="col-sm-6 mt-3">
                                <div class="form-group rounded input-select">
                                    <label for="qstype" class="form-label fw-bold"><?php ee('Redirect') ?></label>
                                    <select name="type" id="qstype" class="form-select border-start-0 ps-0" data-toggle="select">
                                        <?php foreach($redirects as $name => $redirect): ?>
                                            <optgroup label="<?php echo $name ?>">
                                            <?php foreach($redirect as $id => $name): ?>
                                                <option value="<?php echo $id ?>" <?php echo user()->defaulttype == $id ? 'selected' : '' ?>><?php echo $name ?></option>
                                            <?php endforeach ?>
                                            </optgroup>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <?php endif ?>
                        </div>
                        <div class="row">
                            <?php if(\Core\Auth::user()->has("alias") !== false): ?>
                            <div class="col-sm-6 mt-3">
                                <div class="form-group">
                                    <label for="qscustom" class="form-label fw-bold"><?php ee('Custom') ?></label>
                                    <p class="form-text"><?php ee('If you need a custom alias, you can enter it below.') ?></p>
                                    <div class="input-group">
                                        <div class="input-group-text bg-white"><i data-feather="globe"></i></div>
                                        <input type="text" class="form-control border-start-0 ps-0 p-2" name="custom" id="qscustom" placeholder="<?php echo e("Type your custom alias here")?>" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <?php endif ?>
                            <?php if(\Core\Auth::user()->has("channels") !== false): ?>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="qschannel" class="form-label fw-bold"><?php echo e("Channel")?></label>
                                    <p class="form-text"><?php echo e('Assign link to a channel.')?></p>
                                    <div class="form-group rounded input-select">
                                        <select name="channel" id="qschannel" class="form-select" data-toggle="select">>
                                            <option value="0"><?php ee('None') ?></option>
                                            <?php foreach(\Core\DB::channels()->where('userid', user()->rID())->findArray() as $channel): ?>
                                                <option value="<?php echo $channel['id'] ?>"><?php echo $channel['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <?php endif ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="qspass" class="form-label fw-bold"><?php ee('Password Protection') ?></label>
                                    <p class="form-text"><?php ee('By adding a password, you can restrict the access.') ?></p>
                                    <div class="input-group">
                                        <div class="input-group-text bg-white"><i data-feather="lock"></i></div>
                                        <input type="text" class="form-control border-start-0 ps-0 p-2" name="pass" id="qspass" placeholder="<?php echo e("Type your password here")?>" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="qsdescription" class="form-label fw-bold"><?php echo e("Description")?></label>
                                    <p class="form-text"><?php echo e('This can be used to identify URLs on your account.')?></p>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i data-feather="tag"></i></span>
                                        <input type="text" class="form-control border-start-0 ps-0 p-2" name="description" id="qsdescription" placeholder="<?php echo e("Type your description here")?>" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>                                
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="successModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold"><?php ee('Short Link') ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex">
            <div class="modal-qr me-3">
                <p></p>
                <div class="btn-group" role="group" aria-label="downloadQR">
                    <a href="#" class="btn btn-primary" id="downloadPNG"><?php ee('Download') ?></a>
                    <div class="btn-group" role="group">
                        <button id="btndownloadqr" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">PNG</button>
                        <ul class="dropdown-menu" aria-labelledby="btndownloadqr">
                            <li><a class="dropdown-item" href="#">PDF</a></li>
                            <li><a class="dropdown-item" href="#">SVG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-2 flex-fill">
                <div class="form-group">
                    <label for="short" class="form-label fw-bold"><?php ee('Short Link') ?></label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="modal-input" name="shortlink" value="">
                        <div class="input-group-text bg-white">
                            <button class="btn btn-primary copy" data-clipboard-text=""><?php ee('Copy') ?></button>
                        </div>
                    </div>
                </div>
                <div class="mt-3" id="modal-share">
                    <?php echo \Helpers\App::share('--url--') ?>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>        