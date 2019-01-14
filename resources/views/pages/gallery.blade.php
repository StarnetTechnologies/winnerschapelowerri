@extends('layouts.app')
@section('title')
 Gallery
@endsection
@section('styles')
<style>
</style>

@endsection

@section('top-widget')
    @include('widgets.breadcrumb')
@endsection

@section('content')
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Gallery</h3>
	</div>
	<div class="row">
		<div class="col-md-10 offset-md-1">
            @if($GALLERY->count() > 0)
                <div class="card-columns">
                    @foreach($GALLERY as $g)
                        <div class="card">
                            <img class="card-img-top" src="{{$g->imageUrl()}}" alt="Winners Chapel Owerri">
                            <div class="card-body">
                                <p class="card-text">{{$g->caption}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="alert alert-warning">No photo in the gallery yet</div>
                    </div>
                </div>
            @endif

		</div>
	</div>
</div>

        @endsection

