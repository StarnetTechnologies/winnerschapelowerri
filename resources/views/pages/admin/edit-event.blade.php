@extends('layouts.appAdmin')

@section('top-widget')
	<div style="height:100px"></div>
@endsection

@section('panels')
			<div class="card">
				<div class="card-header">
					<h4>Update Event: <strong class="theme-color">{{$event->title}}</strong></h4>
				</div>
				<div class="card-body">
					<form class="has-image-upload" method="POST" action="{{ route('update.event', ['id' => $event->id]) }}" enctype="multipart/form-data">
					{{ csrf_field() }}
						<input type="hidden" name="_method" value="PUT">
							<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
								<div class="row">
								<label class="col-md-2 control-label">Event Title:</label>
									<div class="col-md-10">
										<input id="title" type="text" class="form-control" name="title" placeholder="event title" value="{{ $event->title }}" required autofocus>
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
										<textarea id="description" class="form-control" name="description" placeholder="event description" required autofocus>{{ $event->description}}</textarea>
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
											<input id="location" type="text" class="form-control" name="location" placeholder="event location" value="{{ $event->location }}" required autofocus>
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
									<input id="cover" type="datetime-local" class="form-control" name="start" value="{{$event->start_at}}" required autofocus>
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
									<input id="end" type="datetime-local" class="form-control" name="end" value="{{$event->end_at}}" required autofocus>
									@if ($errors->has('end'))
											<span class="help-block">
												{{ $errors->first('end') }}
											</span>
									@endif
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="label-control">Event Graphics</label>
							@if($event->image == null)
								<div class="alert alert-warning">No Image was added before</div>
								<input class="form-control" type="file" name="image" id="">
								<div class="image-preview-container" preview-width="100%" preview-height="auto"></div>
							@else
								<p class="help-block">Update event graphics <i>(optional)</i>(optional)</p>
								<div class="text-center">
									<img src="{{$event->imageUrl()}}" alt="{{$event->title}}" width="100%" id="prev-image">
									<br>
									<input class="form-control" type="file" name="image" id="">
									<div class="image-preview-container" replace="#prev-image"></div>
								</div>
							@endif
						</div>

				<label class="send-notification"><input type="checkbox" name="notification"  value="true" checked>  Send Push Notification</label>

						<div class="form-group">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="custom-btn" >
									Update Event
								</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		@endsection