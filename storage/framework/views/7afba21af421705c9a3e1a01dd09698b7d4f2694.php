<?php $__env->startSection('top-widget'); ?>
	<div style="height:100px"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('panels'); ?>
			<div class="card">
				<div class="card-header">
					<h4>Update Service: <strong class="theme-color"><?php echo e($service->title); ?></strong></h4>
				</div>
				<div class="card-body">
					<form class="" method="POST" action="<?php echo e(route('update.service', ['id' => $service->id] )); ?>">
					<?php echo e(csrf_field()); ?>

							<input type="hidden" name="_method" value="PUT">
							<div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
								<div class="row">
								<label class="col-md-2 control-label">Service Title:</label>
									<div class="col-md-10">
										<input id="title" type="text" class="form-control" name="title" placeholder="service title" value="<?php echo e($service->title); ?>" required autofocus>
										<?php if($errors->has('title')): ?>
												<span class="help-block">
													<?php echo e($errors->first('title')); ?>

												</span>
										<?php endif; ?>
									</div>
								</div>
							</div>
							
							<div class="form-group<?php echo e($errors->has('location') ? ' has-error' : ''); ?>">
								<div class="row">
								<label class="col-md-2 control-label">Location:</label>
									<div class="col-md-10">
											<input id="location" type="text" class="form-control" name="location" placeholder="service location" value="<?php echo e($service->location); ?>" required autofocus>
										<?php if($errors->has('location')): ?>
												<span class="help-block">
													<?php echo e($errors->first('location')); ?>

												</span>
										<?php endif; ?>
									</div>
								</div>
							</div>

							<div class="form-group<?php echo e($errors->has('day') ? ' has-error' : ''); ?>">
								<div class="row">
								<label class="col-md-2 control-label">Days of service</label>
								<div class="col-md-10">
									<h4><?php echo e($service->day); ?></h4>
									<select name="day" id="" class="form-control">
										<option value="Monday" <?php echo e($service->day == 'Monday' ? 'selected' : ''); ?>>Every Monday</option>
										<option value="Tuesday" <?php echo e($service->day == 'Tuesday' ? 'selected' : ''); ?>>Every Tuesday</option>
										<option value="Wednesday" <?php echo e($service->day == 'Wednesday' ? 'selected' : ''); ?>>Every Wednesday</option>
										<option value="Thursday" <?php echo e($service->day == 'Thursday' ? 'selected' : ''); ?>>Every Thursday</option>
										<option value="Friday" <?php echo e($service->day == 'Friday' ? 'selected' : ''); ?>>Every Friday</option>
										<option value="Saturday" <?php echo e($service->day == 'Saturday' ? 'selected' : ''); ?>>Every Saturday</option>
										<option value="Sunday" <?php echo e($service->day == 'Sunday' ? 'selected' : ''); ?>>Every Sunday</option>
									</select>
									<?php if($errors->has('day')): ?>
											<span class="help-block">
												<?php echo e($errors->first('day')); ?>

											</span>
									<?php endif; ?>
								</div>
							</div>
						</div>
						
						<div class="form-group<?php echo e($errors->has('start') ? ' has-error' : ''); ?>">
								<div class="row">
								<label class="col-md-2 control-label">Starting Time</label>
								<div class="col-md-10">
									<input id="cover" type="time" class="form-control" name="start" value="<?php echo e($service->start); ?>" required autofocus>
									<?php if($errors->has('start')): ?>
											<span class="help-block">
												<?php echo e($errors->first('start')); ?>

											</span>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<div class="form-group<?php echo e($errors->has('end') ? ' has-error' : ''); ?>">
							<div class="row">
								<label class="col-md-2 control-label">Ending Date and Time</label>
								<div class="col-md-10">
									<input id="cover" type="time" class="form-control" name="end" value="<?php echo e($service->end); ?>" required autofocus>
									<?php if($errors->has('end')): ?>
											<span class="help-block">
												<?php echo e($errors->first('end')); ?>

											</span>
									<?php endif; ?>
								</div>
							</div>
						</div>
						
						
							<div class="form-group<?php echo e($errors->has('note') ? ' has-error' : ''); ?>">
								<div class="row">
								<label class="col-md-2 control-label">Note (optional):</label>
									<div class="col-md-10">
										<textarea id="note" class="form-control" name="note" placeholder="note about the service ( if any...)" required autofocus><?php echo e($service->note); ?></textarea>
										<?php if($errors->has('note')): ?>
												<span class="help-block">
													<?php echo e($errors->first('note')); ?>

												</span>
										<?php endif; ?>
									</div>
								</div>
							</div>

						<label class="send-notification"><input type="checkbox" name="notification"  value="true" checked>  Send Push Notification</label>
						
						<div class="form-group">
							<div class="col-md-8 offset-md-2">
								<button type="submit" class="custom-btn" >
									Update Service
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appAdmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>