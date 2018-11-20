<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="rgba(255,0,0,1)">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Winners Chapel Owerri</title>
		
		<link rel="shortcut icon" type="image/png" href="{{asset('storage/images/logo.png')}}"/>

		<!-- Styles -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">		<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		<link href="{{ asset('css/events.css') }}" rel="stylesheet">
		<link href="{{ asset('css/cd.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<style>
			body{
				font-family: 'Quicksand', sans-serif;
			}
			.lobster-font{
				font-family: 'Lobster', cursive;
			}
			.winners-chapel-owerri-bold,.prophetic-word{
			    font-size: 50px;
			}
			@media (min-width: 768px){
			    .winners-chapel-owerri-bold,.prophetic-word{
			        font-size: 80px;
			    }
			}
		</style>
		@yield('styles')<!--Other styles-->

		<!--<script  type="text/javascript" language="javascript" src="{{asset('resrc/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.min.js')}}"></script>-->
		<script  type="text/javascript" language="javascript" src="{{ asset('js/cd.js') }}"></script>

		<!--Navigation responsiveness to scroll-->
		<script>
			/*window.addEventListener('scroll', function(){
				let nav = document.querySelector('nav');
				if(window.pageYOffset <= 50){
					nav.style.backgroundColor = 'rgba(255,255,255,.3)';
				}
				else if(window.pageYOffset <= 500){
					let opacity = window.pageYOffset/500;
					if(opacity <=0.5){
						opacity = 0.5;
					}
					nav.style.backgroundColor = "rgb(255,255,255"+opacity+")";
				}
				else{
					nav.style.backgroundColor = "rgb(255,255,255,1)";
				}
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
	</head>
	<body style="background-color: #f7f7f7">
		
		<div id="app">
			@include('layouts.inc.nav')
			@yield('top-widget')

			<div class="container-fluid" style="min-height: 100vh">
				@include('layouts.inc.logs')
					<div id="content">
						@yield('content')
					</div>
			</div>
			@include('layouts.inc.footer')

		</div>
		

		<!-- Scripts -->
		<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/BSmodal.js') }}"></script>
		<script>
		/*	$('#navbarNav').on('show.bs.collapse',function(){
				document.querySelector('nav').style.backgroundColor = "rgba(0,0,0,1)";
			});*/
		</script>
			
			@yield('scripts')
	</body>
</html>
