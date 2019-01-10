<form action="<?php echo e(route('change.password')); ?>" method="POST">
	<?php echo e(csrf_field()); ?>

	<input type="hidden" name="_method" value="PUT" >
	
	<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
		<label for="password" class="control-label">New Password</label>
		<input id="password" type="password" class="form-control" name="password" required>
		<?php if($errors->has('password')): ?>
			<span class="help-block">
				<strong><?php echo e($errors->first('password')); ?></strong>
			</span>
		<?php endif; ?>
	</div>

	<div class="form-group">
		<label for="password-confirm" class="control-label">Confirm Password</label>
		<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
	</div>
						
	<div class="form-group">
			<button type="submit" class="custom-btn" >
				Change Password
			</button>
	</div>
	
</form>