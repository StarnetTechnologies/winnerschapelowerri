<?php
	$now = new DateTime();
?>
<?php $__env->startSection('styles'); ?>
	#contacts-accordion .contact{
		margin: 4px 0;
	}
<?php $__env->stopSection(); ?>
<?php $__env->startSection('top-widget'); ?>
	<div style="height:80px"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panels'); ?>
<div class="row">
	<div class="col-12">
		<div class="col-inner">
			<?php echo $__env->make('widgets.admin.posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>

	<div class="col-md-6">
		<div class="col-inner">
			<?php echo $__env->make('widgets.admin.pastors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>

	<div class="col-md-6">
		<div class="col-inner">
			<?php echo $__env->make('widgets.admin.services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>

	<div class="col-12">
		<div class="col-inner">
			<?php echo $__env->make('widgets.admin.slider-gallery', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
	
	<div class="col-12">
		<div class="col-inner">
			<?php echo $__env->make('widgets.admin.gallery', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>

	<div class="col-12">
		<?php echo $__env->make('widgets.events', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

	<div class="col-12">
		<div class="row">
			<div class="col-md-7">
				<div class="col-inner">
					<?php echo $__env->make('widgets.admin.preferences', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
			</div>
			
			<div class="col-md-5">
				<div class="col-inner">
					<?php echo $__env->make('widgets.admin.contacts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<br>
					<?php echo $__env->make('widgets.admin.announcements', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<br>
					<?php echo $__env->make('widgets.admin.testimonies', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
			</div>
		</div>
	</div>

	

	
	</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.appAdmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>