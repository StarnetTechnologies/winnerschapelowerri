
<div class="row">
    <div class="col-3">
        <div class="text-right">
            <img src="<?php echo e($PREF->pastor->dpUrl()); ?>" alt="<?php echo e($PREF->pastor->fullname); ?>" style="width: 100px; height: 100px; border-radius: 50%; border: 2px solid #fff">
        </div>
    </div>
    <div class="col-9">
        <div class="card border-0"  style="background-color: transparent">
            <div class="card-body">
                <h4 class="post-title-red" style="margin-bottom: 2px"><a href="<?php echo e(route('single.post',['slug'=>$post->slug])); ?>"><?php echo e($post->title); ?></a></h4>
                <small class="grey"><i class="fa fa-clock"></i>  <?php echo e($post->created_at->diffForHumans()); ?></small>
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <img src="<?php echo e($post->imageUrl()); ?>" alt="<?php echo e($post->title); ?>" width="100%">
                    </div>
                    <div class="col-sm-8">
                        <div style="padding: 10px">
                            <p>
                                <?php if(strlen($post->body) > 500): ?>    
                                    <?php echo str_limit($post->body,500); ?> <a href="<?php echo e(route('single.post',['slug' => $post->slug])); ?>">continue reading</a>
                                <?php else: ?>
                                    <?php echo $post->body; ?>

                                <?php endif; ?>
                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
