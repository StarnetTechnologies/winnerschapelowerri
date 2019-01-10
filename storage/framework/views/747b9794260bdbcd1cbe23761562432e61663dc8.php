		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="rgba(255,0,0,1)">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

		<title>Winners Chapel Owerri</title>
		
		<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('storage/images/assets/winners-logo.png')); ?>"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Hind+Madurai" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">		
		
		<!-- Styles -->
		<link href="<?php echo e(asset('css/vendors/bootstrap.min.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('css/vendors/animate.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('css/vendors/toastr.min.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('css/cd.css')); ?>" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<style>
			body{
				font-family: 'Hind Madurai', sans-serif;
			}
			.section-heading,.super-font{
				font-family:'Black Han Sans', sans-serif, cursive;
			}
		</style>
		<?php echo $__env->yieldContent('styles'); ?><!--Other styles-->

		<!--<script  type="text/javascript" language="javascript" src="<?php echo e(asset('resrc/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.min.js')); ?>"></script>-->
		<script  type="text/javascript" language="javascript" src="<?php echo e(asset('js/cd.js')); ?>"></script>

		<!--Navigation responsiveness to scroll-->
		<script>
			/*window.addEventListener('scroll', function(){
				let nav = document.querySelector('nav');
				
			});*/

		</script>
		
		<!--OneSignal JS-->
		<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
		<script>
		var OneSignal = window.OneSignal || [];
		OneSignal.push(function() {
			OneSignal.init({
			appId: "f3f6aa69-25ef-40f2-86c2-0c85f8c8a42f",
			autoRegister: true,
			notifyButton: {
				enable: true,
			},
			});
		});
		</script>
