<nav class="navbar navbar-expand-lg fixed-top">
	<!-- Branding Image -->
		<a class="navbar-brand" href="<?php echo e(url('/')); ?>" >
		<img src="<?php echo e(asset('storage/images/assets/winners-logo.png')); ?>" width="30px" height="30px" alt="Winners Chapel Owerri" style=""> Living Faith Church
	</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars" style="font-size: 30px"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item nav-item-dropdown">
				<a class="nav-link" href="#"><i class="fa fa-info-circle"></i> About</a>
				<div class="nav-dropdown">
						<ul class="p-0">
							<li>
								<a href="<?php echo e(route('ministries')); ?>" class="nav-link">Ministries</a>
							 </li>
							 <li>
								<a href="<?php echo e(route('pastors')); ?>" class="nav-link">Pastors</a>
							 </li>

							 <li>
								<a href="<?php echo e(route('pof')); ?>" class="nav-link">Mandate & Pillars of Faith</a>
							 </li>
							 <li>
								<a href="<?php echo e(route('gallery')); ?>" class="nav-link">Gallery</a>
							 </li>
						</ul>
				</div>
			</li>	

			  <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(route('events')); ?>"><i class="fa fa-calendar"></i> Events</a>
			</li>	

			<li class="nav-item ">
        <a class="nav-link" href="<?php echo e(route('posts')); ?>"><i class="fa fa-pen"></i> Pastor's Desk</a>
			</li>	
						<li class="nav-item ">
        <a class="nav-link" href="<?php echo e(route('announcements')); ?>"><i class="fa fa-bullhorn"></i> Announcements</a>
			</li>

			<li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('testimonies')); ?>"><i class="fa fa-praying-hands"></i> Testimonies</a>
			</li>	

			<li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('live')); ?>"><i class="fa fa-video"></i> Live</a>
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
