@extends('layouts.appAdmin')

@section('top-widget')
	<div style="height:100px"></div>
@endsection

@section('panels')
<div class="card">
    <div class="card-header">
        <h4>Update Post: <strong class="theme-color">{{$post->title}}</strong></h4>
    </div>
    <div class="card-body">

        <form class="has-image-upload" method="POST" action="{{route('update.post',['id'=>$post->id])}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">  
                        <label class="control-label">Title</label>
                        <input id="title" type="text" class="form-control" name="title" placeholder="post's title" value="{{ $post->title }}" required autofocus>
                        @if ($errors->has('title'))
                                <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                        @endif
                    </div>


                    <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                            <label class="control-label">Message</label>
                             <textarea  class="form-control" name="body" placeholder="Message..." autofocus>{{$post->body}}</textarea>
                        @if ($errors->has('body'))
                                <span class="help-block">
                                    {{ $errors->first('body') }}
                                </span>
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-inner">
                        <div class="text-center">
                            <img src="{{$post->imageUrl()}}" alt="{{$post->title}}" style="width: 200px; height: 200px; border-radius: 50%" id="prev-featured-image">
                        </div>
                        <br>
                        <input class="form-control" type="file" name="featured_image" accept="image/*" >
                        <div class="image-preview-container" replace="#prev-featured-image"></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="custom-btn" >
                    Update Post
                </button>
            </div>

        </form>
    </div>
</div>

@endsection 