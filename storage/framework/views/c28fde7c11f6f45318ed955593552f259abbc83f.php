<?php $__env->startSection('styles'); ?>
<style>
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-widget'); ?>
    <?php echo $__env->make('widgets.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Gallery</h3>
	</div>
	<div class="row">
		<div class="col-md-10 offset-md-1">
            <?php if($GALLERY->count() > 0): ?>
                <div class="card-columns">
                    <?php $__currentLoopData = $GALLERY; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <img class="card-img-top" src="<?php echo e($g->imageUrl()); ?>" alt="Winners Chapel Owerri">
                            <div class="card-body">
                                <p class="card-text"><?php echo e($g->caption); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="alert alert-warning">No photo in the gallery yet</div>
                    </div>
                </div>
            <?php endif; ?>

		</div>
	</div>
</div>

        <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>