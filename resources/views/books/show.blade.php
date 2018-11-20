@extends('layouts.app')
@section('content')
@if($book == null)
	<div class="panel panel-default">	
		<div class="panel-body">
			<h3 class="text-danger">Book does not exist</h3>
		</div>
	</div>
@else
	<div class="panel panel-default">	
		<div class="panel-heading">
			<h3>{{$book->title}}</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-4">
					<img src="{{asset('storage/covers/'.$book->cover)}}" width="100%">
				</div>
				<div class="col-sm-8">
					<div style="font-size: 20px; text-align: justify">
						<p>{!!$book->description!!}</p>
					</div>
					@php
						$__book = $book;
					@endphp
					@include('templates.book-purchase')
				</div>
			</div>
		</div>
	</div>
@endif
@endsection