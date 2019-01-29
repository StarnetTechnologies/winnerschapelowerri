<div class="accordion" id="units-accordion">
   <div class="card">
        <div class="card-header">
            <button class="btn btn-info" data-toggle="collapse" data-target="#new-unit" aria-expanded="true" aria-controls="new-unit">
                <i class="fa fa-plus-circle"></i> Add New Unit 
            </button>
            <h4><i class="fa fa-calendar"></i>  Units <span class="badge badge-secondary">{{$UNITS->count()}}</span></h4>
        </div>
        <div class="card-body admin-panel" style="padding: 0">

            <!--New unit form-->
            <div style="padding: 10px">
                <div id="new-unit" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#units-accordion">
                    @include('widgets.admin.new-unit')
                </div> 
            </div>

            <!--New unit form-->

            @if($UNITS->count() > 0)
                <div class="list-group">
                    @foreach($UNITS as $unit)
                        <div class="list-group-item border-0">
                            <strong><a href="{{route('unit',$unit->slug)}}">{{$unit->name}}</a></strong>
                            <div>{!!$unit->about()!!}</div>

                            <a title="Update unit" class="text-info" style="font-size: 16px" href="{{route('edit.unit', ['id'  => $unit->slug])}}"><i class="fa fa-pen"></i> edit</a>
                            <span title="discard unit" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-unit-{{$unit->id}}-confirmation')"><i class="fa fa-trash"></i> discard</span>        
                            <div class="confirmation-container" id="discard-unit-{{$unit->id}}-confirmation">
                                <p class="text-warning">Are you sure you want to remove <strong>{{$unit->name}} ???!</strong></p>
                                <button class="btn btn-primary confirm-no">No</button>
                                <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                <form action="{{route('discard.unit',['id' => $unit->slug])}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </div>

                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning text-center">No unit added yet</div>
            @endif
        </div>
    </div>
</div>