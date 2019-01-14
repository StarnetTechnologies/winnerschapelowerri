
<div class="row">
    <div class="col-3">
        <div class="text-right" style="width: 100px; height: 100px; border-radius: 50%; box-shadow: 0px 20px 20px rgba(0,0,0,.2)">
            <img src="{{$PREF->pastor->dpUrl()}}" alt="{{$PREF->pastor->fullname}}" style="width: 100px; height: 100px; border-radius: 50%;">
        </div>
    </div>
    <div class="col-9">
        <div class="card border-0"  style="background-color: transparent">
            <div class="card-body">
                <h4 class="post-title-red" style="margin-bottom: 2px"><a href="{{route('single.post',['slug'=>$post->slug])}}">{{$post->title}}</a></h4>
                <small class="grey"><i class="fa fa-clock"></i>  {{$post->created_at->diffForHumans()}}</small>
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <img src="{{$post->imageUrl()}}" alt="{{$post->title}}" width="100%">
                    </div>
                    <div class="col-sm-8">
                        <div style="padding: 10px">
                            <p>
                                @if(strlen($post->body) > 500)    
                                    {!!str_limit($post->body,500)!!} <a href="{{route('single.post',['slug' => $post->slug])}}">continue reading</a>
                                @else
                                    {!!$post->body !!}
                                @endif
                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
