<div style="background-color: #24292E; padding: 50px 5px">
    <?php if($THEME !== null): ?>
    <div class="row">
        <div class="col-sm-6">
            <?php if($THEME->imageAvailable()): ?>
                <div class="text-center">
                    <img src="<?php echo e($THEME->imageUrl()); ?>" alt="<?php echo e($THEME->theme); ?>" width="100%">
                </div>
                <?php endif; ?>
        </div>
        <div class="col-sm-6">
            <div style="color: #fff; padding: 10px">
                <h1 class="animated  bounce   infinite slow super-font monthly-theme theme-color" ><?php echo e($THEME->theme); ?></span></h1>
                <p class="text-center"><?php echo e($THEME->bible_verse); ?></p>
                <p style="font-size: 18px" class="text-justify"><?php echo e($THEME->note); ?></p>
            </div>
        </div>
    </div>

    <?php else: ?>
        <div class="alert alert-warning">No Theme for this month yet</div>
    <?php endif; ?>
</div>