@extends('layouts.app')

@section('styles')
<style>
	.pastor{
		margin: 10px 0px;
	}
	.pastor img{
		box-shadow: 30px 30px 30px rgba(0,0,0,.1);
		border-radius: 25px 0px 25px 0px;
		
	}
</style>

<link rel="stylesheet" type="text/css" href="{{asset('css/vendors/jquery.horizontal.scroll.css')}}" />


@endsection


@section('top-widget')
    @include('widgets.breadcrumb')
@endsection

@section('content')
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Pastoral Theme</h3>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">

            @if($PASTORS->count() > 0)
                @foreach($PASTORS as $pastor)
                <div class="pastor">
                    <div class="">
                        <div class="">
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <img src="{{asset($pastor->dpUrl())}}" alt="{{$pastor->fullname}}" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <div class="p-3">
                                        <h4>{{$pastor->fullname}}</h4>
                                        <small>{{$pastor->position}}</small>
                                        <p>{{$pastor->bio === null ? '' : $pastor->bio}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="alert alert-warning">No pastor yet</div>
                        </div>
                    </div>
            @endif

		</div>
	</div>
</div>




@endsection

@section('scripts')
<script src="{{asset('js/vendors/jquery.horizontal.scroll.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#horiz_container_outer').horizontalScroll();

    });
</script>
@endsection

