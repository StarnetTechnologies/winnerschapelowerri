@extends('layouts.app')

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
		<h3 class="text-center super-font theme-color">Pastor's Desk</h3>
	</div>
    <div class="row">
        <div class="col-sm-8">
            @if($posts->count() > 0)
                @foreach($posts as $post)
                    <div style="margin-bottom: 10px">
                         @include('templates.post')
                    </div>
                @endforeach
                <div class="text-center" style="margin-top: 10px">
                    {{$posts->links()}}
                </div>
            @else
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="alert alert-warning">No post yet</div>
                </div>
            </div>
                
            @endif
        </div>
        <div class="col-sm-4">
            <div>
                @include('widgets.domi-radio')
            </div>
            <div>
            @include('widgets.videos')
            </div>
        </div>
    </div>
</div>
@endsection

