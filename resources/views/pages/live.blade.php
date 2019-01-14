@extends('layouts.app')
@section('title')
 Videos
@endsection
@section('styles')
    <style>

    .main-stream{
        background-color: rgba(0,0,0,.8);
        width: 100%;
        min-height: 400px;
    }
    .prev-stream{
        width: 100%;
        min-height: 200px;
    }
    .stream-header{
        background-color:#24292E;
        color: #fff;
        padding: 10px;
    }
    .stream-body{
        background-color: #fff;
    }
    .stream-description{
        padding: 10px;
    }
    .prev-stream-container{
        background-color:#24292E;
        color: #fff;
        margin-bottom: 5px;
    }

    [data-side]{
        padding-top: 20px;
        padding-bottom: 20px;

    }
    #side-toggler-container{
        position: fixed;
        right: 5%;
        bottom: 10px;
        z-index: 100;
    }

    #side-toggler{
        display: block;
        font-size: 50px;
        cursor: pointer;
    }
    #side-toggler[data-toggler = 'hide']{
        color: red;
        background-color: #fff;
    }

    #side-toggler[data-toggler='show']{
        color: #fff;
        background-color: #24292E
    }

    [data-side]{
        position: fixed;
        bottom: 40px;
        top: 100px;
        z-index:100;
    }

    [data-side = 'hide']{
        height: auto;
    }
    [data-side = 'hide']{
    display: none;
    }

    [data-side = 'hide'] #side-toggler{
        color: red;
    }

    [data-side = 'show']{
        width: 80%;
    right:0;
    }

    [data-side = 'show']{
    display: block;
    background-color: #eee;
    padding: 20px;
    max-height: 500px;
    overflow-y: auto;
    border-radius: 5px;
    box-shadow: 0px 10px 10px rgba(0,0,0,.8);

    }


    @media (min-width: 768px){
        .main{
            padding: 30px 20px;
        }
        .main-inner{
            padding: 0px 20px;
            }
        [data-side]{
            width: 33%;
            right: 20px;
        }
        #other-streams-container{
            max-height: 80vh;
            overflow-y: hidden;
        }
        #other-streams-container:hover{
            overflow-y: auto;
        }
     }
    </style>
@endsection
@section('top-widget')
	<div style="height: 80px"></div>	
@endsection

@section('content')
<div class="eclipse-bg">
@if($STREAMS->count() > 0)
            <div class="main">
                <div class="row">
                    <div class="col-sm-8" id="main" >
                        <div class="main-inner">
                         @if($stream->count() == 1)
                            <?php $stream = $stream->first()?>
                            <div class="stream-container">
                                <div class="stream-header">
                                    <h4><i class="fa fa-video theme-color"></i>  {{$stream->title}}</h4>
                                </div>
                                <div class="stream-body">
                                    <iframe class="main-stream" src="{{'https://www.youtube.com/embed/'.$stream->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div style="padding: 0 10px">
                                        <small class="text-right"><i class="fa fa-clock"></i>  {{$stream->created_at->diffForHumans()}}</small>
                                        <a style="float: right" href="{{'https://www.youtube.com/watch?v='.$stream->url}}">  <i class="fab fa-youtube"></i>  Watch on Youtube</a>
                                    </div>
                                    <div class="stream-description">
                                        <p>{{$stream->description}}</p>
                                        @if(Auth::check())
                                            <a title="Update stream" class="text-info" style="font-size: 16px" href="{{route('edit.stream', ['id'  => $stream->id])}}"><i class="fa fa-pen"></i> edit</a>
                                            <span title="discard stream" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-stream-{{$stream->id}}-confirmation')"><i class="fa fa-trash"></i> discard</span>        
                                            <div class="confirmation-container" id="discard-stream-{{$stream->id}}-confirmation">
                                                <p class="text-warning">Are you sure you want to this stream <strong>{{$stream->title}} ???!</strong></p>
                                                <button class="btn btn-primary confirm-no">No</button>
                                                <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                                <form action="{{route('discard.stream',['id' => $stream->id])}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="alert alert-warning">No stream found</div>
                                    </div>
                                </div>

                            @endif
                        </div>
                    </div>   
                    <div class="col-sm-4">
                        <h3 class="white">Other Streams</h3>
                            @if($otherStreams->count() > 0)
                                <div id="other-streams-container">
                                    @foreach($otherStreams as $stream)
                                        <div class="prev-stream-container">
                                            <iframe class="prev-stream" src="{{'https://www.youtube.com/embed/'.$stream->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <h4><a href="{{route('live',['slug'=>$stream->slug])}}">{{$stream->title}}</a></h4>
                                            <small class="text-right"><i class="fa fa-clock"></i>  {{$stream->created_at->diffForHumans()}} </small>
                                            <a style="float: right" href="{{'https://www.youtube.com/watch?v='.$stream->url}}">  <i class="fab fa-youtube"></i>  Watch on Youtube</a>
                                        
                                            @if(Auth::check())
                                                <a title="Update stream" class="text-info" style="font-size: 16px" href="{{route('edit.stream', ['id' => $stream->id])}}"><i class="fa fa-pen"></i> edit</a>
                                                <span title="discard stream" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-stream-{{$stream->id}}-confirmation')"><i class="fa fa-trash"></i> discard</span>        
                                                <div class="confirmation-container" id="discard-stream-{{$stream->id}}-confirmation">
                                                    <p class="text-warning">Are you sure you want to this stream <strong>{{$stream->title}} ???!</strong></p>
                                                    <button class="btn btn-primary confirm-no">No</button>
                                                    <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                                    <form action="{{route('discard.stream',['id' => $stream->id])}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                    </form>
                                                </div>
                                            @endif
                                        </div>
                                @endforeach
                             </div>

                            @else
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="alert alert-warning">No Stream found</div>
                                    </div>
                                </div>
                            @endif
                    </div>
                </div>
@else
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="alert alert-warning">Nothing yet</div>
        </div>
    </div>
@endif
</div>
@if(Auth::check())
    <div data-side="hide">
        <div id="side-content">
            @include('widgets.admin.new-stream')
        </div>
    </div>
    <div id="side-toggler-container">
            <span style="width: 100px; height: 100px; border-radius: 50%; padding-top: 20px" id="side-toggler" class="text-center" title="close" data-toggler='hide' onclick="javascript: sideToggler()" >
                <i class="fa fa-video"></i>
            </span>
    </div>
@endif
    </div>


@endsection

@section('scripts')
    <script src="{{asset('js/stream.js')}}"></script>
@endsection