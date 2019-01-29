<form class="" method="POST" action="{{route('add.service')}}">
	{{ csrf_field() }}
	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
			<label class="control-label">Service Title:</label>
		<input id="title" type="text" class="form-control" name="title" placeholder="service title" value="{{ old('title') }}" required autofocus>
		@if ($errors->has('title'))
				<span class="help-block">
					{{ $errors->first('title') }}
				</span>
		@endif
	</div>
	
	<div class="form-group{{ $errors->has('day') ? ' has-error' : '' }}">
		<label class="control-label">Days of service</label>
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

	<div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
		<label class="control-label">Starting Time</label>
		<input type="time" class="form-control" name="start" required autofocus>
		@if ($errors->has('start'))
				<span class="help-block">
					{{ $errors->first('start') }}
				</span>
		@endif
	</div>

	<div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
		<label class="control-label">Ending Date and Time</label>
		<input type="time" class="form-control" name="end" required autofocus>
		@if ($errors->has('end'))
				<span class="help-block">
					{{ $errors->first('end') }}
				</span>
		@endif
	</div>


	<div class="form-group {{ $errors->has('note') ? ' has-error' : '' }}">
			<label class="control-label">Note (optional):</label>
		<textarea id="note" class="form-control" name="note" placeholder="note about the service ( if any...)" autofocus>{{ old('note')}}</textarea>
		@if ($errors->has('note'))
				<span class="help-block">
					{{ $errors->first('note') }}
				</span>
		@endif
	</div>

	<label class="send-notification"><input type="checkbox" name="notification"  value="true" checked> Send Push Notification</label>

	<div class="form-group">
		<button type="submit" class="custom-btn" >
			Add Service
		</button>
	</div>

</form>