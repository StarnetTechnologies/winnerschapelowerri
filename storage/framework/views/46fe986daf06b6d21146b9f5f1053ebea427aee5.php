<h4 class="super-font theme-color text-center">From Pastor's Desk</h4>

<?php if($POSTS->count() > 0): ?>
	<div style="padding-top: 20px">
        <div class="posts-container">
            <?php $__currentLoopData = $POSTS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="margin-bottom: 5px">
                    <?php echo $__env->make('templates.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="text-right">
                <a href="<?php echo e(route('posts')); ?>" class="btn btn-secondary"> See More <span>&raquo;</span></a>
            </div>
        </div>
<?php else: ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-warning">No post yet</div>
            </div>
        </div>
<?php endif; ?>