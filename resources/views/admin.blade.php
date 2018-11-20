@extends('layouts.app')
<?php
	$now = new DateTime();
?>
@section('styles')
	<link href="{{ asset('css/events.css') }}" rel="stylesheet">
	<style>
		body{  
			background: linear-gradient(#000,#fff)
		}
		#menu-container{
			background-color: #fff;
		}
		@media (min-width: 768px){
			#menu-container{
				margin: 5px 10px;
			}
		}
	</style>
@endsection

@section('top-widget')
	<?php $_breadcrumb = "Administration" ?>
	@include('widgets.breadcrumb')			
@endsection

@section('content')
<div id="admin-area">
	@include('widgets.monthly-prophetic')
	<div class="row">
			<div class="col-sm-8">
				<div id="menu-container">
					<div class="accordion" id="accordion">

							<div class="{{$PW == null ? 'animated flash infinite slow' : ''}} accordion-btn" type="button" data-toggle="collapse" data-target="#monthly-prophetic" aria-expanded="true" aria-controls="monthly-prophetic">
								<i class="fa fa-plus-circle"></i> {{$now->format('F, Y')}} Prophetic Words
							</div>
							
							<div class="panel">
								<div id="monthly-prophetic" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										@include('admin.monthly-prophetic')
									</div>
								</div>
							</div>

							<div class="accordion-btn" type="button" data-toggle="collapse" data-target="#push-notification" aria-expanded="true" aria-controls="push-notification">
								<i class="fa fa-plus-circle"></i>  Send Push Notification
							</div>
							
							<div class="panel">
								<div id="push-notification" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										@include('admin.push-notification')
									</div>
								</div>
							</div>


							<div class="accordion-btn" type="button" data-toggle="collapse" data-target="#add-service" aria-expanded="true" aria-controls="add-service">
								<i class="fa fa-plus-circle"></i>  Add Service
							</div>
							
							<div class="panel">
								<div id="add-service" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										@include('admin.add-service')
									</div>
								</div>
							</div>

							<div class="accordion-btn" type="button" data-toggle="collapse" data-target="#add-event" aria-expanded="true" aria-controls="add-event">
								<i class="fa fa-plus-circle"></i>  Add Event
							</div>
							
							<div class="panel">
								<div id="add-event" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										@include('admin.add-event')
									</div>
								</div>
							</div>

							<div class="accordion-btn" type="button" data-toggle="collapse" data-target="#change-password" aria-expanded="true" aria-controls="change-password">
								<i class="fa fa-plus-circle"></i>  Change Admin Password
							</div>
							
							<div class="panel">
								<div id="change-password" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										@include('admin.change-password')
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card">
						<div class="card-header">
							<h4 class="theme-color">Services</h4>
						</div>
						<div class="card-body">
							@if($SERVICES->count() > 0)
							@foreach($SERVICES as $service)
								<div class="card" style="margin-bottom: 5px">
							<div class="card-body">
									@include('templates.service')
								</div>
							</div>
							@endforeach
								
							@else
								<div class="alert alert-info text-center">No service added yet</div>
							@endif
						</div>
					</div>
				</div>
				<div class="col">
					@include('widgets.events')
				</div>
	</div>
</div>
@endsection
