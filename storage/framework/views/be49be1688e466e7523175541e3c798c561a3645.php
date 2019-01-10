      <?php
        $now = new DateTime();
      ?>
      <?php if($THEME == null): ?>
        <form class="has-image-upload" method="POST" action="<?php echo e(route('new.theme')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <h4 class="text-center">Theme for this month <strong class="theme-color"><?php echo e($now->format('F, Y')); ?></strong></h4>
                <div class="form-group<?php echo e($errors->has('theme') ? ' has-error' : ''); ?>">
                    <label class="control-label">Theme: </label>
                    <input id="theme" type="text" class="form-control" name="theme" placeholder="<?php echo e($now->format('F, Y')); ?> Theme" value="<?php echo e(old('theme')); ?>" required autofocus>
                    <?php if($errors->has('theme')): ?>
                            <span class="help-block">
                                <?php echo e($errors->first('theme')); ?>

                            </span>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->has('bible_verse') ? ' has-error' : ''); ?>">
                    <label class="control-label">Bible Verse:</label>
                        <input id="bible_verse" type="text" class="form-control" name="bible_verse" placeholder="bible verse" value="<?php echo e(old('bible_verse')); ?>" required autofocus>
                        <?php if($errors->has('bible_verse')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('bible_verse')); ?>

                                </span>
                        <?php endif; ?>
                </div>
                
                <div class="form-group <?php echo e($errors->has('note') ? ' has-error' : ''); ?>">
                    <label class="control-label">Note: <i>(Optional)</i></label>
                    <p class="help-block">A note about this month theme</p>
                    <textarea id="note" class="form-control" name="note" placeholder="theme note,if any"><?php echo e(old('note')); ?></textarea>
                    <?php if($errors->has('note')): ?>
                            <span class="help-block">
                                <?php echo e($errors->first('note')); ?>

                            </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="" class="label-control"><i class="fa fa-images"></i> Theme Graphic <i>(optional)</i></label>
                    <p class="help-block">Include a catchy graphics to the the theme </p>
                    <input class="form-control" type="file" name="image" id="">
                    <div class="image-preview-container" preview-width="100%" preview-height="auto"></div>
                </div>

                <label class="send-notification"><input type="checkbox" name="notification"  value="true" checked>  Send Push Notification</label>

                <div class="form-group">
                    <button type="submit" class="custom-btn" >
                        Publish
                    </button>
                </div>
            </form>
        <?php else: ?>
        <form class="has-image-upload" method="POST" action="<?php echo e(route('update.theme',$THEME->first()->id)); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_method" value="PUT">
            <h4 class="text-center">Update this month <strong class="theme-color"><?php echo e($now->format('F, Y')); ?> Theme</strong></h4>
                <div class="form-group <?php echo e($errors->has('theme') ? ' has-error' : ''); ?>">
                    <label class="control-label">Theme: </label>
                    <input id="theme" type="text" class="form-control" name="theme" placeholder="<?php echo e($now->format('F, Y')); ?> Theme" value="<?php echo e($THEME->theme); ?>" required autofocus>
                    <?php if($errors->has('theme')): ?>
                            <span class="help-block">
                                <?php echo e($errors->first('theme')); ?>

                            </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('bible_verse') ? ' has-error' : ''); ?>">
                    <label class="control-label">Bible Verse:</label>
                    <input id="bible_verse" type="text" class="form-control" name="bible_verse" placeholder="bible verse" value="<?php echo e($THEME->bible_verse); ?>" required autofocus>
                    <?php if($errors->has('bible_verse')): ?>
                            <span class="help-block">
                                <?php echo e($errors->first('bible_verse')); ?>

                            </span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group <?php echo e($errors->has('note') ? ' has-error' : ''); ?>">
                    <label class="col-md-3 control-label">Note: <i>(Optional)</i></label>
                    <p class="help-block">A note about this month theme</p>
                    <textarea id="note" class="form-control" name="note" placeholder="theme note,if any" ><?php echo e($THEME->note); ?></textarea>
                    <?php if($errors->has('note')): ?>
                            <span class="help-block">
                                <?php echo e($errors->first('note')); ?>

                            </span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="" class="label-control"><i class="fa fa-images"></i> Theme Graphic <i>(optional)</i></label>
                    <p class="help-block">Update theme graphics</p>
                    <?php if($THEME->image == null): ?>
                        <div class="alert warning">No graphics added yet</div>
                        <input class="form-control" type="file" name="image" id="">
                        <div class="image-preview-container" preview-width="100%" preview-height="auto"></div>
                    <?php else: ?>
                        <div class="text-center">
                            <img src="<?php echo e($THEME->imageUrl()); ?>" alt="<?php echo e($THEME->theme); ?>" width="100%" id="prev-theme-img">
                        </div>
                        <input class="form-control" type="file" name="image" id="">
                        <div class="image-preview-container" replace="#prev-theme-img"></div>

                    <?php endif; ?>
                </div>

                <label class="send-notification"><input type="checkbox" name="notification"  value="true" checked>  Send Push Notification</label>
            
                <div class="form-group">
                    <button type="submit" class="custom-btn" >
                        Update <?php echo e($now->format('F').', '.$now->format('Y')); ?> Theme
                    </button>
                </div>

            </form>
        <?php endif; ?>