<form class="has-image-upload" method="POST" action="<?php echo e(route('add.pastor')); ?>" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<div class="form-group<?php echo e($errors->has('fullname') ? ' has-error' : ''); ?>">
		<label class="control-label">Full name (including title e.g Pastor,Rev., Bishop):</label>
		<input  type="text" class="form-control" name="fullname" placeholder="pastor's full name" value="<?php echo e(old('fullname')); ?>" required autofocus>
		<?php if($errors->has('fullname')): ?>
				<span class="help-block">
					<?php echo e($errors->first('fullname')); ?>

				</span>
		<?php endif; ?>
	</div>
	
	<div class="form-group <?php echo e($errors->has('position') ? ' has-error' : ''); ?>">
		<label class="control-label">Position:</label>
		<input id="position" type="text" class="form-control" name="position" placeholder="pastor's position" value="<?php echo e(old('position')); ?>" required autofocus>
		<?php if($errors->has('position')): ?>
				<span class="help-block">
					<?php echo e($errors->first('position')); ?>

				</span>
		<?php endif; ?>
	</div>

	<div class="form-group <?php echo e($errors->has('bio') ? ' has-error' : ''); ?>">
			<label class="control-label">Bio:</label>
            <p class="help-block">A little info about the pastor</p>
		<textarea id="bio" class="form-control" name="bio" placeholder="pastor's bio ( if any...)" autofocus><?php echo e(old('bio')); ?></textarea>
		<?php if($errors->has('bio')): ?>
				<span class="help-block">
					<?php echo e($errors->first('bio')); ?>

				</span>
		<?php endif; ?>
	</div>

    <div class="form-group">
        <label for="dp" class="label-control">Display Photo</label>
        <div class="text-center">
            <img src="<?php echo e(asset('storage/images/pastors/default.png')); ?>" id="default-dp" style="width: 200px; height: 200px; border-radius: 50%">
		</div>
		<br>
        <input class="form-control" type="file" name="display_photo" accept="image/*" id="dp">
		<div class="image-preview-container" replace="#default-dp"></div>

	</div>

	<label class="send-notification"><input type="checkbox" name="notification"  value="true" checked> Send Push Notification</label>

	<div class="form-group">
		<button type="submit" class="custom-btn" >
			Add Pastor
		</button>
	</div>

</form>