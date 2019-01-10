        <form class="has-image-upload" method="POST" action="<?php echo e(route('add.event')); ?>">
			<?php echo e(csrf_field()); ?>

					<div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
						 <label class="control-label">Event Title:</label>
						<input id="title" type="text" class="form-control" name="title" placeholder="event title" value="<?php echo e(old('title')); ?>" required autofocus>
						<?php if($errors->has('title')): ?>
								<span class="help-block">
									<?php echo e($errors->first('title')); ?>

								</span>
						<?php endif; ?>
					</div>
					
					<div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
						 <label class="control-label">Description:</label>
						<textarea id="description" class="form-control" name="description" placeholder="event description" required autofocus><?php echo e(old('description')); ?></textarea>
						<?php if($errors->has('description')): ?>
								<span class="help-block">
									<?php echo e($errors->first('description')); ?>

								</span>
						<?php endif; ?>
					</div>

					<div class="form-group<?php echo e($errors->has('location') ? ' has-error' : ''); ?>">
						 <label class="control-label">Location:</label>
						<input id="location" type="text" class="form-control" name="location" placeholder="event location" value="<?php echo e(old('location')); ?>" required autofocus>
						<?php if($errors->has('location')): ?>
								<span class="help-block">
									<?php echo e($errors->first('location')); ?>

								</span>
						<?php endif; ?>
					</div>

			
					<div class="form-group<?php echo e($errors->has('start') ? ' has-error' : ''); ?>">
						<label class="col control-label">Starting Date and Time</label>
						<input type="datetime-local" class="form-control" name="start" required autofocus>
						<?php if($errors->has('start')): ?>
								<span class="help-block">
									<?php echo e($errors->first('start')); ?>

								</span>
						<?php endif; ?>
					</div>

					<div class="form-group<?php echo e($errors->has('end') ? ' has-error' : ''); ?>">
						<label class="col control-label">Ending Date and Time</label>
						<input type="datetime-local" class="form-control" name="end" required autofocus>
						<?php if($errors->has('end')): ?>
								<span class="help-block">
									<?php echo e($errors->first('end')); ?>

								</span>
						<?php endif; ?>
					</div>

					<div class="form-group">
						<label for="" class="label-control">Graphic</label>
						<p class="help-block">You can include a graphic with this event</p>
						<input class="form-control" type="file" accept="image/*" name="image" >
						<div class="image-preview-container" preview-width="100%" preview-height="auto"></div>
					</div>

					<label class="send-notification"><input type="checkbox" name="notification" value="true" checked>  Send Push Notification</label>
					
					<div class="form-group">
						<button type="submit" class="custom-btn" >
							Add Event
						</button>
					</div>

		</form>