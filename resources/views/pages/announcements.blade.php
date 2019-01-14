@extends('layouts.app')
@section('title')
 Announcements
@endsection
@section('styles')
<style>

</style>

@endsection

@section('top-widget')
    <?php 
    $_breadcrumb = '<i class="fa fa-bullhorn"></i>  Announcements <span class="badge badge-secondary">'.$announcements->count().'</span>';
     ?>
    @include('widgets.breadcrumb')
@endsection

@section('content')
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Announcements</h3>
	</div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @if($announcements->count() > 0)
                @foreach($announcements as $announcement)
                    <div style="margin-bottom: 5px">
                        @include('templates.announcement')
                    </div>
                @endforeach
            @else
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="alert alert-warning">No announcement yet</div>
                </div>
            </div>

            @endif
        </div>
       
    </div>
</div>
@endsection

