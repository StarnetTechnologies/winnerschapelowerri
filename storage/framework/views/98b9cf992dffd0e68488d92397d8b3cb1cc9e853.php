  <h2 class="theme-color text-center section-heading">Pastoral Team</h2>
  <hr>
        <div class="pastors-container">
                <?php if($PASTORS->count() > 0): ?>
                    <div class="row" style="">
                    <?php $__currentLoopData = $PASTORS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pastor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="image-caption" >
                                <div style="background: url(<?php echo e(asset($pastor->dpUrl())); ?>) center no-repeat; background-size: cover; height: 350px;"></div>
                                <div class="caption text-center" style="">
                                    <h4 class="theme-color"><?php echo e($pastor->fullname); ?></h4>
                                    <p class="grey"><?php echo e($pastor->position); ?></p>
                                    <?php if($pastor->bio !== null && $pastor->bio !== ''): ?>
                                        <div class="bio-container">
                                            <p><?php echo e($pastor->bio); ?></p>
                                        </div> 
                                    <?php endif; ?>
                                </div>
                                <h4 class="outside-caption theme-color text-center"><?php echo e($pastor->fullname); ?></h4>
                                <!--<img src="<?php echo e($pastor->dpUrl()); ?>" alt="<?php echo e($pastor->fullname); ?>" width="100%">-->
                            </div>
                        </div>
                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-warning"> No pastor added yet</div>
                <?php endif; ?>
            </div>

