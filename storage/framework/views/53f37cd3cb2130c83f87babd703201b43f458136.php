<div class="accordion" id="gallery-accordion">
    <div class="card">
        <div class="card-header">
                <button class="btn btn-info" data-toggle="collapse" data-target="#new-gallery" aria-expanded="true" aria-controls="new-gallery">
                    <i class="fa fa-plus-circle"></i> Add New Photos 
                </button>
            <h4><i class="fa fa-images"></i>  Gallery <span class="badge badge-secondary"><?php echo e($GALLERY->count()); ?></span></h4>
        </div>
        <div class="card-body admin-panel">
            <!--new upload-->
            <div id="new-gallery" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#gallery-accordion">
                <form class="has-image-upload" action="<?php echo e(route('add.gallery')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <input class="form-control" type="file" name="photos[]" accept="image/*" multiple required>
                    <input type="hidden" name="role" value="gallery">
                    <div class="image-preview-container"></div>
                    <input  class="btn btn-info" type="submit" value="Upload Image">
                </form>
            </div>
            <!--new upload-->

            <?php if($GALLERY->count() > 0): ?>
                <div class="row">
                    <?php $__currentLoopData = $GALLERY; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('templates.admin.photo-preview', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="alert alert-warning">No photo added yet</div>
            <?php endif; ?>
        </div>
    </div>
</div><!--gallery-accordion-->