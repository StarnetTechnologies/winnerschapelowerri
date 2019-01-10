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

        <?php if(count($EVENTS['upcoming']) > 0): ?>
        <div class="event-wrapper upcoming-events-wrapper">

            <div id="event-carousel" class="carousel slide" data-ride="carousel">
                <div class="events-section-heading">
                    <h2>Upcoming Events <span class="badge"><?php echo e(count($EVENTS['upcoming'])); ?></span></h2>
                    <div style="height: 30px">
                    <a  style="position: relative;opacity:1; float: left" class="carousel-control-prev" href="#event-carousel" role="button" data-slide="prev">
                            <i style="color:red; font-size: 30px" class="fa fa-arrow-left"></i>
                            <span class="sr-only">Previous</span>
                    </a>
                    <a style="position: relative;opacity:1;float: right" class="carousel-control-next" href="#event-carousel" role="button" data-slide="next">
                        <i style="color:red; font-size: 30px" class="fa fa-arrow-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>

                <!--<ol class="carousel-indicators">
                    <li data-target="#event-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#event-carousel" data-slide-to="1"></li>
                    <li data-target="#event-carousel" data-slide-to="2"></li>
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
    <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-warning">No upcoming event</div>
            </div>
        </div>
    <?php endif; ?>




