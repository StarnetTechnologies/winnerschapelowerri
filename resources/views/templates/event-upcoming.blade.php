<div class="event upcoming transit">
    <div class="date transit  animated swing infinite">
        {{$event->startDate()->format('M')}}<br>{{$event->startDate()->format('d')}}
    </div>
    <div class="event-details">
    <div class="row">
        <div class="col-md-4">
            <img src="{{$event->imageUrl()}}" alt="{{$event->title}}" width="100%">
        </div>
        <div class="col-md-8">
            <div class="p-2">
                <h2 class="theme-color">{{$event->title}}</h2>
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
    </div>

        
        @if(Auth::check())
            <a title="Update event" class="text-info" style="font-size: 16px" href="{{route('edit.event', ['id'  => $event->id])}}"><i class="fa fa-pen"></i> edit</a>
            <span title="discard event" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-event-{{$event->id}}')"><i class="fa fa-trash"></i> discard</span>

            <div class="confirmation-container" id="discard-event-{{$event->id}}">
                <p class="text-warning">Are you sure you want to discard this event <strong>{{$event->title}} ???!!!</strong></p>
                <button class="btn btn-primary confirm-no">No</button>
                <button class="btn btn-danger confirm-yes">Yes, discard</button>
                
                <form  action="{{route('discard.event',['id' => $event->id])}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                </form>
            </div>
        @endif
    </div>
</div>