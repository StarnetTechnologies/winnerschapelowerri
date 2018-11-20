@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stream.css')}}" />
	<link href="{{ asset('css/events.css') }}" rel="stylesheet">
 @endsection
@section('page-styles')
    <style>
        .main{
            padding: 30px 20px;
        }
        #main{
            width: 100%;
        }
        @media (min-width: 768px){
            .main{
            padding: 30px 70px;
        }
        }
    </style>
@endsection
@section('top-widget')
	<?php $_breadcrumb = "<i class=\"fa fa-video\"></i>  Winners Live" ?>
	@include('widgets.breadcrumb')			
@endsection

@section('content')
    <div class="main">
        <div class="row">
            <div class="col" id="main" >
                                <section>
                                    @if($STREAMS->count() > 0)
                                    <?php
                                        $lastStream = $STREAMS->first();
                                    ?>
                                        <h3 class="theme-sub-color"> <i class="fa fa-video theme-color"></i>  Last Stream</h3>
                                        <section>
                                            <div class="stream-container">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="stream-title theme-color">{{$lastStream->title}}</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <iframe class="stream" src="{{'https://www.youtube.com/embed/'.$lastStream->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                            <p><a href="{{'https://www.youtube.com/watch?v='.$lastStream->url}}">  <i class="fab fa-youtube"></i>  Watch on Youtube</a></p>
                                                            <div class="card">
                                                            <div class="card-body">
                                                                <p>{{$lastStream->description}}</p>
                                                                <p class="text-right">{{$lastStream->created_at->diffForHumans()}}</p>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <h3 class="theme-sub-color">Previous Streams</h3>
                                        <?php
                                            $prevStream = $STREAMS->skip(1)->get();
                                        ?>
                                        @if($prevStream->count() > 0)
                                            @foreach($prevStream as $stream)
                                                <section>
                                                    <div class="stream-container">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="stream-title theme-color">{{$stream->title}}</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <iframe class="stream" src="{{'https://www.youtube.com/embed/'.$stream->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                    <p><a href="{{'https://www.youtube.com/watch?v='.$stream->url}}">  <i class="fab fa-youtube"></i>  Watch on Youtube</a></p>
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                             <p>{{$stream->description}}</p>
                                                                            <p class="text-right">{{$stream->created_at->diffForHumans()}}</p>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            @endforeach
                                        @else
                                            <div class="alert alert-info text-center">No previous streams</div>
                                        @endif
                                        @else
                                        <div class="alert alert-info text-center">No streams yet</div>
                                    @endif
                                </section>

            </div>

            @if(Auth::check())
            <div class="col-sm-4 col-xs-10" data-side="hide">
                <div id="side-toggler-container">
                    <span id="side-toggler" title="close" data-toggler='hide' onclick="javascript: sideToggler()" ><i class="fa fa-video"></i></span>
                </div>
                
                <div id="side-content">
                    @include('stream.addstream')
                </div>
            </div>
            @endif

        </div>
    </div>

    <section style="margin-top: 100px">
        <h1 class="theme-color" style="margin-bottom: 50px; background-color: #fff">Events</h1>
        <div class="jumbotron">
            @include('widgets.events')
        </div>
    </section>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/stream.js')}}"></script>
@endsection