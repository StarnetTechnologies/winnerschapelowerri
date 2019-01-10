<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('layouts.inc.head')
	</head>
	<body style="background: #fff ">
		<div id="app" style="overflow-x:hidden">
			@include('layouts.inc.nav')
			@yield('top-widget')
			<div class="container-fluid" style="min-height: 70vh">
					<div id="content">
					{{--@include('layouts.inc.logs')--}}
						@yield('content')
					</div>
			</div>
			@include('layouts.inc.footer')

		</div>
		
		@include('layouts.inc.bottom')
	</body>
</html>
