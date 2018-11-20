@extends('layouts.appLHSfixed')

@section('LHS')
	<div class="lhs-content for-menu-list">
		@include('widgets.admin-sidemenu')
	</div>
@endsection

@section('content')
		<div class="heading-container">
			<h4>Instructors <a href="{{route('instructors.create')}}" class="btn btn-success pull-right">Add New</a></h4>
		</div>
			@if($INSTRUCTORS->count() > 0)
				@foreach($INSTRUCTORS as $_instructor)
					@include('templates.singleton.instructor')
				@endforeach
			@else
				<div class="alert alert-warning text-center">
					No Instructor yet 
				</div>
			@endif

@endsection

