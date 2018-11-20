        <form class="" method="POST" action="{{route('add.service')}}">
			{{ csrf_field() }}
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<div class="row">
						 <label class="col-md-2 control-label">Service Title:</label>
							<div class="col-md-10">
								<input id="title" type="text" class="form-control" name="title" placeholder="service title" value="{{ old('title') }}" required autofocus>
								@if ($errors->has('title'))
										<span class="help-block">
											{{ $errors->first('title') }}
										</span>
								@endif
							</div>
						</div>
                    </div>
                    
					<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
						<div class="row">
						 <label class="col-md-2 control-label">Location:</label>
							<div class="col-md-10">
									<input id="location" type="text" class="form-control" name="location" placeholder="service location" value="{{ old('location') }}" required autofocus>
								@if ($errors->has('location'))
										<span class="help-block">
											{{ $errors->first('location') }}
										</span>
								@endif
							</div>
						</div>
                    </div>

                    <div class="form-group{{ $errors->has('day') ? ' has-error' : '' }}">
					    <div class="row">
						<label class="col-md-2 control-label">Days of service</label>
						<div class="col-md-10">
							<select name="day" id="" class="form-control">
								<option value="">Select day of the week</option>
                                <option value="Monday">Every Monday</option>
                                <option value="Tuesday">Every Tuesday</option>
                                <option value="Wednesday">Every Wednesday</option>
                                <option value="Thursday">Every Thursday</option>
                                <option value="Friday">Every Friday</option>
                                <option value="Saturday">Every Saturday</option>
                                <option value="Sunday">Every Sunday</option>
                            </select>
							@if ($errors->has('day'))
									<span class="help-block">
										{{ $errors->first('day') }}
									</span>
							@endif
						</div>
					</div>
                </div>
                
                <div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
					    <div class="row">
						<label class="col-md-2 control-label">Starting Time</label>
						<div class="col-md-10">
							<input id="cover" type="time" class="form-control" name="start" required autofocus>
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
							<input id="cover" type="time" class="form-control" name="end" required autofocus>
							@if ($errors->has('end'))
									<span class="help-block">
										{{ $errors->first('end') }}
									</span>
							@endif
						</div>
					</div>
                </div>
                
                
					<div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
						<div class="row">
						 <label class="col-md-2 control-label">Note (optional):</label>
							<div class="col-md-10">
								<textarea id="note" class="form-control" name="note" placeholder="note about the service ( if any...)" required autofocus>{{ old('note')}}</textarea>
								@if ($errors->has('note'))
										<span class="help-block">
											{{ $errors->first('note') }}
										</span>
								@endif
							</div>
						</div>
					</div>

			


				
				<div class="form-group">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="custom-btn" >
							Add Service
						</button>
					</div>
				</div>

		</form>