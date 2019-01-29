<div>
    <strong>{{$service->title}}</strong>
</div>
@if(Auth::check())
        <a title="Update service" class="text-info" style="font-size: 16px" href="{{route('edit.service', ['id'  => $service->id])}}"><i class="fa fa-pen"></i> edit</a>
        <span title="discard service" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-service-{{$service->id}}-confirmation')"><i class="fa fa-trash"></i> discard</span>        
        <div class="confirmation-container" id="discard-service-{{$service->id}}-confirmation">
            <p class="text-warning">Are you sure you want to remove <strong>{{$service->title}} ???!</strong></p>
            <button class="btn btn-primary confirm-no">No</button>
            <button class="btn btn-danger confirm-yes">Yes,  discard</button>
            <form action="{{route('discard.service',['id' => $service->id])}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
            </form>
        </div>

        @endif
<p class="grey"><i class="fa fa-calendar"></i>  {{$service->day}}</p>
<p class="grey"><i class="fa fa-clock"></i>  {{$service->normalTime($service->start)}} - {{$service->normalTime($service->end)}} </p>
@if($service->note !== null)
    <div>{!!$service->note!!}</div> 
@endif