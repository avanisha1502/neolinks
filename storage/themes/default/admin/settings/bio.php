<h1 class="h3 mb-5 fw-bold"><?php ee('Bio Page Settings') ?></h1>
<div class="row">
    <div class="col-md-3 d-none d-lg-block">
        <?php view('admin.partials.settings_menu') ?>
    </div>
    <div class="col-md-12 col-lg-9">
        <div class="card shadow-sm">
            <div class="card-body">
                <form method="post" action="<?php echo route('admin.settings.save') ?>" enctype="multipart/form-data">
                    <?php echo csrf() ?>                                        
                    <div class="form-group mb-4">
                        <label class="form-label fw-bold"><?php ee('Widgets Block List') ?></label>
                        <p><?php ee('By default all widgets are available. If you want to disable some widgets, you can disable them below.') ?></p>

                        <?php foreach(\Helpers\BioWidgets::widgets(null, null, true) as $id => $widget): ?>
                            <p>
                                <label class="from-label"><input type="checkbox" name="bio[blocked][]" value="<?php echo $id ?>" <?php echo config('bio')->blocked && in_array($id, config('bio')->blocked) ? 'checked' : '' ?>> <?php echo $widget['title'] ?></label>
                            </p>
                        <?php endforeach ?>
                    </div> 
                    <button type="submit" class="btn btn-success"><?php ee('Save Settings') ?></button>
                </form>
            </div>
        </div>
    </div>
</div>