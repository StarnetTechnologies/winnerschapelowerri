<form action="{{route('change.password')}}" method="POST">
	{{ csrf_field() }}
	
	<input type="hidden" name="_method" value="PUT" >
	
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<div class="row">
			<label for="password" class="col-sm-3 control-label">New Password</label>
			<div class="col-sm-6">
				<input id="password" type="password" class="form-control" name="password" required>

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<label for="password-confirm" class="col-sm-3 control-label">Confirm Password</label>
			<div class="col-sm-6">
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
			</div>
		</div>
	</div>
						
	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="custom-btn" >
				Change Password
			</button>
		</div>
	</div>
</form>