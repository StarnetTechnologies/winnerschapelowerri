<?php $__env->startSection('styles'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/vendors/jssor.css')); ?>">
	<style>
#front-banner{
	background-size: cover !important;
}
#front-banner-overlay{
    width: 100%;
	padding: 30vh 5%;
	font-weight: bold !important;
	background-color: rgba(0,0,0,.3);
}
.monthly-theme{
		font-size: 50px;
	}

		/*Ministries*/
		#ministries{
			padding: 20px;
		}
		.welcome-address-container{
			background: url(<?php echo e(asset('storage/images/assets/woman-joyfully-praising.jpg')); ?>) no-repeat;
			background-position: -1200px -200px; 
			background-size: cover;
		}
		#events{
			background: linear-gradient(#fff,#eee);
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

		/*Pillars of faith*/
		#pof{
			background-image: url('storage/images/assets/pillars.jpg');
			background-attachment: fixed;
		}
		.pof-container{
			padding: 10px;
			text-align: center;
			background-color: #fff;
			overflow: hidden;
			transition: all .5s ease-in-out;
			margin-top: 10px;
			border-radius: 5px;
			border: 1px solid rgba(255,0,0,.7)
		}
		.pof-container:hover{
			box-shadow: 0px 0px 10px rgba(255,255,255,0.6);
			background: linear-gradient(rgba(0,0,0,1),#ff0000);
			color: #fff;
		}
	/*!Pillars of Faith*/

.pastors-container,.posts-container{
	 margin: 7px 5px;
 }
.pastor-wrapper{
	border: 1px solid #f7f7f7;
	 border-radius: 5px;
	 padding: 5px;
	 background-color: #fff;
	 margin: 7px 5px;
}

 .pastor-container .pastor-dp>img{
	 border-radius: 10px;
	 border: 5px solid #fff;
 }
 [class ^= 'pastor-info']{
	 padding-left: 20px;
 }
 .pastor-container .pastor-info{
	 padding: 20px 10px;
 }
 .pastor-info-with-bio .bio-container{
	 background-color: #eee;
	 padding: 10px;
	 border-radius: 5px;
 }
.gallery-container img.animated{
		animation-duration: 4s;
	}

	

  
	@media (min-width: 768px){

		.ministry{
			margin: 0 10px;
		}
		.ministry-overlay{
			min-height: 250px;
		}
		.welcome-address-container{
			background-position: -600px 0; 
		}

		.pof-container{
			min-height: 300px;
			margin: 5px 10px;
		}
		.pastors-container,.posts-container{
			margin-left: 100px;
			margin-right: 100px;
		}
		.pastor-wrapper .pastor-info{
			padding-top: 70px;
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
<section id="welcome">
	<?php echo $__env->make('widgets.welcome-address', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

<section id="events" style="background-image: url(<?php echo e(asset('storage/images/assets/events-bg.jpg')); ?>); padding-top: 50px; padding-bottom: 50px ">
	<div id="events-container">
		<?php echo $__env->make('widgets.events', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</section>

<section id="monthly-theme" style="padding-top:80px">
	<h2 class="text-center super-font theme-color"><?php echo e($now->format('F, Y')); ?> Theme</h2>
	<hr>
	<?php echo $__env->make('widgets.monthly-theme', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

<section id="posts">
	<?php echo $__env->make('widgets.posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

<section id="domi-radio">
	<?php echo $__env->make('widgets.domi-radio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

<section id="ministries"  style="background-color: #fff;padding-top:80px">
	<?php echo $__env->make('widgets.ministries', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>


<section id="pof">
	<?php echo $__env->make('widgets.pillars-of-faith', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>


<section id="mandate" style="background:linear-gradient(to right,rgba(255,0,0,.2), #fff, rgba(0,0,0,.2))">
	<?php echo $__env->make('widgets.mandate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>

<section id="pastoral-team" style="padding:50px 0 ">
	<?php echo $__env->make('widgets.pastoral-team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</section>
<section id="wap">
	<?php echo $__env->make('widgets.gallery', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>		
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script src="js/vendors/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/vendors/jssor-init.js"></script>
    <script type="text/javascript">jssor_1_slider_init();</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>