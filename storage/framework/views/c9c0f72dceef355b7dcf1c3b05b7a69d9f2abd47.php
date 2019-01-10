<?php $__env->startSection('styles'); ?>
<style>

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-widget'); ?>
    <?php 
    $_breadcrumb = '<i class="fa fa-bullhorn"></i>  Announcements <span class="badge badge-secondary">'.$announcements->count().'</span>';
     ?>
    <?php echo $__env->make('widgets.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Announcements</h3>
	</div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <?php if($announcements->count() > 0): ?>
                <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="margin-bottom: 5px">
                        <?php echo $__env->make('templates.announcement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="alert alert-warning">No announcement yet</div>
                </div>
            </div>

            <?php endif; ?>
        </div>
       
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>