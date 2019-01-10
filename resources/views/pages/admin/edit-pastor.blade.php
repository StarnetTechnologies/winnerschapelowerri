@extends('layouts.appAdmin')

@section('top-widget')
	<div style="height:100px"></div>
@endsection

@section('panels')
<div class="card">
    <div class="card-header">
        <h4>Update <strong class="theme-color">{{$pastor->fullname}}</strong></h4>
    </div>
    <div class="card-body">

        <form class="has-image-upload" method="POST" action="{{route('update.pastor',['id'=>$pastor->id])}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">  
                        <label class="control-label">Full name (including title e.g Pastor,Rev., Bishop):</label>
                        <input id="title" type="text" class="form-control" name="fullname" placeholder="pastor's full name" value="{{ $pastor->fullname }}" required autofocus>
                        @if ($errors->has('fullname'))
                                <span class="help-block">
                                    {{ $errors->first('fullname') }}
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('position') ? ' has-error' : '' }}">
                            <label class="control-label">Position:</label>
                        <input id="position" type="text" class="form-control" name="position" placeholder="pastor's position" value="{{ $pastor->position }}" required autofocus>
                        @if ($errors->has('position'))
                                <span class="help-block">
                                    {{ $errors->first('position') }}
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('bio') ? ' has-error' : '' }}">
                            <label class="control-label">Bio:</label>
                            <p class="help-block">update {{$pastor->fullname}}'s bio</p>
                        <textarea id="bio" class="form-control" name="bio" placeholder="pastor's bio ( if any...)" autofocus>{{$pastor->bio}}</textarea>
                        @if ($errors->has('bio'))
                                <span class="help-block">
                                    {{ $errors->first('bio') }}
                                </span>
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-inner">
                        <div class="text-center">
                            <img src="{{$pastor->dpUrl()}}" alt="" style="width: 200px; height: 200px; border-radius: 50%" id="prev-dp">
                        </div>
                        <br>
                        <input class="form-control" type="file" name="display_photo" accept="image/*" id="dp">
                        <div class="image-preview-container" replace="#prev-dp"></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="custom-btn" >
                    Update
                </button>
            </div>

        </form>
    </div>
</div>

@endsection 