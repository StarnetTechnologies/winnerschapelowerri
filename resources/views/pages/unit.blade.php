@extends('layouts.app')
@section('title')
Service Unit: {{$unit->name}}
@endsection
@section('styles')
@endsection

@section('top-widget')
    @include('widgets.breadcrumb')
@endsection

@section('content')
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Service Unit: {{$unit->name}}</h3>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
            {!!$unit->about('full')!!}
            <div class="text-center p-10">
                <a href="{{route('units')}}" class="btn custom-btn">See other units</a>
            </div>
		</div>
	</div>
</div>
@endsection

