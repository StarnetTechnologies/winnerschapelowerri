

<?php $__env->startSection('styles'); ?>
<style>

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-widget'); ?>
    <?php 
    $_breadcrumb = '<i class="fa fa-calendar"></i>  Events';
     ?>
    <?php echo $__env->make('widgets.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8 offset-md-2">
                    <?php if(count($EVENTS['happening']) > 0): ?>
                    <div class="event-wrapper happening-events-wrapper" style="margin-top: 0">
                        <div class="events-section-heading">
                            <h2>Happening Now <span class="badge"><?php echo e(count($EVENTS['happening'])); ?></span></h2>
                        </div>
                        <?php $__currentLoopData = $EVENTS['happening']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('templates.event-happening', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>

                    <?php if(count($EVENTS['upcoming']) > 0): ?>
                    <div class="event-wrapper upcoming-events-wrapper">
                        <div class="events-section-heading">
                            <h2>Upcoming Event <span class="badge"><?php echo e(count($EVENTS['upcoming'])); ?></span></h2>
                        </div>
                        <?php $__currentLoopData = $EVENTS['upcoming']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="margin-bottom: 10px">
                            <?php echo $__env->make('templates.event-upcoming', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-warning">No upcoming event</div>
                <?php endif; ?>

        </div>
       
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>