 <div class="event happening transit">
                <div class="date transit animated  infinite">
                    {{$event->startDate()->format('M')}}<br>{{$event->startDate()->format('d')}}
                </div>
                <div class="event-details text-center">
                    <h4>{{$event->title}}</h4>
                    <div>
                        <i class="fa fa-map-marker theme-color"></i>  {{$event->location}}
                    </div>
                    <div>
                        <i class="fa fa-calendar theme-color"></i> {{$event->startDate()->format('d M, Y')}}
                        <i class="fa fa-clock theme-color"></i> {{$event->startDate()->format('H : i')}}
                        
                    </div>            
                </div>

                <div class="event-countdown">
                    <div id="countdown-{{$event->id}}" ></div>
                    <script>
                        var cd = new countdown(document.querySelector("#countdown-{{$event->id}}"),{
                        days: {{$event->beforeStart()->d}},
                        hours: {{$event->beforeStart()->h}},
                        minutes: {{$event->beforeStart()->i}},
                        seconds: {{$event->beforeStart()->s}},
                        timeUpNote: 'That\'s it!',
                        timeRunningNote: 'still got a chance',
                        criticalTimesStart: 2,
                        //criticalTimesColor: 'blue',
                        criticalTimesNote: 'Almost ending...',
                    });
                    </script>
                    
                </div>

            </div>