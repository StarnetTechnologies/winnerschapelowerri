@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul class="list-group">
			@foreach($errors->all() as $error)
				<li class="list-group-item">{!!$error!!}</li>
			@endforeach
			</ul>
		</div>
@endif

@if(session('success'))
		<div class="alert alert-success">{!!session('success')!!}</div>
@endif
@if(session('info'))
		<div class="alert alert-info">{!!session('info')!!}</div>
@endif

@if(session('error'))
			<div class="alert alert-danger">{!!session('error')!!}</div>
@endif
