<?php $__env->startSection('styles'); ?>
<style>
	.pastor{
		margin: 10px 0px;
	}
	.pastor img{
		box-shadow: 30px 30px 30px rgba(0,0,0,.1);
		border-radius: 25px 0px 25px 0px;
		
	}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendors/jquery.horizontal.scroll.css')); ?>" />


<?php $__env->stopSection(); ?>


<?php $__env->startSection('top-widget'); ?>
    <?php echo $__env->make('widgets.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Pastoral Theme</h3>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">

            <?php if($PASTORS->count() > 0): ?>
                <?php $__currentLoopData = $PASTORS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pastor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="pastor">
                    <div class="">
                        <div class="">
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <img src="<?php echo e(asset($pastor->dpUrl())); ?>" alt="<?php echo e($pastor->fullname); ?>" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <div class="p-3">
                                        <h4><?php echo e($pastor->fullname); ?></h4>
                                        <small><?php echo e($pastor->position); ?></small>
                                        <p><?php echo e($pastor->bio === null ? '' : $pastor->bio); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="alert alert-warning">No pastor yet</div>
                        </div>
                    </div>
            <?php endif; ?>

		</div>
	</div>
</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/vendors/jquery.horizontal.scroll.js')); ?>" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#horiz_container_outer').horizontalScroll();

    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>