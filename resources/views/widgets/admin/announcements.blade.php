<div class="card">
    <div class="card-header">
        <h4><i class="fa fa-bullhorn"></i>  Announcements <span class="badge badge-secondary">{{$announcements->count()}}</span></h4>
    </div>
    <div class="card-body admin-panel" style="padding: 0">
        @if($announcements->count() > 0)
            @foreach($announcements as $a)
                <div style="padding: 8px; border-bottom: 1px solid #f7f7f7; margin-bottom: 5px">
                    <h5 class="theme-color">{{$a->subject}}</h5>
                    <span title="discard announcement" class="text-danger" style="font-size: 16px;cursor: pointer" onclick="javascript: confirmDelete(this,'discard-announcement-{{$a->id}}-confirmation')"><i class="fa fa-trash"></i> discard</span>
                    <div class="confirmation-container" id="discard-announcement-{{$a->id}}-confirmation">
                        <p class="text-warning">Are you sure you want to discard the announcement <strong>{{$a->subject}} ???!</strong></p>
                        <button class="btn btn-primary confirm-no">No</button>
                        <button class="btn btn-danger confirm-yes">Yes,  discard</button>
                        <form action="{{route('discard.announcement',['id' => $a->id])}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </div>

                    <p class="grey">{{$a->message}}</p>
                </div>
            @endforeach
        @endif
    </div>
</div>