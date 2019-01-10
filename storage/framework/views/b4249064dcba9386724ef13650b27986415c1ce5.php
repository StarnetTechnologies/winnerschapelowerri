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
		<h3 class="text-center super-font theme-color">Pastor's Desk</h3>
	</div>
    <div class="row">
        <div class="col-sm-8">
            <?php if($posts->count() > 0): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="margin-bottom: 10px">
                         <?php echo $__env->make('templates.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="text-center" style="margin-top: 10px">
                    <?php echo e($posts->links()); ?>

                </div>
            <?php else: ?>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="alert alert-warning">No post yet</div>
                </div>
            </div>
                
            <?php endif; ?>
        </div>
        <div class="col-sm-4">
            <div>
                <?php echo $__env->make('widgets.domi-radio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div>
            <?php echo $__env->make('widgets.videos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>