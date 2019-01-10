
@if($STREAMS->count() > 0)
    <div style="padding: 10px; background-color: #24292E">
        <h4 class="white">Videos</h4>
    </div>
    <div class="videos-widget">
        @foreach($STREAMS as $stream)
            <div style="background-color: #24292E;margin-bottom: 10px">
                <iframe style="width: 100%; height: 300px" src="{{'https://www.youtube.com/embed/'.$stream->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                    <div style="padding: 10px">
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
            </div>
    @endforeach
    </div>
@else
    <div class="alert alert-info">No stream found</div>
@endif