
		<!-- Scripts -->
		<script src="{{ asset('js/vendors/jquery-3.3.1.js') }}"></script>
		<script src="{{ asset('js/vendors/bootstrap.min.js') }}"></script>
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
				// The location of Uluru
				var loc = {lat:5.486865, lng: 7.018988};
				// The map, centered at Uluru
				var map = new google.maps.Map(
					document.getElementById('map'), {zoom: 17, center: loc});
				// The marker, positioned at Uluru
				var marker = new google.maps.Marker({position: loc, map: map});
				}
	    </script>
	    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdfZO2WaWzMaXDUhJlGDgpqbecnQP2J7c&callback=initMap"></script>
		
		@yield('scripts')