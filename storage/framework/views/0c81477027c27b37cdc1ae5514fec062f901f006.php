        <form class="" method="POST" action="<?php echo e(route('push.notification')); ?>">
			<?php echo e(csrf_field()); ?>

					<div class="form-group<?php echo e($errors->has('heading') ? ' has-error' : ''); ?>">
						 <label class="control-label">Heading:</label>
						<input id="heading" type="text" class="form-control" name="heading" placeholder="notification heading" value="<?php echo e(old('heading')); ?>" required autofocus>
						<?php if($errors->has('heading')): ?>
								<span class="help-block">
									<?php echo e($errors->first('heading')); ?>

								</span>
						<?php endif; ?>
					</div>
					
					<div class="form-group <?php echo e($errors->has('content') ? ' has-error' : ''); ?>">
						 <label class="control-label">Content:</label>
						<textarea id="body" class="form-control" name="content" placeholder="notification content" required autofocus><?php echo e(old('content')); ?></textarea>
						<?php if($errors->has('content')): ?>
								<span class="help-block">
									<?php echo e($errors->first('content')); ?>

								</span>
						<?php endif; ?>
					</div>

				
					<div class="form-group">
						<button type="submit" class="custom-btn" >
							Send Push Notification
						</button>
					</div>

		</form>