@extends('layouts.app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		<h4>New Book</h4>
	</div>
	<div class="panel-body">
		@include('admin.add-book');
	</div>
</div>
@endsection