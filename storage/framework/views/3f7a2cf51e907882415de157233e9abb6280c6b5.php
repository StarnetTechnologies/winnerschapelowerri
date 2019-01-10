<h4><?php echo e($service->title); ?></h4>
<?php if(Auth::check()): ?>
        <a title="Update service" class="text-info" style="font-size: 16px" href="<?php echo e(route('edit.service', ['id'  => $service->id])); ?>"><i class="fa fa-pen"></i> edit</a>
        <span title="discard service" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-service-<?php echo e($service->id); ?>-confirmation')"><i class="fa fa-trash"></i> discard</span>        
        <div class="confirmation-container" id="discard-service-<?php echo e($service->id); ?>-confirmation">
            <p class="text-warning">Are you sure you want to remove <strong><?php echo e($service->title); ?> ???!</strong></p>
            <button class="btn btn-primary confirm-no">No</button>
            <button class="btn btn-danger confirm-yes">Yes,  discard</button>
            <form action="<?php echo e(route('discard.service',['id' => $service->id])); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="_method" value="DELETE">
            </form>
        </div>

        <?php endif; ?>
<p class="grey"><i class="fa fa-map-marker"></i>  <?php echo e($service->location); ?></p>
<p class="grey"><i class="fa fa-clock"></i>  <?php echo e($service->normalTime($service->start)); ?> - <?php echo e($service->normalTime($service->end)); ?> Every <?php echo e($service->day); ?></p> 
