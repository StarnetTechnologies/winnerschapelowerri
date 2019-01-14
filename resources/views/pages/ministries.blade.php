@extends('layouts.app')
@section('title')
 Ministries
@endsection
@section('styles')
<style>
	.ministry{
		margin: 10px 0px;
	}
	.ministry img{
		box-shadow: 30px 30px 30px rgba(0,0,0,.1);
		border-radius: 25px 0px 25px 0px;
		
	}
</style>

@endsection

@section('top-widget')
    @include('widgets.breadcrumb')
@endsection

@section('content')
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Ministries</h3>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">

		<div class="ministry" id="teens-church">
				<div class="row  align-items-center">
					<div class="col-sm-4">
						<img  src="{{asset('storage/images/ministries/get-involved.jpg')}}" alt="" width="100%">
					</div>
					<div class="col-sm-8">
						<div class="p-2">
							<h2>Teens Church</h2>
						</div>
					</div>
					<div class="col-12">
						<div class="p-2">
							<p>Our Youth and Singles ministry at Winners Chapel Owerri is designed in a unique way to enhance the value of every individual and set them up for supernatural accomplishments. This ministry is specifically focused on raising people with a difference. </p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

        @endsection

