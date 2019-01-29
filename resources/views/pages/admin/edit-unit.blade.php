@extends('layouts.appAdmin')

@section('top-widget')
	<div style="height:100px"></div>
@endsection

@section('panels')
<div class="card">
    <div class="card-header">
        <h4>Update Unit: <strong class="theme-color"><a href="{{route('unit',$unit->slug)}}">{{$unit->name}}</a></strong></h4>
    </div>
    <div class="card-body">
        <form action="{{route('update.unit',$unit->slug)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group {{ $errors->has('about') ? ' has-error' : '' }}">
                <label>About</label>
                <textarea  class="ckeditor form-control" name="about" placeholder="about the unit...">{{$unit->about}}</textarea>
                @if ($errors->has('about'))
                    <span class="help-block">
                        {{ $errors->first('about') }}
                    </span>
                @endif
            </div>
            
            <div class="form-group">
                <input type="submit" value="Update Unit" class="custom-btn">
            </div>
        </form>
    </div>
</div>

@endsection 










