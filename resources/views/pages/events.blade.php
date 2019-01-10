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
		<h3 class="text-center super-font theme-color">Events</h3>
	</div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
                    @if(count($EVENTS['happening']) > 0)
                    <div class="event-wrapper happening-events-wrapper" style="margin-top: 0">
                        <div class="events-section-heading">
                            <h2>Happening Now <span class="badge">{{count($EVENTS['happening'])}}</span></h2>
                        </div>
                        @foreach($EVENTS['happening'] as $event)
                            @include('templates.event-happening')
                        @endforeach
                    </div>
                    @endif

                    @if(count($EVENTS['upcoming']) > 0)
                    <div class="event-wrapper upcoming-events-wrapper">
                        <div class="events-section-heading">
                            <h2>Upcoming Event <span class="badge">{{count($EVENTS['upcoming'])}}</span></h2>
                        </div>
                        @foreach($EVENTS['upcoming'] as $event)
                        <div style="margin-bottom: 10px">
                            @include('templates.event-upcoming')
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="alert alert-warning">No upcoming event</div>
                        </div>
                    </div>

                @endif

        </div>
    </div>
</div>
@endsection

