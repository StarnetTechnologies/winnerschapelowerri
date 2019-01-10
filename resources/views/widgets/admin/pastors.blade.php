<div class="accordion" id="pastors-accordion">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-info" data-toggle="collapse" data-target="#new-pastor" aria-expanded="true" aria-controls="new-pastor">
                <i class="fa fa-plus-circle"></i> Add New Pastor 
            </button>
            <h4><i class="fa fa-user-tie"></i>  Pastors <span class="badge badge-secondary">{{$PASTORS->count()}}</span></h4>
        </div>
        <div class="card-body admin-panel" style="padding:0">
            <!--New pastor form-->
            <div style="padding: 10px">
                <div id="new-pastor" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#pastors-accordion">
                    @include('widgets.admin.new-pastor')
                </div>
            </div>
            <!--New pastor form-->

            @if($PASTORS->count() > 0)
                @foreach($PASTORS as $pastor)
                    <div style="border-bottom: 1px solid #f7f7f7; padding:8px">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{$pastor->dpUrl()}}" alt="{{$pastor->fullname}}" style="width: 70px; height: 70px; border-radius: 50%">
                                <div>
                                    <a href="{{route('edit.pastor',['id' =>$pastor->id])}}" class="text-primary"><i class="fa fa-pen"></i> edit</a>
                                    <span title="remove pastor" class="text-danger" style="cursor: pointer" onclick="javascript: confirmDelete(this,'remove-pastor-{{$pastor->id}}-confirmation')"><i class="fa fa-trash"></i> discard</span>
                                    <div class="confirmation-container" id="remove-pastor-{{$pastor->id}}-confirmation">
                                            <p class="text-warning">Are you sure you want to remove <strong>{{$pastor->fullname}} ???!</strong></p>
                                            <button class="btn btn-primary confirm-no">No</button>
                                            <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                                            <form action="{{route('discard.pastor',['id' => $pastor->id])}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <h5 class="theme-color">{{$pastor->fullname}}</h5>
                                <small class="grey text-center">{{$pastor->position}}</small>
                                <p>{{$pastor->bio}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-waring">No pastor added yet</div>
            @endif
        </div>
    </div>
</div>
