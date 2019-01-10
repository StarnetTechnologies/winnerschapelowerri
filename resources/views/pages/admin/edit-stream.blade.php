@extends('layouts.appAdmin')

@section('top-widget')
	<div style="height:100px"></div>
@endsection
@section('panels')
			<div class="card">
				<div class="card-header">
					<h4>Update Stream: <strong class="theme-color">{{$stream->title}}</strong></h4>
				</div>
				<div class="card-body">
                    <form action="{{route('update.stream',['id'=>$stream->id])}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row">
                            <div class="col-md-4">
                                <iframe style="width: 100%; height: 300px" src="{{'https://www.youtube.com/embed/'.$stream->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-8">
                                <div style="padding: 0 10px">
                                    <div class="form-group">
                                        <label for="url" class="theme-color">Stream URL</label>
                                        <input class="form-control" type="text" placeholder="stream URL id" name="url" value="{{$stream->url}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="url" class="theme-color">Title</label>
                                        <input class="form-control" type="text" placeholder="stream title" name="title" value="{{$stream->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="theme-color">Description</label>
                                        <textarea  class="form-control" name="description" placeholder="what is this stream about?">{{$stream->description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Update" class="custom-btn">
                                     </div>
                                </div>
                            </div>
                        </div>


                    </form>
				</div>
			</div>
@endsection



