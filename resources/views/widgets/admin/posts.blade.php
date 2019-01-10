<div class="accordion" id="posts-accordion">
    <div class="card">
        <div class="card-header">
        <button class="btn btn-info" data-toggle="collapse" data-target="#new-post" aria-expanded="true" aria-controls="new-post">
                <i class="fa fa-plus-circle"></i> Add New Post 
            </button>
            <h4><i class="fa fa-pen"></i>  Posts <span class="badge badge-secondary">{{$posts->count()}}</span></h4>
        </div>
        <div class="card-body admin-panel" style="padding: 0">
            <!--New post form-->
            <div style="padding: 10px">
                <div id="new-post" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#posts-accordion">
                    @include('widgets.admin.new-post')
                </div>
            </div>
            <!--New post form-->

            @if($posts->count() > 0)
                @foreach($posts as $post)
                    <div style="border-bottom: 1px solid #f7f7f7; margin-bottom: 5px">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{$post->imageUrl()}}" alt="{{$post->title}}" width="100%">
                            </div>
                            <div class="col-sm-8">
                                <div style="padding: 10px">
                                    <h5>{{$post->title}}</h5>
                                    <p class="grey">
                                         @if(strlen($post->body) > 500)    
                                                {!!str_limit($post->body,500)!!} <a href="{{route('single.post',['slug' => $post->slug])}}">continue reading</a>
                                            @else
                                                {!!$post->body !!}
                                            @endif
                                    </p>
                                   
                                    <div>
                                        <a href="{{route('edit.post',['id' =>$post->id])}}" class="text-primary"><i class="fa fa-pen"></i> edit</a>
                                        <span title="delete post" class="text-danger" style="cursor: pointer" onclick="javascript: confirmDelete(this,'remove-post-{{$post->id}}-confirmation')"><i class="fa fa-trash"></i> discard</span>
                                        <div class="confirmation-container" id="remove-post-{{$post->id}}-confirmation">
                                                <p class="text-warning">Are you sure you want to this post <strong>{{$post->title}} ???!</strong></p>
                                                <button class="btn btn-primary confirm-no">No</button>
                                                <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                                <form action="{{route('discard.post',['id' => $post->id])}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">No post published yet</div>
            @endif
        </div>
    </div>
</div>