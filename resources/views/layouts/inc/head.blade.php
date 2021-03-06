		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="rgba(255,0,0,1)">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Official website of Living Faith Church (Winners Chapel) Owerri">
		<meta name="keywords" content="Winners, Winners chapel, LFC, Winners chapel owerri, owerri, church, churches, christian ">
		<meta property="og:title" content="Winners Chapel Owerri">
		<meta property="og:type" content="website">
		<meta property="og:url" content="{{config('app.url')}}">
		<meta property="og:image" content="{{asset('storage/images/assets/winners-logo.png')}}">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="225">
		<meta property="og:image:height" content="225">
		<meta property="og:image:alt" content="Winners Chapel Owerri">
		<meta property="og:description" content="Official website of Living Faith Church (Winners Chapel) Owerri">
		<title>Winners Chapel Owerri &middot; @yield('title')</title>
		
		<link rel="shortcut icon" type="image/png" href="{{asset('storage/images/assets/winners-logo.png')}}"/>
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">		<link href="https://fonts.googleapis.com/css?family=Hind+Madurai" rel="stylesheet">
		
		<!-- Styles -->
		<link href="{{ asset('css/vendors/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/vendors/animate.css') }}" rel="stylesheet">
		<link href="{{ asset('css/vendors/toastr.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/vendors/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		<link href="{{ asset('css/cd.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<style>
			body{
				font-family: 'Open Sans', sans-serif, Helvetica, Arial;
			}
			.section-heading,.super-font{
				font-family:'Black Han Sans', sans-serif, cursive;
			}
		</style>
		@yield('styles')<!--Other styles-->

		<!--<script  type="text/javascript" language="javascript" src="{{asset('resrc/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.min.js')}}"></script>-->
		<script  type="text/javascript" language="javascript" src="{{ asset('js/cd.js') }}"></script>

		
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
