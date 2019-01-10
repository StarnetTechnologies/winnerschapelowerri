<div class="accordion" id="services-accordion">
   <div class="card">
        <div class="card-header">
            <button class="btn btn-info" data-toggle="collapse" data-target="#new-service" aria-expanded="true" aria-controls="new-service">
                <i class="fa fa-plus-circle"></i> Add New Service 
            </button>
            <h4><i class="fa fa-calendar"></i>  Services <span class="badge badge-secondary"><?php echo e($SERVICES->count()); ?></span></h4>
        </div>
        <div class="card-body admin-panel" style="padding: 0">

            <!--New pastor form-->
            <div style="padding: 10px">
                <div id="new-service" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#services-accordion">
                    <?php echo $__env->make('widgets.admin.new-service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div> 
            </div>

            <!--New pastor form-->

            <?php if($SERVICES->count() > 0): ?>
                <?php $__currentLoopData = $SERVICES; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="padding: 8px;margin-bottom: 5px; border-bottom: 1px solid #f7f7f7">
                        <?php echo $__env->make('templates.service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            <?php else: ?>
                <div class="alert alert-warning text-center">No service added yet</div>
            <?php endif; ?>
        </div>
    </div>
</div>