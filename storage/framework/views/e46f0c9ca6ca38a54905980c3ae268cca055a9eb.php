<div class="accordion" id="pastors-accordion">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-info" data-toggle="collapse" data-target="#new-pastor" aria-expanded="true" aria-controls="new-pastor">
                <i class="fa fa-plus-circle"></i> Add New Pastor 
            </button>
            <h4><i class="fa fa-user-tie"></i>  Pastors <span class="badge badge-secondary"><?php echo e($PASTORS->count()); ?></span></h4>
        </div>
        <div class="card-body admin-panel" style="padding:0">
            <!--New pastor form-->
            <div style="padding: 10px">
                <div id="new-pastor" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#pastors-accordion">
                    <?php echo $__env->make('widgets.admin.new-pastor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <!--New pastor form-->

            <?php if($PASTORS->count() > 0): ?>
                <?php $__currentLoopData = $PASTORS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pastor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="border-bottom: 1px solid #f7f7f7; padding:8px">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="<?php echo e($pastor->dpUrl()); ?>" alt="<?php echo e($pastor->fullname); ?>" style="width: 70px; height: 70px; border-radius: 50%">
                                <div>
                                    <a href="<?php echo e(route('edit.pastor',['id' =>$pastor->id])); ?>" class="text-primary"><i class="fa fa-pen"></i> edit</a>
                                    <span title="remove pastor" class="text-danger" style="cursor: pointer" onclick="javascript: confirmDelete(this,'remove-pastor-<?php echo e($pastor->id); ?>-confirmation')"><i class="fa fa-trash"></i> discard</span>
                                    <div class="confirmation-container" id="remove-pastor-<?php echo e($pastor->id); ?>-confirmation">
                                            <p class="text-warning">Are you sure you want to remove <strong><?php echo e($pastor->fullname); ?> ???!</strong></p>
                                            <button class="btn btn-primary confirm-no">No</button>
                                            <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                            <form action="<?php echo e(route('discard.pastor',['id' => $pastor->id])); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <h5 class="theme-color"><?php echo e($pastor->fullname); ?></h5>
                                <small class="grey text-center"><?php echo e($pastor->position); ?></small>
                                <p><?php echo e($pastor->bio); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="alert alert-waring">No pastor added yet</div>
            <?php endif; ?>
        </div>
    </div>
</div>
