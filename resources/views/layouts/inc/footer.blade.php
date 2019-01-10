<div id="services" style="background-image: url('{{asset('storage/images/assets/church-aud.jpg')}}'); background-attachment: fixed" class="bg-image">

	<div class="text-center" style="background-color: rgba(0,0,0,.8)">
		<div style="padding: 100px 20px">
			@if($SERVICES->count() > 0)
				<h2 class="super-font white">Worship with us</h2>
				<br>
				<div class="services-container">
					@foreach($SERVICES as $service)
					<div class="single-service">
						<div classs="white" style=" padding: 5px; margin-bottom: 10px;color: #fff">
							@include('templates.service')
						</div>
					</div>
					@endforeach
				</div>
			@endif
			
		</div>
	</div>	
</div>

<footer style="background-color: #24292E; padding: 20px;padding-bottom:0">
@if($CONTACTS !== null)
	<div class="row align-items-center" style="color: #fff">
		<div class="col-md-4">
			<div class="text-center">
				<h4 >Stay Connected</h4>
				<div class="contact" >
					<i class="fa fa-church" style="font-size: 20px; "></i>  {{$CONTACTS->address}}
				</div>
				<br>
				<span class="contact">
					<a href="tel: {{$CONTACTS->phone1}}"><i class="fa fa-phone"></i> </a>
				</span>
				<span class="contact">
					<a href="mailto: {{$CONTACTS->email}}"><i class="fa fa-envelope"></i> </a>
				</span>
				<span class="contact">
					<a href="{{$CONTACTS->facebook}}"><i class="fab fa-facebook"></i> </a>
				</span>
				<span class="contact">
					<a href="{{$CONTACTS->instagram}}"><i class="fab fa-instagram"></i> </a>
				</span>
				<span class="contact">
					<a href="{{$CONTACTS->twitter}}"><i class="fab fa-twitter"></i> </a>
				</span>
				<span class="contact">
					<a href="{{$CONTACTS->youtube}}"><i class="fab fa-youtube"></i> </a>
				</span>

			</div>
		</div>
		<div class="col-md-4">
			<div id="map" style="width: 100%; height:300px; margin-bottom: 10px; background: url({{asset('storage/images/assets/loading-mapp.gif')}}) center no-repeat; background-size: cover"></div>
		</div>

		<div class="col-md-4">
			<div class="text-center">
				<h4 >Other Links</h4>
				<ul class="other-links">
					<li><a href="http://faithtabernacle.org.ng/" target="_blank">Headquaters <i class="fa fa-external-link-alt"></i></a> </li>
					<li><a href="http://www.davidoyedepoministries.org/" target="_blank">David Oyedepo <i class="fa fa-external-link-alt"></i></a> </li>
					<li><a href="http://faithoyedepo.org/" target="_blank">Faith Oyedepo <i class="fa fa-external-link-alt"></i></a> </li>
					<li><a href="http://davidabioye.org.ng/" target="_blank">David Abioye <i class="fa fa-external-link-alt"></i></a> </li>
					<li><a href="http://domimedia.org/" target="_blank">Online Radio (DOMI radio) <i class="fa fa-external-link-alt"></i></a> </li>
				</ul>
			</div>
		</div>

	</div>
@endif

	@include('layouts.inc.starnet-watermark')
</footer>


