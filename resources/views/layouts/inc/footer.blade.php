<footer id="services" style="background-image: url('{{asset('storage/images/woman-praying.png')}}')" class="bg-image">

	<div class="text-center" style="background: linear-gradient(to bottom right,rgba(255,0,0,.5),rgba(0,0,0,.5));">
		<div style="padding: 50px 20px">
		@if($SERVICES->count() > 0)
			<h2 class="lobster-font white">Worship with us</h2>
			<hr>
			<div class="row">
				@foreach($SERVICES as $service)
				<div class="col-sm-4">
				<div classs="white" style=" padding: 5px; margin-bottom: 10px;color: #fff">
					@include('templates.service')
				</div>
					
				</div>
				@endforeach
				</div>
			</div>
		@endif

		<div class="text-right">
			<small class="white">Designed by <a href="http://starnettechnologies.net">Starnet Technologies</a> || <a href="tel: 08134022913">08134022913</a></small>
		</div>	
	</div>
	
</footer>