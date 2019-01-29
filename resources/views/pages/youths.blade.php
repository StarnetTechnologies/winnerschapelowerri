@extends('layouts.app')
@section('title')
 Youth Alive
@endsection
@section('styles')
@endsection

@section('top-widget')
    @include('widgets.breadcrumb')
@endsection

@section('content')
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Youth Alive</h3>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<p>
				The Living Faith Church Worldwide is a Christian 
				missionary organization, whose primary objective 
				is the general development and upliftment of mankind 
				by stirring up the God given potentials embedded in people 
				of all race and nations through the propagation of the 
				gospel of Jesus Christ.
			</p>

			<p>
				Our task is to liberate the entire world from all forms of 
				oppressions of the enemy both spiritual and physical through 
				the teaching and preaching of the Word of Faith, schooling men 
				o exploits in life and releasing men and women to their full 
				potentials to benefit humanity. The Youth Alive fellowship is 
				the arm of the ministry dedicated to the Youths in the ministry
			</p>

			<div class="text-center">
				<img src="{{asset('storage/images/assets/youth-alive-excos.jpg')}}" alt="Youth Alive Excos" width="100%">
				<em class="text-right">Youth Alive Excos</em>
			</div>
			<br>
			<h4 class="theme-color">Vision Of Youth Alive Fellowship</h4>
			<br>
			<p>
				To secure the future of our youths via a church based movement 
				that is aimed at rescuing them from purposelessness
			</p>
			<h4 class="theme-color">Mission of the Youth Alive Fellowship</h4>
			<br>
			<ul>
				<li>To make them spiritually sound sons and daughters of the most high God and responsible citizens.</li>
				<li>To raise an army of visionaries with a view to promoting their leadership potentials.</li>
				<li>To give them a productive orientation and a contributor&rsquo;s mentality</li>
				<li>To educate them on the traditions of this commission and impart into them values that have made the Living Faith Church renowned.</li>
				<li>To enhance the era of reformation for the youth body.</li>
				<li>To give them a purpose for living and train them on how to actualize it.</li>
				<li>To re-engineer and enhance the value system of our youths generally and the world at large.</li>
				<li>To acquaint them with other youth movements around the world.</li>
			</ul>

			<h4 class="theme-color">Core Values of the Youth Alive Fellowship</h4>
			<br>	
			<ul>
				<li>SPIRITUALITY</li>
				<li>PURPOSE</li>
				<li>LEADERSHIP</li>
				<li>SERVICE</li>
				<li>RESPONSIBILITY</li>
				<li>INTEGRITY</li>
			</ul>
		</div>
	</div>
</div>
@endsection

