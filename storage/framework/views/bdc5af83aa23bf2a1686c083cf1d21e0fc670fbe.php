<?php $__env->startSection('styles'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/vendors/jssor.css')); ?>">
	<style>
.monthly-theme{
		font-size: 50px;
	}

		/*Ministries*/
		#ministries{
			padding: 20px;
		}
		#events{
			padding-bottom: 5% ;
		}
		.ministry{
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			margin: 20px 0;
			
		}
		.ministry-overlay{
			padding: 15px;
			text-align: center;
		}
		.ministry,.ministry-overlay{
			border-radius: 5px;
			transition: all .3s ease-in-out;
			
		}
		.ministry-icon{
			font-size: 50px;
		}
		.ministry-overlay:hover{
			background: linear-gradient(rgba(255,0,0,0.7),rgba(0,0,0,0.7));
			color: #fff !important;
		}
		.ministry.get-involved:hover{
			background-image: url(<?php echo e(asset('storage/images/ministries/get-involved.jpg')); ?>);
		}
		.ministry.youth-alive:hover{
			background-image: url(<?php echo e(asset('storage/images/ministries/youth-alive.jpg')); ?>);
		}
		.ministry.teens-church:hover{
			background-image: url(<?php echo e(asset('storage/images/ministries/teens-church.jpg')); ?>);
		}
		/*!Ministry*/


	

  
	@media (min-width: 768px){

		.ministry{
			margin: 0 10px;
		}
		.ministry-overlay{
			min-height: 250px;
		}
	}

	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-widget'); ?>
<div class="bg-image" style="background-image: url(<?php echo e(asset('storage/images/assets/front-slider-bg.jpg')); ?>);padding-top: 80px;">
	<?php echo $__env->make('widgets.home-front-slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section id="welcome" class="eclipse-bg">
	<?php echo $__env->make('widgets.welcome-address', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

<section id="events" style="background: linear-gradient(#f2f2f2, #fff, #E1E5F0); padding-top: 50px; padding-bottom: 50px ">
<div class="row">
	<div class="col-md-10 offset-md-1">
		<?php echo $__env->make('widgets.events', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>		
</section>

<section id="monthly-theme" style="padding-top:80px">
	<?php echo $__env->make('widgets.monthly-theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

<section id="posts" style="background: linear-gradient(#fff,#E1E5F0); background-attachment: fixed;padding:40px 0">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<?php echo $__env->make('widgets.posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
	
</section>

<section id="domi-radio">
	<?php echo $__env->make('widgets.domi-radio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

<section class="eclipse-bg" id="ministries"  style="padding:40px 0">
	<?php echo $__env->make('widgets.ministries', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script src="js/vendors/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/vendors/jssor-init.js"></script>
    <script type="text/javascript">jssor_1_slider_init();</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>