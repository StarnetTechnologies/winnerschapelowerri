<nav class="navbar navbar-expand-lg fixed-top">
	<!-- Branding Image -->
		<a class="navbar-brand" href="{{ url('/') }}" stlye="margin: 0" >
		<img src="{{asset('storage/images/assets/lfc-owerri.png')}}" alt="Winners Chapel Owerri" style="">
	</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars" style="font-size: 30px"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      		<li class="nav-item ">
        		<a class="nav-link" href="{{route('home')}}"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item nav-item-dropdown">
				<a class="nav-link" href="#"><i class="fa fa-info-circle"></i> About</a>
				<div class="nav-dropdown">
						<ul class="p-0">
							<li>
								<a href="{{route('wsf')}}" class="nav-link">WSF</a>
							 </li>
							 <li class="nav-item ">
								<a class="nav-link" href="{{route('events')}}"> Events</a>
							</li>	
							 <li>
								<a href="{{route('pastors')}}" class="nav-link">Pastors</a>
							 </li>
							 <li>
								<a href="{{route('gallery')}}" class="nav-link">Gallery</a>
							 </li>
							 <li>
								<a href="{{route('units')}}" class="nav-link">Service Units</a>
							 </li>
							 <li>
								<a href="{{route('pof')}}" class="nav-link">Mandate & Pillars of Faith</a>
							 </li>

						</ul>
				</div>
			</li>	

			<li class="nav-item ">
        		<a class="nav-link" href="{{route('youths')}}"><i class="fa fa-user-tie"></i> Youths</a>
			</li>	

			<li class="nav-item ">
        		<a class="nav-link" href="{{route('posts')}}"><i class="fa fa-pen"></i> Pastor's Desk</a>
			</li>	
			<li class="nav-item ">
        		<a class="nav-link" href="{{route('announcements')}}"><i class="fa fa-bullhorn"></i> Announcements</a>
			</li>

			<li class="nav-item">
        		<a class="nav-link" href="{{route('testimonies')}}"><i class="fa fa-praying-hands"></i> Testimonies</a>
			</li>	

			<li class="nav-item">
        		<a class="nav-link" href="{{route('live')}}"><i class="fa fa-video"></i> Live</a>
			</li>	



	@if (Auth::guest())
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">Login</a>
			</li>
		@else
			<li class="nav-item nav-item-dropdown">
				<a class="nav-link" href="{{route('admin')}}">Admin</a>
				<div class="nav-dropdown">
					<ul class="p-0">
						<li>
							<a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
								document.getElementById('header-logout-form').submit();">Logout</a>
						</li>
						<form id="header-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
						</form>
					</ul>
				</div>
			</li>
		@endif
	 </ul>
  </div>
</nav>
