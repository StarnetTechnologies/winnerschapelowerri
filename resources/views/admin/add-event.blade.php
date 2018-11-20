        <form class="" method="POST" action="{{ route('add.event') }}">
			{{ csrf_field() }}
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<div class="row">
						 <label class="col-md-2 control-label">Event Title:</label>
							<div class="col-md-10">
								<input id="title" type="text" class="form-control" name="title" placeholder="event title" value="{{ old('title') }}" required autofocus>
								@if ($errors->has('title'))
										<span class="help-block">
											{{ $errors->first('title') }}
										</span>
								@endif
							</div>
						</div>
					</div>
					
					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<div class="row">
						 <label class="col-md-2 control-label">Description:</label>
							<div class="col-md-10">
								<textarea id="description" class="form-control" name="description" placeholder="event description" required autofocus>{{ old('description')}}</textarea>
								@if ($errors->has('description'))
										<span class="help-block">
											{{ $errors->first('description') }}
										</span>
								@endif
							</div>
						</div>
					</div>


					<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
						<div class="row">
						 <label class="col-md-2 control-label">Location:</label>
							<div class="col-md-10">
									<input id="location" type="text" class="form-control" name="location" placeholder="event location" value="{{ old('location') }}" required autofocus>
								@if ($errors->has('location'))
										<span class="help-block">
											{{ $errors->first('location') }}
										</span>
								@endif
							</div>
						</div>
					</div>

			
				<div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
					<div class="row">
						<label class="col-md-2 control-label">Starting Date and Time</label>
						<div class="col-md-10">
							<input id="cover" type="datetime-local" class="form-control" name="start" required autofocus>
							@if ($errors->has('start'))
									<span class="help-block">
										{{ $errors->first('start') }}
									</span>
							@endif
						</div>
					</div>
                </div>

				<div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
					<div class="row">
						<label class="col-md-2 control-label">Ending Date and Time</label>
						<div class="col-md-10">
							<input id="cover" type="datetime-local" class="form-control" name="end" required autofocus>
							@if ($errors->has('end'))
									<span class="help-block">
										{{ $errors->first('end') }}
									</span>
							@endif
						</div>
					</div>
				</div>

				
				<div class="form-group">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="custom-btn" >
							Add Event
						</button>
					</div>
				</div>

		</form>