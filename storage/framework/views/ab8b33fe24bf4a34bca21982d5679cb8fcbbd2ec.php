<div id="services" style="background-image: url('<?php echo e(asset('storage/images/assets/church-aud.jpg')); ?>'); background-attachment: fixed" class="bg-image">

	<div class="text-center" style="background-color: rgba(0,0,0,.8)">
		<div style="padding: 100px 20px">
			<?php if($SERVICES->count() > 0): ?>
				<h2 class="super-font white">Worship with us</h2>
				<br>
				<div class="services-container">
					<?php $__currentLoopData = $SERVICES; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="single-service">
						<div classs="white" style=" padding: 5px; margin-bottom: 10px;color: #fff">
							<?php echo $__env->make('templates.service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			<?php endif; ?>
			
		</div>
	</div>	
</div>

<footer style="background-color: #24292E; padding: 20px;padding-bottom:0">
<?php if($CONTACTS !== null): ?>
	<div class="row align-items-center" style="color: #fff">
		<div class="col-md-4">
			<div class="text-center">
				<h4 >Stay Connected</h4>
				<div class="contact" >
					<i class="fa fa-church" style="font-size: 20px; "></i>  <?php echo e($CONTACTS->address); ?>

				</div>
				<br>
				<span class="contact">
					<a href="tel: <?php echo e($CONTACTS->phone1); ?>"><i class="fa fa-phone"></i> </a>
				</span>
				<span class="contact">
					<a href="mailto: <?php echo e($CONTACTS->email); ?>"><i class="fa fa-envelope"></i> </a>
				</span>
				<span class="contact">
					<a href="<?php echo e($CONTACTS->facebook); ?>"><i class="fab fa-facebook"></i> </a>
				</span>
				<span class="contact">
					<a href="<?php echo e($CONTACTS->instagram); ?>"><i class="fab fa-instagram"></i> </a>
				</span>
				<span class="contact">
					<a href="<?php echo e($CONTACTS->twitter); ?>"><i class="fab fa-twitter"></i> </a>
				</span>
				<span class="contact">
					<a href="<?php echo e($CONTACTS->youtube); ?>"><i class="fab fa-youtube"></i> </a>
				</span>

			</div>
		</div>
		<div class="col-md-4">
			<div id="map" style="width: 100%; height:300px; margin-bottom: 10px; background: url(<?php echo e(asset('storage/images/assets/loading-mapp.gif')); ?>) center no-repeat; background-size: cover"></div>
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
<?php endif; ?>

	<?php echo $__env->make('layouts.inc.starnet-watermark', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer>


