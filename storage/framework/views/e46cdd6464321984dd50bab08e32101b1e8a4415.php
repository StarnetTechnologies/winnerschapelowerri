<div class="row">
    <div class="col-3">
        <div class="text-center" style="float: right;font-size: 40px; width: 100px; height: 100px;border-radius:50%; padding-top:25px; background-color: #fff">
            <i class="fa fa-bullhorn theme-color"></i>
        </div>

    </div>
    <div class="col-9">
        <div class="card">
            <div class="card-header">
                <h4> <?php echo e($announcement->subject); ?></h4>
                <small><i class="fa fa-clock"></i>  <?php echo e($announcement->created_at->diffForHumans()); ?></small>
            </div>
            <div class="card-body">
                <?php echo e($announcement->message); ?>

            </div>
        </div>        
    </div>
</div>
