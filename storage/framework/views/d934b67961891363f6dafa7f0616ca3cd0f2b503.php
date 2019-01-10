<?php $__env->startSection('styles'); ?>
    <style>

    .main-stream{
        background-color: rgba(0,0,0,.8);
        width: 100%;
        min-height: 400px;
    }
    .prev-stream{
        width: 100%;
        min-height: 200px;
    }
    .stream-header{
        background-color:#24292E;
        color: #fff;
        padding: 10px;
    }
    .stream-body{
        background-color: #fff;
    }
    .stream-description{
        padding: 10px;
    }
    .prev-stream-container{
        background-color:#24292E;
        color: #fff;
        margin-bottom: 5px;
    }

    [data-side]{
        padding-top: 20px;
        padding-bottom: 20px;

    }
    #side-toggler-container{
        position: fixed;
        right: 5%;
        bottom: 10px;
        z-index: 100;
    }

    #side-toggler{
        display: block;
        font-size: 50px;
        cursor: pointer;
    }
    #side-toggler[data-toggler = 'hide']{
        color: red;
        background-color: #fff;
    }

    #side-toggler[data-toggler='show']{
        color: #fff;
        background-color: #24292E
    }

    [data-side]{
        position: fixed;
        bottom: 40px;
        top: 100px;
        z-index:100;
    }

    [data-side = 'hide']{
        height: auto;
    }
    [data-side = 'hide']{
    display: none;
    }

    [data-side = 'hide'] #side-toggler{
        color: red;
    }

    [data-side = 'show']{
        width: 80%;
    right:0;
    }

    [data-side = 'show']{
    display: block;
    background-color: #eee;
    padding: 20px;
    max-height: 500px;
    overflow-y: auto;
    border-radius: 5px;
    box-shadow: 0px 10px 10px rgba(0,0,0,.8);

    }


    @media (min-width: 768px){
        .main{
            padding: 30px 20px;
        }
        .main-inner{
            padding: 0px 20px;
            }
        [data-side]{
            width: 33%;
            right: 20px;
        }
        #other-streams-container{
            max-height: 80vh;
            overflow-y: hidden;
        }
        #other-streams-container:hover{
            overflow-y: auto;
        }
     }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('top-widget'); ?>
	<div style="height: 80px"></div>	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="eclipse-bg">
<?php if($STREAMS->count() > 0): ?>
            <div class="main">
                <div class="row">
                    <div class="col-sm-8" id="main" >
                        <div class="main-inner">
                         <?php if($stream->count() == 1): ?>
                            <?php $stream = $stream->first()?>
                            <div class="stream-container">
                                <div class="stream-header">
                                    <h4><i class="fa fa-video theme-color"></i>  <?php echo e($stream->title); ?></h4>
                                </div>
                                <div class="stream-body">
                                    <iframe class="main-stream" src="<?php echo e('https://www.youtube.com/embed/'.$stream->url); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div style="padding: 0 10px">
                                        <small class="text-right"><i class="fa fa-clock"></i>  <?php echo e($stream->created_at->diffForHumans()); ?></small>
                                        <a style="float: right" href="<?php echo e('https://www.youtube.com/watch?v='.$stream->url); ?>">  <i class="fab fa-youtube"></i>  Watch on Youtube</a>
                                    </div>
                                    <div class="stream-description">
                                        <p><?php echo e($stream->description); ?></p>
                                        <?php if(Auth::check()): ?>
                                            <a title="Update stream" class="text-info" style="font-size: 16px" href="<?php echo e(route('edit.stream', ['id'  => $stream->id])); ?>"><i class="fa fa-pen"></i> edit</a>
                                            <span title="discard stream" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-stream-<?php echo e($stream->id); ?>-confirmation')"><i class="fa fa-trash"></i> discard</span>        
                                            <div class="confirmation-container" id="discard-stream-<?php echo e($stream->id); ?>-confirmation">
                                                <p class="text-warning">Are you sure you want to this stream <strong><?php echo e($stream->title); ?> ???!</strong></p>
                                                <button class="btn btn-primary confirm-no">No</button>
                                                <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                                <form action="<?php echo e(route('discard.stream',['id' => $stream->id])); ?>" method="POST">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="alert alert-warning">No stream found</div>
                                    </div>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>   
                    <div class="col-sm-4">
                        <h3 class="white">Other Streams</h3>
                            <?php if($otherStreams->count() > 0): ?>
                                <div id="other-streams-container">
                                    <?php $__currentLoopData = $otherStreams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stream): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="prev-stream-container">
                                            <iframe class="prev-stream" src="<?php echo e('https://www.youtube.com/embed/'.$stream->url); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <h4><a href="<?php echo e(route('live',['slug'=>$stream->slug])); ?>"><?php echo e($stream->title); ?></a></h4>
                                            <small class="text-right"><i class="fa fa-clock"></i>  <?php echo e($stream->created_at->diffForHumans()); ?> </small>
                                            <a style="float: right" href="<?php echo e('https://www.youtube.com/watch?v='.$stream->url); ?>">  <i class="fab fa-youtube"></i>  Watch on Youtube</a>
                                        
                                            <?php if(Auth::check()): ?>
                                                <a title="Update stream" class="text-info" style="font-size: 16px" href="<?php echo e(route('edit.stream', ['id' => $stream->id])); ?>"><i class="fa fa-pen"></i> edit</a>
                                                <span title="discard stream" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-stream-<?php echo e($stream->id); ?>-confirmation')"><i class="fa fa-trash"></i> discard</span>        
                                                <div class="confirmation-container" id="discard-stream-<?php echo e($stream->id); ?>-confirmation">
                                                    <p class="text-warning">Are you sure you want to this stream <strong><?php echo e($stream->title); ?> ???!</strong></p>
                                                    <button class="btn btn-primary confirm-no">No</button>
                                                    <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                                    <form action="<?php echo e(route('discard.stream',['id' => $stream->id])); ?>" method="POST">
                                                        <?php echo e(csrf_field()); ?>

                                                        <input type="hidden" name="_method" value="DELETE">
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </div>

                            <?php else: ?>
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="alert alert-warning">No Stream found</div>
                                    </div>
                                </div>
                            <?php endif; ?>
                    </div>
                </div>
<?php else: ?>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="alert alert-warning">Nothing yet</div>
        </div>
    </div>
<?php endif; ?>
</div>
<?php if(Auth::check()): ?>
    <div data-side="hide">
        <div id="side-content">
            <?php echo $__env->make('widgets.admin.new-stream', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
    <div id="side-toggler-container">
            <span style="width: 100px; height: 100px; border-radius: 50%; padding-top: 20px" id="side-toggler" class="text-center" title="close" data-toggler='hide' onclick="javascript: sideToggler()" >
                <i class="fa fa-video"></i>
            </span>
    </div>
<?php endif; ?>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/stream.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>