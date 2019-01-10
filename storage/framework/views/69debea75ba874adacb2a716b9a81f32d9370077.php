<!--
<h2 class="theme-color text-center section-heading">Events</h2>
<hr
>-->
<div class="<?php echo e((count($EVENTS['happening']) > 0 && count($EVENTS['upcoming']) > 0) ? 'row' : ''); ?>">
    <div class="<?php echo e((count($EVENTS['happening']) > 0 && count($EVENTS['upcoming']) > 0)  ? 'col-md-7' : ''); ?>">
        <?php if(count($EVENTS['happening']) > 0): ?>
        <div class="event-wrapper happening-events-wrapper">
        <div class="events-section-heading">
            <h2>Happening Now <span class="badge"><?php echo e(count($EVENTS['happening'])); ?></span></h2>
        </div>
            <?php $__currentLoopData = $EVENTS['happening']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('templates.event-happening', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

    </div>
    <div class="<?php echo e((count($EVENTS['happening']) > 0 && count($EVENTS['upcoming']) > 0)  ? 'col-md-5' : ''); ?>">
        <?php if(count($EVENTS['upcoming']) > 0): ?>
        <div class="event-wrapper upcoming-events-wrapper">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="events-section-heading">
                    <h2>Upcoming Events <span class="badge"><?php echo e(count($EVENTS['upcoming'])); ?></span></h2>
                    <div style="height: 30px">
                    <a  style="position: relative;opacity:1; float: left" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i style="color:red; font-size: 30px" class="fa fa-arrow-left"></i>
                            <span class="sr-only">Previous</span>
                    </a>
                    <a style="position: relative;opacity:1;float: right" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i style="color:red; font-size: 30px" class="fa fa-arrow-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>

                <!--<ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>-->

                    <div class="carousel-inner">
                    <?php $__currentLoopData = $EVENTS['upcoming']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php echo e($loop->first ? 'active' : ''); ?>">
                            <?php echo $__env->make('templates.event-upcoming', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
        </div>
    <?php else: ?>
        <div class="alert alert-warning">No upcoming event</div>
    <?php endif; ?>
    </div>
</div>




