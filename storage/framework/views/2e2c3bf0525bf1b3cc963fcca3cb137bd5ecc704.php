<?php $__env->startSection('styles'); ?>
<style>

    #other-posts-container{
        background-color: #24292E;
        padding: 10px 5px;
    }
    .other-post{
        margin: 5px 0;
        color: #fff;
    }
    .op-title a{
    	color: #fff;
 	transition: all .3s ease-in-out;
    }
     .op-title a:hover{
    	color: #ff0000;
    	text-decoration:none;
    }

       @media (min-width: 768px){
        #single-post-container{
        padding: 10px 20px;
        }
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-widget'); ?>
    <div style="height: 100px"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-8">
            <?php if($post !== null): ?>
            <div id="single-post-container">
                <h2 class="white"><?php echo e($post->title); ?></h2>
                 <?php if($post->image !== null && $post->image !== ''): ?>
                	<div class="text-center">        
                    		<img src="<?php echo e($post->imageUrl()); ?>" alt="<?php echo e($post->title); ?>" width="100%">
                    	</div>
                 <?php endif; ?>
                <p class="white"><img src="<?php echo e($PREF->pastor->dpUrl()); ?>" alt="<?php echo e($PREF->pastor->fullname); ?>" style="width: 70px; height: 70px; border-radius: 50%; border: 2px solid #fff">  <?php echo e($PREF->pastor->fullname); ?> <i class="fa fa-clock"></i> <?php echo e($post->created_at->diffForHumans()); ?> </p>
                <div class="card">
                    <div class="card-body">
                        <p><?php echo e($post->body); ?> </p> 
                    </div>
                </div>                
            </div>
        <?php else: ?>
            <div class="alert alert-info">Nothing found!</div>
        <?php endif; ?>
        </div>
        <div class="col-sm-4">
           
                <?php if($otherPosts->count() > 0): ?>
               		 <h4 class="theme-color">Read Also...</h4>
	                <div id="other-posts-container">
	                    <?php $__currentLoopData = $otherPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $op): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                        <div class="other-post">
	                         <?php if($op->image !== null && $op->image !== ''): ?>
	                            <img src="<?php echo e($op->imageUrl()); ?>" alt="<?php echo e($op->title); ?>" width="100%">
	                           <?php endif; ?>
	                            <h4 class="op-title"><a href="<?php echo e(route('single.post',['slug'=>$op->slug])); ?>"><?php echo e($op->title); ?></a></h4>
	                        </div>
	                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </div>
                <?php else: ?>
                    <div class="alert alert-warning">No other post</div>
                <?php endif; ?>
            
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>