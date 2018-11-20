<h4>{{$service->title}}
    @if(Auth::check())
        <a title="Update service" class="text-info" style="font-size: 16px" href="{{route('edit.service', ['id'  => $service->id])}}"><i class="fa fa-pen"></i></a>
        <span title="remove service" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javasscript:document.getElementById('remove-service-{{$service->id}}').submit()"><i class="fa fa-trash"></i></span>

        <form id="remove-service-{{$service->id}}" action="{{route('remove.service',['id' => $service->id])}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
        </form>
        @endif
</h4>
<p><i class="fa fa-map-marker"></i>  {{$service->location}}</p>
<p><i class="fa fa-clock"></i>  {{$service->normalTime($service->start)}} - {{$service->normalTime($service->end)}} Every {{$service->day}}</p> 
