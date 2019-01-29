@extends('layouts.app')

@section('styles')
<style>

    #other-posts-container{
        padding: 10px 5px;
    }
    .other-post{
        margin: 5px 0;
    }
    .op-title a{
 	transition: all .3s ease-in-out;
    }
     .op-title a:hover{
    	text-decoration:none;
    }

       @media (min-width: 768px){
        #single-post-container{
        padding: 10px 20px;
        }
    }
</style>

@endsection

@section('top-widget')
    <div style="height: 100px"></div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8">
            @if($post !== null)
            <div id="single-post-container">
                <h2 class="theme-color">{{$post->title}}</h2>
                 @if($post->image !== null && $post->image !== '')
                	<div class="text-center">        
                    		<img src="{{$post->imageUrl()}}" alt="{{$post->title}}" width="100%">
                    	</div>
                 @endif
                <p><img src="{{$PREF->pastor->dpUrl()}}" alt="{{$PREF->pastor->fullname}}" style="width: 70px; height: 70px; border-radius: 50%; border: 2px solid #fff">  {{$PREF->pastor->fullname}} <i class="fa fa-clock"></i> {{$post->created_at->diffForHumans()}} </p>
                <div class="card border-0">
                    <div class="card-body">
                        {!!$post->content('full')!!}
                    </div>
                </div>                
            </div>
        @else
            <div class="alert alert-info">Nothing found!</div>
        @endif
        </div>
        <div class="col-sm-4">
           
                @if($otherPosts->count() > 0)
               		 <h4 class="theme-color">Read Also...</h4>
	                <div id="other-posts-container">
	                    @foreach($otherPosts as $op)
	                        <div class="other-post">
	                         @if($op->image !== null && $op->image !== '')
	                            <img src="{{$op->imageUrl()}}" alt="{{$op->title}}" width="100%">
	                           @endif
	                            <h4 class="op-title"><a href="{{route('single.post',['slug'=>$op->slug])}}">{{$op->title}}</a></h4>
                                {!!$op->content()!!}
	                        </div>
	                    @endforeach
	                </div>
                @else
                    <div class="alert alert-warning">No other post</div>
                @endif
            
        </div>
    </div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c37684c6d3c60a8"></script>
@endsection
