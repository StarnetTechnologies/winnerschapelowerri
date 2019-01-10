<div class="event happening transit">
    <div class="date transit animated swing infinite">
        <?php echo e($event->startDate()->format('M')); ?><br><?php echo e($event->now()->format('d')); ?>

    </div>
    <div class="event-details">
        <h2 class="theme-color"><?php echo e($event->title); ?></h2>
        <img src="<?php echo e($event->imageUrl()); ?>" alt="<?php echo e($event->title); ?>" width="100%">
        <?php if(Auth::check()): ?>
                <a title="Update event" class="text-info" style="font-size: 16px" href="<?php echo e(route('edit.event', ['id'  => $event->id])); ?>"><i class="fa fa-pen"></i> edit</a>
                <span title="discard event" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-event-<?php echo e($event->id); ?>')"><i class="fa fa-trash"></i> discard</span>

                <div class="confirmation-container" id="discard-event-<?php echo e($event->id); ?>">
                    <p class="text-warning">Are you sure you want to discard this event <strong><?php echo e($event->title); ?> ???!!!</strong></p>
                    <button class="btn btn-primary confirm-no">No</button>
                    <button class="btn btn-danger confirm-yes">Yes, discard</button>
                    
                    <form  action="<?php echo e(route('discard.event',['id' => $event->id])); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="DELETE">
                    </form>
                </div>
        <?php endif; ?>
        <div class="event-description">
            <p><?php echo e($event->description); ?></p>
        </div>
        <div style="font-size: 20px">
            <i class="fa fa-map-marker theme-color"></i>  <?php echo e($event->location); ?>

        </div>
        <div >
            <div>
                <i class="fa fa-calendar theme-color" style="font-size: 40px"></i>  <span class="theme-color">Started: </span> <?php echo e($event->startDate()->format('d M, Y')); ?><i class="fa fa-clock theme-color"></i> <?php echo e($event->startDate()->format('g : ia')); ?> <span class="theme-color"> <?php echo e($event->howfar()); ?></span>
            </div>
        </div>            
    </div>

    <div class="event-countdown">
    <strong>Ending: </strong><i class="fa fa-calendar theme-color"></i> <?php echo e($event->endDate()->format('d M, Y')); ?>

        <div id="countdown-<?php echo e($event->id); ?>" ></div>
        <script>
            var cd = new countdown(document.querySelector("#countdown-<?php echo e($event->id); ?>"),{
            days: <?php echo e(($event->beforeEnd()->y * 365) + ($event->beforeEnd()->m * 30) + $event->beforeEnd()->d); ?>,
            hours: <?php echo e($event->beforeEnd()->h); ?>,
            minutes: <?php echo e($event->beforeEnd()->i); ?>,
            seconds: <?php echo e($event->beforeEnd()->s); ?>,
            timeUpNote: '<?php echo e($event->title); ?> already started!',
            timeRunningNote: '',
            criticalTimesStart: 2,
            //criticalTimesColor: 'blue',
            criticalTimesNote: 'Few minutes before the start of <?php echo e($event->title); ?>',
        });
        </script>
        
    </div>

</div>
