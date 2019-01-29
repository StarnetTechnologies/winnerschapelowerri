@extends('layouts.app')
@section('title')
Home
@endsection
@section('styles')
	<link rel="stylesheet" href="{{asset('css/vendors/jssor.css')}}">
	<style>


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
			background-image: url({{asset('storage/images/ministries/get-involved.jpg')}});
		}
		.ministry.youth-alive:hover{
			background-image: url({{asset('storage/images/ministries/youth-alive.jpg')}});
		}
		.ministry.teens-church:hover{
			background-image: url({{asset('storage/images/ministries/teens-church.jpg')}});
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
@endsection

@section('top-widget')
<div class="bg-image" style="background-image: url({{asset('storage/images/assets/front-slider-bg.jpg')}});padding-top: 50px;">
	@include('widgets.home-front-slider')
</div>
@endsection


@section('content')
<section id="welcome" class="eclipse-bg">
	@include('widgets.welcome-address')
</section>

@if(count($EVENTS['upcoming']) > 0 || count($EVENTS['happening']) > 0)
	<section id="events" style="background: linear-gradient(#f2f2f2, #fff, #E1E5F0); padding-top: 50px; padding-bottom: 50px ">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			@include('widgets.events')
		</div>
	</div>		
	</section>
@endif

<section id="monthly-theme" style="padding-top:80px">
	@include('widgets.monthly-theme')
</section>

<section id="posts" style="background: linear-gradient(#fff,#E1E5F0); background-attachment: fixed;padding:40px 0">
			<div class="px-2">
			@include('widgets.posts')
			</div>
</section>

<section id="domi-radio">
	@include('widgets.domi-radio')
</section>

<!-- <section class="eclipse-bg" id="ministries"  style="padding:40px 0">
	@include('widgets.ministries')
</section> -->


@endsection

@section('scripts')
	<script src="js/vendors/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/vendors/jssor-init.js"></script>
    <script type="text/javascript">jssor_1_slider_init();</script>
@endsection

