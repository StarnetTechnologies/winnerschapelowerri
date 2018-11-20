@extends('layouts.app')

@section('content')
@if($book == null)
	<div class="panel panel-default">
		<div class="panel-body text-center">
			<h1>Book does not exist</h1>
		</div>
	</div>
@else
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Edit Book: {{$book->title}}</h4>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-3">
					<img src="{{asset('storage/covers/'.$book->cover)}}" width="100%" height="auto">
				</div>
				<div class="col-sm-9">
					<form class="" method="POST" action="{{ route('update.book',['slug' => $book->slug]) }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
							<div class="row">
							 <label class="col-md-2 control-label">Book Title:</label>
								<div class="col-md-6">
									<input id="title" type="text" class="form-control" name="title" placeholder="Book title" value="{{ $book->title }}" required autofocus>
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
								<div class="col-md-6">
									<textarea id="description" class="form-control" name="description" placeholder="book description" required autofocus>{{ $book->description}}</textarea>
									@if ($errors->has('description'))
											<span class="help-block">
												{{ $errors->first('description') }}
											</span>
									@endif
								</div>
							</div>
						</div>

						<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
							<div class="row">
							 <label class="col-md-2 control-label">Price:</label>
								<div class="col-md-6">
										<input id="price" type="number" class="form-control" name="price" placeholder="book price" value="{{ $book->price }}" required autofocus>
									@if ($errors->has('price'))
											<span class="help-block">
												{{ $errors->first('price') }}
											</span>
									@endif
								</div>
							</div>
						</div>
						
						<!--<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
							<div class="row">
								<label class="col-md-2 control-label">Change Book Cover:</label>
								<div class="col-md-10">
									<input id="cover" type="file" class="form-control" name="cover" autofocus>
									@if ($errors->has('cover'))
											<span class="help-block">
												{{ $errors->first('cover') }}
											</span>
									@endif
								</div>
							</div>
						</div>-->

						<!--<div class="form-group{{ $errors->has('pdf') ? ' has-error' : '' }}">
							<div class="row">
								<label class="col-md-2 control-label">Upload PDF</label>
								<div class="col-md-10">
									<input id="pdf" type="file" class="form-control" name="pdf" autofocus>
									@if ($errors->has('pdf'))
											<span class="help-block">
												{{ $errors->first('pdf') }}
											</span>
									@endif
								</div>
							</div>
						</div>-->
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" >
									Update Book
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endif
@endsection