

<?php $__env->startSection('top-widget'); ?>
	<div style="height:100px"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panels'); ?>
<div class="card">
    <div class="card-header">
        <h4>Update Post: <strong class="theme-color"><?php echo e($post->title); ?></strong></h4>
    </div>
    <div class="card-body">

        <form class="has-image-upload" method="POST" action="<?php echo e(route('update.post',['id'=>$post->id])); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">  
                        <label class="control-label">Title</label>
                        <input id="title" type="text" class="form-control" name="title" placeholder="post's title" value="<?php echo e($post->title); ?>" required autofocus>
                        <?php if($errors->has('title')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('title')); ?>

                                </span>
                        <?php endif; ?>
                    </div>


                    <div class="form-group <?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                            <label class="control-label">Message</label>
                             <textarea  class="form-control" name="body" placeholder="Message..." autofocus><?php echo e($post->body); ?></textarea>
                        <?php if($errors->has('body')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('body')); ?>

                                </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-inner">
                        <div class="text-center">
                            <img src="<?php echo e($post->imageUrl()); ?>" alt="<?php echo e($post->title); ?>" style="width: 200px; height: 200px; border-radius: 50%" id="prev-featured-image">
                        </div>
                        <br>
                        <input class="form-control" type="file" name="featured_image" accept="image/*" >
                        <div class="image-preview-container" replace="#prev-featured-image"></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="custom-btn" >
                    Update Post
                </button>
            </div>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.appAdmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>