<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
	<head>
		<?php echo $__env->make('layouts.inc.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<link href="<?php echo e(asset('css/admin-board.css')); ?>" rel="stylesheet">
	</head>
	<body style="overflow-x: hidden">
		<div id="app" style="overflow-x:hidden">
			<?php echo $__env->make('layouts.inc.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->yieldContent('top-widget'); ?>
			<div class="container-fluid" style="min-height: 70vh">
					<div id="content">
						<div id="admin-area">
							<div class="row">
								
								<!--LHS panel-->
								<div class="col-sm-4" >

									<div class="col-inner" id="lhs-panel">

										<div class="card">
											<div class="card-header">
												<a href="<?php echo e(route('admin')); ?>" class="btn btn-block btn-info"><i class="fa fa-tachometer-alt"></i>  Dashboard</a>
											</div>
											<div class="card-body admin-panel" id="fixed-lhs" style="padding: 0">
											<?php if($THEME !== null): ?>
												<?php if($THEME->image !== null && $THEME->image !== ''): ?>
													<!--<img src="<?php echo e($THEME->imageUrl()); ?>" alt="<?php echo e($THEME->theme); ?>" width="100%">-->
												<?php endif; ?>
											<?php endif; ?>	
										<div id="menu-container">
													<div class="accordion" id="accordion">
														
														<div class="accordion-btn" data-toggle="collapse" data-target="#monthly-theme" aria-expanded="true" aria-controls="monthly-theme">
															<i class="fa fa-calendar"></i> <?php echo e($now->format('F, Y')); ?> Monthly Theme <?php echo $THEME == null ? '<span class="badge badge-danger animated flash infinite slow">Not Available</span>' : ''; ?> 
														</div>
														<div id="monthly-theme" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																<?php echo $__env->make('widgets.admin.new-theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
														</div>

														<div class="accordion-btn" data-toggle="collapse" data-target="#push-notification" aria-expanded="true" aria-controls="push-notification">
															<i class="fa fa-bell"></i>  Send Push Notification
														</div>
														<div id="push-notification" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																<?php echo $__env->make('widgets.admin.push-notification', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
														</div>

														<div class="accordion-btn" data-toggle="collapse" data-target="#new-announcement" aria-expanded="true" aria-controls="new-announcement">
															<i class="fa fa-bullhorn"></i> New Announcement
														</div>
														<div id="new-announcement" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																<?php echo $__env->make('widgets.admin.new-announcement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
														</div>

														<div class="accordion-btn" data-toggle="collapse" data-target="#add-event" aria-expanded="true" aria-controls="add-event">
															<i class="fa fa-plus-circle"></i>  New Event
														</div>
														<div id="add-event" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																<?php echo $__env->make('widgets.admin.new-event', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
														</div>


														<div class="accordion-btn" data-toggle="collapse" data-target="#change-password" aria-expanded="true" aria-controls="change-password">
															<i class="fa fa-key"></i>  Change Admin Password
														</div>
														<div id="change-password" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																<?php echo $__env->make('widgets.admin.change-password', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--LHS panel-->

								<div class="col-sm-8">
										<?php echo $__env->yieldContent('panels'); ?>
								</div>	

							</div>
						</div>
					</div>
			</div>
			<?php echo $__env->make('layouts.inc.starnet-watermark', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<?php echo $__env->make('layouts.inc.bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</body>
</html>
