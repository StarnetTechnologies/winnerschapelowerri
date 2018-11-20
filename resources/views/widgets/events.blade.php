<h2 class="theme-color text-center lobster-font ">Events</h2>
<hr>
<div class="{{(count($EVENTS['happening']) > 0 && count($EVENTS['upcoming']) > 0) ? 'row' : ''}}">
    <div class="{{ (count($EVENTS['happening']) > 0 && count($EVENTS['upcoming']) > 0)  ? 'col-md-7' : ''}}">
        @if(count($EVENTS['happening']) > 0)
        <div class="event-wrapper happening-events-wrapper">
        <div class="events-section-heading">
            <h2>Happening Now <span class="badge">({{count($EVENTS['happening'])}})</span></h2>
        </div>
            @foreach($EVENTS['happening'] as $event)
                <div class="event happening transit">
                    <div class="date transit animated swing infinite">
                        {{$event->startDate()->format('M')}}<br>{{$event->now()->format('d')}}
                    </div>
                    <div class="event-details">
                        <h2 class="theme-color">{{$event->title}}                        
                         @if(Auth::check())
                            <a title="Update event" class="text-info" style="font-size: 16px" href="{{route('edit.event', ['id'  => $event->id])}}"><i class="fa fa-pen"></i></a>
                            <span title="remove event" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javasscript:document.getElementById('remove-event-{{$event->id}}').submit()"><i class="fa fa-trash"></i></span>

                            <form id="remove-event-{{$event->id}}" action="{{route('remove.event',['id' => $event->id])}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                            @endif
                        </h2>
                        <div class="event-description">
                            <p>{{$event->description}}</p>
                        </div>
                        <div style="font-size: 20px">
                            <i class="fa fa-map-marker theme-color"></i>  {{$event->location}}
                        </div>
                        <div >
                            <div>
                                <i class="fa fa-calendar theme-color" style="font-size: 40px"></i>  <span class="theme-color">Started: </span> {{$event->startDate()->format('d M, Y')}}<i class="fa fa-clock theme-color"></i> {{$event->startDate()->format('g : ia')}} <span class="theme-color"> {{$event->howfar()}}</span>
                            </div>
                        </div>            
                    </div>

                    <div class="event-countdown">
                    <strong>Ending: </strong><i class="fa fa-calendar theme-color"></i> {{$event->endDate()->format('d M, Y')}}
                        <div id="countdown-{{$event->id}}" ></div>
                        <script>
                            var cd = new countdown(document.querySelector("#countdown-{{$event->id}}"),{
                            days: {{($event->beforeEnd()->y * 365) + ($event->beforeEnd()->m * 30) + $event->beforeEnd()->d}},
                            hours: {{$event->beforeEnd()->h}},
                            minutes: {{$event->beforeEnd()->i}},
                            seconds: {{$event->beforeEnd()->s}},
                            timeUpNote: '{{$event->title}} already started!',
                            timeRunningNote: '',
                            criticalTimesStart: 2,
                            //criticalTimesColor: 'blue',
                            criticalTimesNote: 'Few minutes before the start of {{$event->title}}',
                        });
                        </script>
                        
                    </div>

                </div>
            @endforeach
            </div>
        @endif

    </div>
    <div class="{{ (count($EVENTS['happening']) > 0 && count($EVENTS['upcoming']) > 0)  ? 'col-md-5' : ''}}">
        @if(count($EVENTS['upcoming']) > 0)
        <div class="event-wrapper upcoming-events-wrapper">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="events-section-heading">
                    <h2>Upcoming Events <span class="badge">({{count($EVENTS['upcoming'])}})</span></h2>
                    <div style="height: 30px">
                    <a  style="position: relative;opacity:1; float: left" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i style="color:red; font-size: 30px" class="fa fa-arrow-left"></i>
                            <span class="sr-only">Previous</span>
                    </a>
                    <a style="position: relative;opacity:1;float: right" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i style="color:red; font-size: 30px" class="fa fa-arrow-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>




                <!--<ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>-->

                    <div class="carousel-inner">
                    @foreach($EVENTS['upcoming'] as $event)
                        <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                            <div class="event upcoming transit">
                                    <div class="date transit  animated swing infinite">
                                        {{$event->startDate()->format('M')}}<br>{{$event->startDate()->format('d')}}
                                    </div>
                                    <div class="event-details">
                                        <h2 class="theme-color">{{$event->title}}
                                            @if(Auth::check())
                                                <a title="Update event" class="text-info" style="font-size: 16px" href="{{route('edit.event', ['id'  => $event->id])}}"><i class="fa fa-pen"></i></a>
                                                <span title="remove event" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javasscript:document.getElementById('remove-event-{{$event->id}}').submit()"><i class="fa fa-trash"></i></span>

                                                <form id="remove-event-{{$event->id}}" action="{{route('remove.event',['id' => $event->id])}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                                @endif
                                        </h2>
                                    <div class="event-description">
                                            <p>{{$event->description}}</p>
                                    </div>

                                        <div>
                                            <i class="fa fa-map-marker theme-color"></i>  {{$event->location}}
                                        </div>
                                        <div class="row" style="margin-top: 20px">
                                            <div class="col-xs-4">
                                                <i class="fa fa-calendar theme-color" style="font-size: 40px"></i>
                                                </div>
                                                <div class="col-xs-8">
                                                     <span class="theme-color">From</span> {{$event->startDate()->format('d M, Y')}} <i class="fa fa-clock theme-color"></i> {{$event->startDate()->format('g : ia')}}
                                                    <br>
                                                    <span class="theme-color">To</span> {{$event->endDate()->format('d M, Y')}} <i class="fa fa-clock theme-color"></i> {{$event->endDate()->format('g : ia')}}
                                                </div>

                                        </div>           
                                        
                                    </div>

                                    <div class="event-countdown">
                                        <h4>Starting approximately in...</h4>
                                        <div id="countdown-{{$event->id}}" ></div>
                                        <script>
                                            var cd = new countdown(document.querySelector("#countdown-{{$event->id}}"),{
                                            days: {{($event->beforeStart()->y * 365) +  ($event->beforeStart()->m * 30) + $event->beforeStart()->d}},
                                            hours: {{$event->beforeStart()->h}},
                                            minutes: {{$event->beforeStart()->i}},
                                            seconds: {{$event->beforeStart()->s}},
                                            timeUpNote: '{{$event->title}} already started!',
                                            timeRunningNote: '',
                                            criticalTimesStart: 2,
                                            //criticalTimesColor: 'blue',
                                            criticalTimesNote: 'Few minutes before the start of {{$event->title}}',
                                        });
                                        </script>
                                        
                                    </div>

                                </div>
                        </div>
                    @endforeach
                    </div>
                
                </div>
        </div>
    @else
        <div class="alert alert-info">No upcoming event</div>
    @endif
    </div>
</div>




