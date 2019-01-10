<?php $__env->startSection('styles'); ?>
<style>
    #testimony-form{
        background-color: #E1E5F0;
        padding: 10px;
        border-radius: 0px 20px 0px 20px;
        box-shadow: 0px 20px 20px rgba(0,0,0,.1);
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-widget'); ?>
    <?php echo $__env->make('widgets.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="eclipse-bg">
    <div class="row pt-3">
        <div class="col-md-4 offset-md-1">
        <h2 class="text-center">Tell us about God's Favour in your Life</h2>
            <div id="testimony-form">
                <form action="<?php echo e(route('submit.testimony')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="name">Name <span>*</span></label>
                            <br>
                            <small class="grey"><i class="fa fa-info-circle"></i>  Your fullname <i>(required)</i> </small>
                        </div>
                        <div class="col-12">
                            <input class="form-control" id="name" type="text" name="name" placeholder="Your name (required)" required autofocus>
                            <?php if($errors->has('name')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="email">Email <span>*</span></label>
                            <br>
                            <small class="grey"><i class="fa fa-info-circle"></i>  Your email will not be shared to the public <i>(required)</i> </small>
                        </div>
                        <div class="col-12">
                            <input class="form-control" id="email" type="email" name="email" placeholder="Your email" required autofocus>
                            <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="title">Title</label>
                            <br>
                            <small class="grey"><i class="fa fa-info-circle"></i>  Your testimony title <i>(optional)</i></small>
                        </div>
                        <div class="col-12">
                            <input class="form-control" id="title" type="text" name="title" placeholder="Your testimony title" required autofocus>
                            <?php if($errors->has('title')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('title')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="testimony">Testimony</label>
                            <br>
                            <small class="grey"><i class="fa fa-info-circle"></i>  Your testimony <i>(required)</i></small>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" name="testimony" id="testimony" placeholder="Your testimony" required autofocus></textarea>
                            <?php if($errors->has('testimony')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('testimony')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-2">
                            <input type="submit" class="custom-btn btn-block" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-7">
            <div class="p-2">
                <h3 class="text-center super-font theme-color">Testimonies</h3>
                <?php if($testimonies->count() > 0): ?>
                    <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-2">
                            <?php if($testimony->title !== null): ?>
                                <div class="card-header">
                                    <h4 class="card-title"><?php echo e($testimony->title); ?></h4>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                
                                <blockquote class="blockquote card-body">
                                    <p><?php echo e($testimony->testimony); ?></p>
                                    <footer class="blockquote-footer">
                                        <small class="text-muted">
                                            <i class="fa fa-user"></i>  <?php echo e($testimony->name); ?>

                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($testimonies->links()); ?>

                <?php else: ?>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="alert alert-warning">
                                No testimony found
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

        <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>