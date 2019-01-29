
<div class="row justify-content-center">
    <div class="col-md-9">
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
                            {!!$post->content()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
