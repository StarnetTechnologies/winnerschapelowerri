<div id="services" style="background-image: url('{{asset('storage/images/assets/church-aud.jpg')}}'); background-attachment: fixed" class="bg-image">

	<div class="text-center" style="background-color: rgba(0,0,0,.8)">
		<div style="padding: 50px 20px">
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

<div>
	<div class="owl-carousel owl-theme row py-2" id="other-links" style="background-color:#fff">
			<a href="http://davidabioye.org.ng/" target="_blank">
				<img src="{{asset('storage/images/assets/da.png')}}" alt="David Abioye" title="David Abioye">
			</a>

			<a href="http://faithoyedepo.org/" target="_blank">
				<img src="{{asset('storage/images/assets/fao.png')}}" alt="Faith Oyedepo" title="Faith Oyedepo">
			</a>

		
			<a href="http://radio.davidoyedepoministries.org/" target="_blank">
				<img src="{{asset('storage/images/assets/radio.png')}}" alt="DOMI Radio" title="DOMI Radio">
			</a>

			<a href="http://domionlinestore.org/" target="_blank">
				<img src="{{asset('storage/images/assets/book.png')}}" alt="Dominion Bookstore" title="Dominion Bookstore">
			</a>

		
			<a href="http://covenantuniversity.edu.ng/" target="_blank">
				<img src="{{asset('storage/images/assets/cu.png')}}" alt="Convenant University" title="Convenant University">
			</a>

			<a href="http://lmu.edu.ng/" target="_blank">
				<img src="{{asset('storage/images/assets/lmu.png')}}" alt="Landmark University" title="Landmark University">
			</a>

			<a href="http://winners-chapel.org.uk/" target="_blank">
				<img src="{{asset('storage/images/assets/lfcuk.png')}}" alt="Winners Chapel, UK" title="Winners Chapel, UK">
			</a>

			<a href="http://winnerschapelny.org/" target="_blank">
				<img src="{{asset('storage/images/assets/lfus.png')}}" alt="Winners Chapel, New York" title="Winners Chapel, New York">
			</a>

	</div>
</div>

<footer style="background-color: #24292E;">
	<div class="row align-items-center" style="color: #fff">
	@if($CONTACTS !== null)
		<div class="col-md-12">
			<div id="map" style="width: 100%; height:300px; margin-bottom: 10px; background: url({{asset('storage/images/assets/loading-mapp.gif')}}) center"></div>
		</div>


		<div class="col-md-8">
			<div class="text-center">
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
		@endif
		<div class="col-md-4">
			@include('layouts.inc.starnet-watermark')
		</div>
	</div>

</footer>


