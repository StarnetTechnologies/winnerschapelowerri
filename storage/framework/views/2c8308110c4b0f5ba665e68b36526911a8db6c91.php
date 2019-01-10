<div class="accordion" id="posts-accordion">
    <div class="card">
        <div class="card-header">
        <button class="btn btn-info" data-toggle="collapse" data-target="#new-post" aria-expanded="true" aria-controls="new-post">
                <i class="fa fa-plus-circle"></i> Add New Post 
            </button>
            <h4><i class="fa fa-pen"></i>  Posts <span class="badge badge-secondary"><?php echo e($posts->count()); ?></span></h4>
        </div>
        <div class="card-body admin-panel" style="padding: 0">
            <!--New post form-->
            <div style="padding: 10px">
                <div id="new-post" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#posts-accordion">
                    <?php echo $__env->make('widgets.admin.new-post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
            <!--New post form-->

            <?php if($posts->count() > 0): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="border-bottom: 1px solid #f7f7f7; margin-bottom: 5px">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="<?php echo e($post->imageUrl()); ?>" alt="<?php echo e($post->title); ?>" width="100%">
                            </div>
                            <div class="col-sm-8">
                                <div style="padding: 10px">
                                    <h5><?php echo e($post->title); ?></h5>
                                    <p class="grey">
                                         <?php if(strlen($post->body) > 500): ?>    
                                                <?php echo str_limit($post->body,500); ?> <a href="<?php echo e(route('single.post',['slug' => $post->slug])); ?>">continue reading</a>
                                            <?php else: ?>
                                                <?php echo $post->body; ?>

                                            <?php endif; ?>
                                    </p>
                                   
                                    <div>
                                        <a href="<?php echo e(route('edit.post',['id' =>$post->id])); ?>" class="text-primary"><i class="fa fa-pen"></i> edit</a>
                                        <span title="delete post" class="text-danger" style="cursor: pointer" onclick="javascript: confirmDelete(this,'remove-post-<?php echo e($post->id); ?>-confirmation')"><i class="fa fa-trash"></i> discard</span>
                                        <div class="confirmation-container" id="remove-post-<?php echo e($post->id); ?>-confirmation">
                                                <p class="text-warning">Are you sure you want to this post <strong><?php echo e($post->title); ?> ???!</strong></p>
                                                <button class="btn btn-primary confirm-no">No</button>
                                                <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                                <form action="<?php echo e(route('discard.post',['id' => $post->id])); ?>" method="POST">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="alert alert-warning">No post published yet</div>
            <?php endif; ?>
        </div>
    </div>
</div>