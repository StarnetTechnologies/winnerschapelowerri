<form action="{{route('change.password')}}" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT" >
	
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<label for="password" class="control-label">New Password</label>
		<input id="password" type="password" class="form-control" name="password" required>
		@if ($errors->has('password'))
			<span class="help-block">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif
	</div>

	<div class="form-group">
		<label for="password-confirm" class="control-label">Confirm Password</label>
		<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
	</div>
						
	<div class="form-group">
			<button type="submit" class="custom-btn" >
				Change Password
			</button>
	</div>
	
</form>