<nav class="navbar navbar-expand-lg fixed-top">
	<!-- Branding Image -->
		<a class="navbar-brand" href="{{ url('/') }}" >
		<img src="{{asset('storage/images/logo.png')}}" width="50px" height="50px" alt="Winners Chapel Owerri" style="">
	</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars theme-color" style="font-size: 30px"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
			</li>


      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}#events">Events</a>
			</li>	

			<li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}#services">Services</a>
			</li>	

      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}#ministries">Ministries</a>
			</li>	

      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}#pof">Pillars of Faith</a>
			</li>	

      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}#mandate">Mandate</a>
			</li>	

			<li class="nav-item active">
        <a class="nav-link" href="{{url('/live')}}">Live</a>
			</li>	


	@if (Auth::guest())
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">Login</a>
			</li>
		@else
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin')}}">Board</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
								document.getElementById('header-logout-form').submit();">Logout</a>
				</li>
			<form id="header-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
			</form>
		</ul>
		@endif
	 </ul>
  </div>
</nav>
