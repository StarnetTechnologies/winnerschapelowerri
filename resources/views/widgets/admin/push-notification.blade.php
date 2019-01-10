        <form class="" method="POST" action="{{ route('push.notification') }}">
			{{ csrf_field() }}
					<div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
						 <label class="control-label">Heading:</label>
						<input id="heading" type="text" class="form-control" name="heading" placeholder="notification heading" value="{{ old('heading') }}" required autofocus>
						@if ($errors->has('heading'))
								<span class="help-block">
									{{ $errors->first('heading') }}
								</span>
						@endif
					</div>
					
					<div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
						 <label class="control-label">Content:</label>
						<textarea id="body" class="form-control" name="content" placeholder="notification content" required autofocus>{{ old('content')}}</textarea>
						@if ($errors->has('content'))
								<span class="help-block">
									{{ $errors->first('content') }}
								</span>
						@endif
					</div>

				
					<div class="form-group">
						<button type="submit" class="custom-btn" >
							Send Push Notification
						</button>
					</div>

		</form>