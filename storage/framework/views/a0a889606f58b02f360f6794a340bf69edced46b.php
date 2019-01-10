<form class="" method="POST" action="<?php echo e(route('add.service')); ?>">
	<?php echo e(csrf_field()); ?>

	<div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
			<label class="control-label">Service Title:</label>
		<input id="title" type="text" class="form-control" name="title" placeholder="service title" value="<?php echo e(old('title')); ?>" required autofocus>
		<?php if($errors->has('title')): ?>
				<span class="help-block">
					<?php echo e($errors->first('title')); ?>

				</span>
		<?php endif; ?>
	</div>
	
	<div class="form-group<?php echo e($errors->has('location') ? ' has-error' : ''); ?>">
			<label class="control-label">Location:</label>
		<input id="location" type="text" class="form-control" name="location" placeholder="service location" value="<?php echo e(old('location')); ?>" required autofocus>
		<?php if($errors->has('location')): ?>
				<span class="help-block">
					<?php echo e($errors->first('location')); ?>

				</span>
		<?php endif; ?>
	</div>

	<div class="form-group<?php echo e($errors->has('day') ? ' has-error' : ''); ?>">
		<label class="control-label">Days of service</label>
		<select name="day" id="" class="form-control">
			<option value="">Select day of the week</option>
			<option value="Monday">Every Monday</option>
			<option value="Tuesday">Every Tuesday</option>
			<option value="Wednesday">Every Wednesday</option>
			<option value="Thursday">Every Thursday</option>
			<option value="Friday">Every Friday</option>
			<option value="Saturday">Every Saturday</option>
			<option value="Sunday">Every Sunday</option>
		</select>
		<?php if($errors->has('day')): ?>
				<span class="help-block">
					<?php echo e($errors->first('day')); ?>

				</span>
		<?php endif; ?>
	</div>

	<div class="form-group<?php echo e($errors->has('start') ? ' has-error' : ''); ?>">
		<label class="control-label">Starting Time</label>
		<input type="time" class="form-control" name="start" required autofocus>
		<?php if($errors->has('start')): ?>
				<span class="help-block">
					<?php echo e($errors->first('start')); ?>

				</span>
		<?php endif; ?>
	</div>

	<div class="form-group<?php echo e($errors->has('end') ? ' has-error' : ''); ?>">
		<label class="control-label">Ending Date and Time</label>
		<input type="time" class="form-control" name="end" required autofocus>
		<?php if($errors->has('end')): ?>
				<span class="help-block">
					<?php echo e($errors->first('end')); ?>

				</span>
		<?php endif; ?>
	</div>


	<div class="form-group <?php echo e($errors->has('note') ? ' has-error' : ''); ?>">
			<label class="control-label">Note (optional):</label>
		<textarea id="note" class="form-control" name="note" placeholder="note about the service ( if any...)" autofocus><?php echo e(old('note')); ?></textarea>
		<?php if($errors->has('note')): ?>
				<span class="help-block">
					<?php echo e($errors->first('note')); ?>

				</span>
		<?php endif; ?>
	</div>

	<label class="send-notification"><input type="checkbox" name="notification"  value="true" checked> Send Push Notification</label>

	<div class="form-group">
		<button type="submit" class="custom-btn" >
			Add Service
		</button>
	</div>

</form>