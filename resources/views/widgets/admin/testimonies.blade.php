<div class="accordion" id="services-accordion">
   <div class="card">
        <form action="{{route('testimony.action')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <div class="card-header">
                <h4><i class="fa fa-pen"></i>  Testimonies </h4>
                <div class="mb-2 text-center">
                    <span class="badge badge-success" style="cursor: pointer" onclick="javascript: approvedTestimoniesOnly()"><?php echo $_TESTIMONIES::where('approval',1)->count() ?> Approved</span>
                    <span class="badge badge-warning ml-3" style="cursor: pointer" onclick="javascript: pendingTestimoniesOnly()"><?php echo $_TESTIMONIES::where('approval',0)->count() ?> Pending</span>
                    <span class="badge badge-secondary ml-3" style="cursor: pointer" onclick="javascript: allTestimonies()"><?php echo $_TESTIMONIES::all()->count() ?> Total</span>
                </div>
                    <div class="row">
                        <div class="col-8">
                            <select name="action" id="action" class="form-control">
                                <option value="approve">Approve selected</option>
                                <option value="disapprove">Disapprove selected</option>
                                <option value="discard">Discard selected</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">Go!</button>
                        </div>
                    </div>
            </div>
            <div class="card-body admin-panel" style="padding: 3px">
                @if($TESTIMONIES->count() > 0)
                <div class="list-group">
                    @foreach($TESTIMONIES as $testimony)
                            <div class="list-group-item testimony {{$testimony->approved() ? 'approved' : 'pending'}}">
                                
                                    <label>
                                        <input type="checkbox" name="id[]" value="{{$testimony->id}}"> <strong> {{$testimony->title === null ? '<i class="grey">No Title</i>' : $testimony->title}}</strong> 
                                        <small class="float-right ml-2"><span class="badge {{$testimony->approved()?'badge-success' : 'badge-warning animated flash infinite slow'}}">{{$testimony->approved() ? 'approved' : 'pending'}}</span></small>
                                    </label>
                                        <blockquote class="blockquote mb-0 card-body" style="font-size: 16px">
                                            <p>{{$testimony->testimony}}</p>
                                            <footer class="blockquote-footer">
                                                <small class="text-muted" style="font-size: 14px">
                                                    <i class="fa fa-user"></i>  {{$testimony->name}} <a href="mailto: {{$testimony->email}}">{{$testimony->email}}</a>
                                                </small>
                                            </footer>
                                        </blockquote>
                            </div>
                        @endforeach
                    </div>
                    
                    
                @else
                    <div class="alert alert-warning text-center">No testimony yet</div>
                @endif
            </div>
        </form>
    </div>
</div>