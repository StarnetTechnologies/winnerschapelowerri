<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('layouts.inc.head')
		<link href="{{ asset('css/admin-board.css') }}" rel="stylesheet">
	</head>
	<body style="overflow-x: hidden">
		<div id="app" style="overflow-x:hidden">
			@include('layouts.inc.nav')
			@yield('top-widget')
			<div class="container-fluid" style="min-height: 70vh">
					<div id="content">
						<div id="admin-area">
							<div class="row">
								
								<!--LHS panel-->
								<div class="col-sm-4" >

									<div class="col-inner" id="lhs-panel">

										<div class="card">
											<div class="card-header">
												<a href="{{route('admin')}}" class="btn btn-block btn-info"><i class="fa fa-tachometer-alt"></i>  Dashboard</a>
											</div>
											<div class="card-body admin-panel" id="fixed-lhs" style="padding: 0">
											@if($THEME !== null)
												@if($THEME->image !== null && $THEME->image !== '')
													<!--<img src="{{$THEME->imageUrl()}}" alt="{{$THEME->theme}}" width="100%">-->
												@endif
											@endif	
										<div id="menu-container">
													<div class="accordion" id="accordion">
														
														<div class="accordion-btn" data-toggle="collapse" data-target="#monthly-theme" aria-expanded="true" aria-controls="monthly-theme">
															<i class="fa fa-calendar"></i> {{$now->format('F, Y')}} Monthly Theme {!!$THEME == null ? '<span class="badge badge-danger animated flash infinite slow">Not Available</span>' : ''!!} 
														</div>
														<div id="monthly-theme" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																@include('widgets.admin.new-theme')
														</div>

														<div class="accordion-btn" data-toggle="collapse" data-target="#push-notification" aria-expanded="true" aria-controls="push-notification">
															<i class="fa fa-bell"></i>  Send Push Notification
														</div>
														<div id="push-notification" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																@include('widgets.admin.push-notification')
														</div>

														<div class="accordion-btn" data-toggle="collapse" data-target="#new-announcement" aria-expanded="true" aria-controls="new-announcement">
															<i class="fa fa-bullhorn"></i> New Announcement
														</div>
														<div id="new-announcement" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																@include('widgets.admin.new-announcement')
														</div>

														<div class="accordion-btn" data-toggle="collapse" data-target="#add-event" aria-expanded="true" aria-controls="add-event">
															<i class="fa fa-plus-circle"></i>  New Event
														</div>
														<div id="add-event" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																@include('widgets.admin.new-event')
														</div>


														<div class="accordion-btn" data-toggle="collapse" data-target="#change-password" aria-expanded="true" aria-controls="change-password">
															<i class="fa fa-key"></i>  Change Admin Password
														</div>
														<div id="change-password" class="collapse admin-panel-collapse" aria-labelledby="headingOne" data-parent="#accordion">
																@include('widgets.admin.change-password')
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--LHS panel-->

								<div class="col-sm-8">
										@yield('panels')
								</div>	

							</div>
						</div>
					</div>
			</div>
			@include('layouts.inc.starnet-watermark')
		</div>
		@include('layouts.inc.bottom')
	</body>
</html>
