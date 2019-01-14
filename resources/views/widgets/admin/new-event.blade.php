        <form class="has-image-upload" method="POST" action="{{ route('add.event') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						 <label class="control-label">Event Title:</label>
						<input id="title" type="text" class="form-control" name="title" placeholder="event title" value="{{ old('title') }}" required autofocus>
						@if ($errors->has('title'))
								<span class="help-block">
									{{ $errors->first('title') }}
								</span>
						@endif
					</div>
					
					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						 <label class="control-label">Description:</label>
						<textarea id="description" class="form-control" name="description" placeholder="event description" required autofocus>{{ old('description')}}</textarea>
						@if ($errors->has('description'))
								<span class="help-block">
									{{ $errors->first('description') }}
								</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
						 <label class="control-label">Location:</label>
						<input id="location" type="text" class="form-control" name="location" placeholder="event location" value="{{ old('location') }}" required autofocus>
						@if ($errors->has('location'))
								<span class="help-block">
									{{ $errors->first('location') }}
								</span>
						@endif
					</div>

			
					<div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
						<label class="col control-label">Starting Date and Time</label>
						<input type="datetime-local" class="form-control" name="start" required autofocus>
						@if ($errors->has('start'))
								<span class="help-block">
									{{ $errors->first('start') }}
								</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
						<label class="col control-label">Ending Date and Time</label>
						<input type="datetime-local" class="form-control" name="end" required autofocus>
						@if ($errors->has('end'))
								<span class="help-block">
									{{ $errors->first('end') }}
								</span>
						@endif
					</div>

					<div class="form-group">
						<label for="" class="label-control">Graphic</label>
						<p class="help-block">You can include a graphic with this event</p>
						<input class="form-control" type="file" accept="image/*" name="image" >
						<div class="image-preview-container" preview-width="100%" preview-height="auto"></div>
					</div>

					<label class="send-notification"><input type="checkbox" name="notification" value="true" checked>  Send Push Notification</label>
					
					<div class="form-group">
						<button type="submit" class="custom-btn" >
							Add Event
						</button>
					</div>

		</form>