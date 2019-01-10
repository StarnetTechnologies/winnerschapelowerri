<nav class="navbar navbar-expand-lg fixed-top">
	<!-- Branding Image -->
		<a class="navbar-brand" href="<?php echo e(url('/')); ?>" >
		<img src="<?php echo e(asset('storage/images/assets/winners-logo.png')); ?>" width="50px" height="50px" alt="Winners Chapel Owerri" style="">
	</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars theme-color" style="font-size: 30px"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">Home <span class="sr-only">(current)</span></a>
			</li>
	

			<li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/')); ?>#services">Services</a>
			</li>	

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/')); ?>#ministries">Ministries</a>
			</li>	

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/')); ?>#pof">Pillars of Faith</a>
			</li>	

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/')); ?>#mandate">Mandate</a>
			</li>	
			      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('events')); ?>">Events</a>
			</li>	

			<li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('posts')); ?>">Pastor's Desk</a>
			</li>	
						<li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('announcements')); ?>">Announcements</a>
			</li>

			<li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('live')); ?>">Live</a>
			</li>	


	<?php if(Auth::guest()): ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
			</li>
		<?php else: ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo e(route('admin')); ?>">Admin</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
								document.getElementById('header-logout-form').submit();">Logout</a>
				</li>
			<form id="header-logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
					<?php echo e(csrf_field()); ?>

			</form>
		</ul>
		<?php endif; ?>
	 </ul>
  </div>
</nav>
