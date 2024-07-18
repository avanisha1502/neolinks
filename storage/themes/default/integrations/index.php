<div class="d-flex mb-5">
    <div>
        <h1 class="h3 fw-bold"><?php ee('Integrations') ?></h1>
    </div>
</div>

<div class="row">
    <?php foreach($integrations as $integration): ?>
    <div class="col-md-4">
        <div class="card rounded rounded-3 position-relative">
            <?php if(!$integration['available']): ?>
                <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                    <div class="position-absolute bg-white opacity-50 w-100 h-100"></div>
                    <div class="position-absolute fw-bold"><a href="<?php echo route('pricing') ?>" class="btn btn-dark shadow-lg"><?php ee('Upgrade') ?></a></div>
                </div>
            <?php endif ?>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <?php echo $integration['icon'] ?? '' ?>
                    <h3 class="fw-bold ms-3 mb-0"><?php echo $integration['name'] ?></h3>
                    <?php if ($integration['condition']): ?>
                        <i class="ms-1 fa fa-check-circle fs-5 text-success" data-bs-toggle="tooltip" title="<?php ee('Connected') ?>"></i>  
                    <?php endif ?>                        
                </div>
                <p class="mt-3">
                    <?php echo $integration['description'] ?>
                </p>
                <a href="<?php echo $integration['route'] ?>" class="btn btn-outline-light border-2 rounded-3"><?php ee('Setup') ?></a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
    <div class="col-md-4">
        <div class="card rounded rounded-3">
            <?php if(!config('api') || !user()->has('api')): ?>
                <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                    <div class="position-absolute bg-white opacity-50 w-100 h-100"></div>
                    <div class="position-absolute fw-bold"><a href="<?php echo route('pricing') ?>" class="btn btn-dark"><?php ee('Upgrade') ?></a></div>
                </div>
            <?php endif ?>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <span class="border rounded-3 text-warning p-2 icon-45 d-flex align-items-center justify-content-center"><i class="fa fa-code"></i></span>
                    <h3 class="fw-bold ms-3 mb-0"><?php ee('Developer API') ?></h3>
                </div>
                <p class="mt-3">
                    <?php ee('Create your own integration to shorten links and interact with other features with our powerful API.') ?>
                </p>
                <a href="<?php echo route('apidocs') ?>" class="btn btn-outline-light border-2 rounded-3"><?php ee('Developer API') ?></a>
            </div>
        </div>        
    </div>
</div>    