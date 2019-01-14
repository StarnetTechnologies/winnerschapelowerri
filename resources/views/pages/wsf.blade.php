@extends('layouts.app')
@section('title')
 WSF
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
		<h3 class="text-center super-font theme-color">WSF</h3>
	</div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            @if(!file_exists(public_path().'/storage/files/wsf.pdf'))
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="alert alert-warning">Not available yet</div>
                    </div>
                </div>
            @else
                <iframe src="{{asset('storage/files/wsf.pdf')}}" frameborder="0" style="width: 100%; height: 80vh"></iframe>
            @endif
        </div>
    </div>
</div>

@endsection

