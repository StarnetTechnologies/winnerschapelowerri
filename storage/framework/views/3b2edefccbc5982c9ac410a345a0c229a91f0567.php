<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
	<head>
		<?php echo $__env->make('layouts.inc.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</head>
	<body style="background: #fff ">
		<div id="app" style="overflow-x:hidden">
			<?php echo $__env->make('layouts.inc.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->yieldContent('top-widget'); ?>
			<div class="container-fluid" style="min-height: 70vh">
					<div id="content">
					
						<?php echo $__env->yieldContent('content'); ?>
					</div>
			</div>
			<?php echo $__env->make('layouts.inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		</div>
		
		<?php echo $__env->make('layouts.inc.bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</body>
</html>
