<?php if($paginator->hasPages()): ?>

    <div class="btn-group mr-2" role="group" aria-label="First group">
        
        <?php if($paginator->onFirstPage()): ?>
            <a type="button" class="btn btn-secondary disabled"><span>&laquo;</span></a>
        <?php else: ?>
            <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" type="button" class="btn btn-secondary">&laquo;</a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <button type="button" class="btn btn-secondary disabled"><span><?php echo e($element); ?></span></button>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <button type="button" class="btn btn-secondary active"><span><?php echo e($page); ?></span></button>
                    <?php else: ?>
                        <a href="<?php echo e($url); ?>" type="button" class="btn btn-secondary"><?php echo e($page); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <a href="<?php echo e($paginator->nextPageUrl()); ?>" type="button" rel="next" class="btn btn-secondary">&raquo;</a>
        <?php else: ?>
            <button type="button" class="btn btn-secondary disabled"><span>&raquo;</span></button>
        <?php endif; ?>
    </div>
<?php endif; ?>
