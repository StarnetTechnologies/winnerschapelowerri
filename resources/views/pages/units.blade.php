@extends('layouts.app')
@section('title')
 Service Units
@endsection
@section('styles')
@endsection

@section('top-widget')
    @include('widgets.breadcrumb')
@endsection

@section('content')
<div class="eclipse-bg">
	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Service Units</h3>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
        <p>
            Here at Winners Chapel Owerri, there is a place for everyone. 
            We have many opportunities for every person to minister and 
            in turn, be ministered to.  Take the time to explore the 
            different ministry opportunities and take the time to serve and 
            get involved.  There are many benefits of kingdom service 
            and the word of God validates this in Exodus 23:25, 
            <em class="theme-color">&ldquo;you shall serve the Lord your God, and he shall bless 
                thy bread, and thy water; and I will take sickness away from 
                the midst of thee&rdquo;.</em>
        </p>

            <p>
                One of the most rewarding things you can do is to be of 
                service to others. It not only helps others but it also 
                helps you. Amongst other things, it gives you self confidence 
                and more importantly, great joy.  So take the time to pray 
                about where God wants you to serve and get plugged in.  
                Remember, <em class="theme-color">&ldquo;&hellip;it is more blessed to give than 
                    to receive&rdquo;</em> (Acts 20:35). As you give your time, and services, God&rsquo;s blessings 
                    will never elude you and your household in Jesus name.
                </p>
                <h4 class="theme-color">Units</h4>
                <br>
                @if($units->count() > 0)
                    <ul class="list-group">
                        @foreach($units as $unit)
                            <li class="list-group-item shadow-sm"><strong><a href="{{route('unit',$unit->slug)}}">{{$unit->name}}</a></strong>
                                <div class="pl-3">{!!$unit->about()!!}</div>
                            </li>
                        @endforeach
                    </ul>
                @else
                <p class="grey"><i class="fa fa-exclamation-triangle"></i> No unit available yet</p>
                    
                @endif
                <div class="my-5">
                    <p>
                        If you are interested in any of the service groups above, please pick up a form at the Protocol stand in the church auditorium. God bless you and may you reap the great benefits of Kingdom service as you get plugged in, in Jesus name.
                    </p>
                   
                </div>
            
		</div>
	</div>
</div>
@endsection

