
        <form class="has-image-upload" method="POST" action="<?php echo e(route('add.post')); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group <?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                        <label class="control-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="post title" value="<?php echo e(old('title')); ?>" required autofocus>
                        <?php if($errors->has('title')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('title')); ?>

                                </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group <?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                            <label class="control-label">Body:</label>
                        <textarea class="form-control" name="body" placeholder="post content" autofocus><?php echo e(old('bio')); ?></textarea>
                        <?php if($errors->has('body')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('body')); ?>

                                </span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-inner">
                        <div class="form-group">
                            <label for="featured_image" class="label-control">Featured Image</label>
                            <div class="text-center">
                                <img src="<?php echo e(asset('storage/images/pastors/default.png')); ?>" id="default-featured-image" style="width: 200px; height: 200px; border-radius: 50%">
                            </div>
                            <br>
                            <input class="form-control" type="file" name="featured_image" accept="image/*" >
                            <div class="image-preview-container" replace="#default-featured-image"></div>
                        </div>                        
                    </div>
                </div>
                
                <div class="col-12">
                    <label class="send-notification"><input type="checkbox" name="notification"  value="true" checked> Send Push Notification</label>
                    <div class="form-group">
                        <button type="submit" class="custom-btn" >
                            Publish Post
                        </button>
                    </div>
                </div>
            </div>
        </form>

