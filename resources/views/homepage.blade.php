@extends('layouts.app')
@section('styles')
	<style>
#moving-sky-bg{
	background-size: cover !important;
}
#moving-sky-overlay{
    width: 100%;
	padding: 30vh 5%;
	padding-bottom: 70vh;
	font-weight: bold !important;
	background-color: rgba(0,0,0,.7);
}

		/*Ministries*/
		#ministries{
			padding: 20px;
		}
		.welcome-address-container{
			background: url({{asset('storage/images/woman-joyfully-praising.jpg')}}) no-repeat;
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
			background-image: url({{asset('storage/images/ministries/get-involved.jpg')}});
		}
		.ministry.youth-alive:hover{
			background-image: url({{asset('storage/images/ministries/youth-alive.jpg')}});
		}
		.ministry.teens-church:hover{
			background-image: url({{asset('storage/images/ministries/teens-church.jpg')}});
		}
		/*!Ministry*/

		/*Pillars of faith*/
		#pof{
			background-image: url('storage/images/pillars.jpg');
			background-attachment: fixed;
		}
		.pof-container{
			padding: 10px;
			text-align: center;
			background: linear-gradient(rgba(0,0,0,1),#fff);
			color: #fff;
			overflow: hidden;
			transition: all .5s ease-in-out;
			margin-top: 10px;
			border-radius: 5px;
			border: 1px solid rgba(255,0,0,.7)
		}
		.pof-container:hover{
			box-shadow: 10px 10px 10px rgba(255,255,255,0.6);
			background: linear-gradient(rgba(0,0,0,1),#ff0000);
		}
	/*!Pillars of Faith*/



    .pt-bg {
      background-position: center;
	  background-size: cover;
	  background-repeat: no-repeat;
	  height: 300px;
	  width: 100%;
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
		.pastor-figure{
			margin-top: -300px;
		}
		.pof-container{
			min-height: 300px;
			margin: 5px 10px;
		}
	}
	</style>
@endsection

@section('top-widget')
			@include('widgets.home-front-banner')
@endsection



@section('content')
<section id="welcome">
	@include('widgets.welcome-address')
</section>
<section id="events">
	<div id="events-container">
		@include('widgets.events')
	</div>
</section>
<section id="prophetic-word">
	@include('widgets.monthly-prophetic')
</section>
<section id="ministries">
	@include('widgets.ministries')
</section>

<section id="pof">
	@include('widgets.pillars-of-faith')
</section>

<section id="mandate">
	@include('widgets.mandate')
</section>

<section id="pastoral-team">
	@include('widgets.pastoral-team')
</section>
<section id="wap">
	@include('widgets.gallery')		
</section>

@endsection

