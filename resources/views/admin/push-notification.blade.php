        <form class="" method="POST" action="{{ route('push.notification') }}">
			{{ csrf_field() }}
					<div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
						<div class="row">
						 <label class="col-md-2 control-label">Heading:</label>
							<div class="col-md-10">
								<input id="heading" type="text" class="form-control" name="heading" placeholder="notification heading" value="{{ old('heading') }}" required autofocus>
								@if ($errors->has('heading'))
										<span class="help-block">
											{{ $errors->first('heading') }}
										</span>
								@endif
							</div>
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
						<div class="row">
						 <label class="col-md-2 control-label">Content:</label>
							<div class="col-md-10">
								<textarea id="body" class="form-control" name="content" placeholder="notification content" required autofocus>{{ old('content')}}</textarea>
								@if ($errors->has('content'))
										<span class="help-block">
											{{ $errors->first('content') }}
										</span>
								@endif
							</div>
						</div>
					</div>

				
				<div class="form-group">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="custom-btn" >
							Send Push Notification
						</button>
					</div>
				</div>

		</form>