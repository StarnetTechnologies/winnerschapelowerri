@extends('layouts.appAdmin')
<?php
	$now = new DateTime();
?>
@section('styles')

@endsection
@section('top-widget')
	<div style="height:80px"></div>
@endsection

@section('panels')
<div class="row">
	<div class="col-12">
		<div class="col-inner">
			@include('widgets.admin.posts')
		</div>
	</div>

	<div class="col-md-6">
		<div class="col-inner">
			@include('widgets.admin.pastors')
		</div>
	</div>

	<div class="col-md-6">
		<div class="col-inner">
			@include('widgets.admin.services')
		</div>
	</div>

	<div class="col-12">
		<div class="col-inner">
			@include('widgets.admin.slider-gallery')
		</div>
	</div>
	
	<div class="col-12">
		<div class="col-inner">
			@include('widgets.admin.gallery')
		</div>
	</div>

	<div class="col-12">
		@include('widgets.events')
	</div>

	<div class="col-12">
		<div class="row">
			<div class="col-md-7">
				<div class="col-inner">
					@include('widgets.admin.preferences')
				</div>
			</div>
			
			<div class="col-md-5">
				<div class="col-inner">
					@include('widgets.admin.contacts')
					<br>
					@include('widgets.admin.announcements')
					<br>
					@include('widgets.admin.testimonies')
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
		<div class="col-inner">
			@include('widgets.admin.units')
		</div>
	</div>
	
	
	</div>

@endsection

@section('scripts')
	<script>
		function approvedTestimoniesOnly(){
			$('.testimony.approved').show();
			$('.testimony.pending').hide();
		}
		function pendingTestimoniesOnly(){
			$('.testimony.approved').hide();
			$('.testimony.pending').show();
		}
		function allTestimonies(){
			$('.testimony.approved').show();
			$('.testimony.pending').show();
		}
	</script>
@endsection
