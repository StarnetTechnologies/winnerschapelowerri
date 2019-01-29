    <form action="{{route('add.unit')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label>Unit Name</label>
            <input class="form-control" type="text" placeholder="unit name" name="name" value="{{old('name')}}">
            @if ($errors->has('name'))
				<span class="help-block">
					{{ $errors->first('name') }}
				</span>
		    @endif
        </div>
        <div class="form-group {{ $errors->has('about') ? ' has-error' : '' }}">
            <label>About</label>
            <textarea  class="ckeditor form-control" name="about" placeholder="about the unit...">{{old('about')}}</textarea>
            @if ($errors->has('about'))
				<span class="help-block">
					{{ $errors->first('about') }}
				</span>
		    @endif
        </div>
        
        <div class="form-group">
            <input type="submit" value="Add Unit" class="custom-btn">
        </div>
    </form>