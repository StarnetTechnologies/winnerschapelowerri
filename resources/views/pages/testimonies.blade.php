@extends('layouts.app')
@section('title')
 Testimonies
@endsection

@section('styles')
<style>
    #testimony-form{
        background-color: #E1E5F0;
        padding: 10px;
        border-radius: 0px 20px 0px 20px;
        box-shadow: 0px 20px 20px rgba(0,0,0,.1);
    }
</style>

@endsection

@section('top-widget')
    @include('widgets.breadcrumb')
@endsection

@section('content')

<div class="eclipse-bg">
    <div class="row pt-3">
        <div class="col-md-4 offset-md-1">
        <h2 class="text-center">Tell us about God's Favour in your Life</h2>
            <div id="testimony-form">
                <form action="{{route('submit.testimony')}}" method="POST">
                        {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="name">Name <span>*</span></label>
                            <br>
                            <small class="grey"><i class="fa fa-info-circle"></i>  Your fullname <i>(required)</i> </small>
                        </div>
                        <div class="col-12">
                            <input class="form-control" id="name" type="text" name="name" placeholder="Your name (required)" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="email">Email <span>*</span></label>
                            <br>
                            <small class="grey"><i class="fa fa-info-circle"></i>  Your email will not be shared to the public <i>(required)</i> </small>
                        </div>
                        <div class="col-12">
                            <input class="form-control" id="email" type="email" name="email" placeholder="Your email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="title">Title</label>
                            <br>
                            <small class="grey"><i class="fa fa-info-circle"></i>  Your testimony title <i>(optional)</i></small>
                        </div>
                        <div class="col-12">
                            <input class="form-control" id="title" type="text" name="title" placeholder="Your testimony title" required autofocus>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="testimony">Testimony</label>
                            <br>
                            <small class="grey"><i class="fa fa-info-circle"></i>  Your testimony <i>(required)</i></small>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" name="testimony" id="testimony" placeholder="Your testimony" required autofocus></textarea>
                            @if ($errors->has('testimony'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('testimony') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-2">
                            <input type="submit" class="custom-btn btn-block" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-7">
            <div class="p-2">
                <h3 class="text-center super-font theme-color">Testimonies</h3>
                @if($testimonies->count() > 0)
                    @foreach($testimonies as $testimony)
                        <div class="card mb-2">
                            @if($testimony->title !== null)
                                <div class="card-header">
                                    <h4 class="card-title">{{$testimony->title}}</h4>
                                </div>
                            @endif
                            <div class="card-body">
                                
                                <blockquote class="blockquote card-body">
                                    <p>{{$testimony->testimony}}</p>
                                    <footer class="blockquote-footer">
                                        <small class="text-muted">
                                            <i class="fa fa-user"></i>  {{$testimony->name}}
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    @endforeach
                    {{$testimonies->links()}}
                @else
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="alert alert-warning">
                                No testimony found
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

        @endsection

