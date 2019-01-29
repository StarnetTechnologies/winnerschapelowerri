
		<!-- Scripts -->
		<script src="{{ asset('js/vendors/jquery-3.3.1.js') }}"></script>
		<script src="{{ asset('js/vendors/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/vendors/owl.carousel.min.js') }}"></script>
		<script>
		$(document).ready(function(){
			$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
 			$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');

			$('#other-links').owlCarousel({
				'items': 8,
				'margin': 20,
				'loop': true,
				'center':true,
				'autoplay': true,
				'responsiveClass':true,
				'responsive':{
					0:{
						items:5,
						nav:true
					},
					700:{
						items:8,
						nav:false
					},
				}
			});

			$('#pastors-desk,#testimonies').owlCarousel({
				'items': 1,
				'margin': 20,
				'center':true,
				'loop':true,
				'nav' : true,
				'navText':["<i class='fas fa-arrow-circle-left' title='Previous'></i>","<i class='fas fa-arrow-circle-right' title='Next'></i>"],
			});


		});
		</script>
		<script src="{{ asset('js/vendors/toastr.min.js') }}"></script>
		<script>
			toastr.options = {
				"closeButton": true,
				"debug": true,
				"newestOnTop": true,
				"progressBar": true,
				"escapeHtml": false,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "0",
				"extendedTimeOut": "0",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			}
	</script>
		<script src="{{ asset('js/toggle.js') }}"></script>
		<script src="{{ asset('js/confirm-delete.js') }}"></script>
		<script src="{{ asset('js/image-preview.js') }}"></script>
		<script src="{{ asset('js/BSmodal.js') }}"></script>
		@include('layouts.inc.toastr')
		<script>
		/*	$('#navbarNav').on('show.bs.collapse',function(){
				document.querySelector('nav').style.backgroundColor = "rgba(0,0,0,1)";
			});*/
		</script>
		<script>
			// Initialize and add the map
				function initMap() {
				var loc = {lat:5.481034, lng: 7.013666};
				var map = new google.maps.Map(
					document.getElementById('map'), {zoom: 17, center: loc});
				var marker = new google.maps.Marker({position: loc, map: map});
				}
	    </script>
	    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdfZO2WaWzMaXDUhJlGDgpqbecnQP2J7c&callback=initMap"></script>
		
		@yield('scripts')