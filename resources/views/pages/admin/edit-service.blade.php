@extends('layouts.appAdmin')

@section('top-widget')
	<div style="height:100px"></div>
@endsection
@section('panels')
			<div class="card">
				<div class="card-header">
					<h4>Update Service: <strong class="theme-color">{{$service->title}}</strong></h4>
				</div>
				<div class="card-body">
					<form class="" method="POST" action="{{route('update.service', ['id' => $service->id] )}}">
					{{ csrf_field() }}
							<input type="hidden" name="_method" value="PUT">
							<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
								<div class="row">
								<label class="col-md-2 control-label">Service Title:</label>
									<div class="col-md-10">
										<input id="title" type="text" class="form-control" name="title" placeholder="service title" value="{{ $service->title }}" required autofocus>
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
											<input id="location" type="text" class="form-control" name="location" placeholder="service location" value="{{ $service->location }}" required autofocus>
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
									<h4>{{$service->day}}</h4>
									<select name="day" id="" class="form-control">
										<option value="Monday" {{$service->day == 'Monday' ? 'selected' : ''}}>Every Monday</option>
										<option value="Tuesday" {{$service->day == 'Tuesday' ? 'selected' : ''}}>Every Tuesday</option>
										<option value="Wednesday" {{$service->day == 'Wednesday' ? 'selected' : ''}}>Every Wednesday</option>
										<option value="Thursday" {{$service->day == 'Thursday' ? 'selected' : ''}}>Every Thursday</option>
										<option value="Friday" {{$service->day == 'Friday' ? 'selected' : ''}}>Every Friday</option>
										<option value="Saturday" {{$service->day == 'Saturday' ? 'selected' : ''}}>Every Saturday</option>
										<option value="Sunday" {{$service->day == 'Sunday' ? 'selected' : ''}}>Every Sunday</option>
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
									<input id="cover" type="time" class="form-control" name="start" value="{{$service->start}}" required autofocus>
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
									<input id="cover" type="time" class="form-control" name="end" value="{{$service->end}}" required autofocus>
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
										<textarea id="note" class="form-control" name="note" placeholder="note about the service ( if any...)" required autofocus>{{ $service->note}}</textarea>
										@if ($errors->has('note'))
												<span class="help-block">
													{{ $errors->first('note') }}
												</span>
										@endif
									</div>
								</div>
							</div>

						<label class="send-notification"><input type="checkbox" name="notification"  value="true" checked>  Send Push Notification</label>
						
						<div class="form-group">
							<div class="col-md-8 offset-md-2">
								<button type="submit" class="custom-btn" >
									Update Service
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
@endsection