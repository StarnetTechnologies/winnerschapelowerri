<div class="card">
    <div class="card-header">
        <h4><i class="fa fa-cog"></i>  Preferences</h4>
    </div>
    <div class="card-body">
        <div class="accordion" id="preference-accordion">
            <form class="has-image-upload" action="{{route('update.preferences')}}" method="POST" enctype="multipart/form-data">
               
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                <p><strong>Pastor in charge: </strong></p>
                    <img src="{{$pref->pastor->dpUrl()}}" alt="{{$pref->pastor->fullname}}" style="width: 80px; height: 80px; border-radius: 50%"> {{$pref->pastor->fullname}} 
                    <a href="#" data-toggle="collapse" data-target="#pastor-in-charge" aria-expanded="true" aria-controls="pastor-in-charge">
                        <i class="fa fa-pen"></i> change
                    </a>
                
                    <div id="pastor-in-charge" class="form-group collapse admin-panel-collapse" aria-labelledby="" data-parent="#preference-accordion">
                        <label for="" class="label-control">Select Pastor in charge</label>
                    <select name="pastor" class="form-control">
                            @foreach($PASTORS as $p)
                                <option value="{{$p->id}}" {{$p->id == $pref->pastor->id ? 'selected' : '' }}>{{$p->fullname}} ({{$p->position}})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="alert alert-info">
                        <span class="badge badge-warning animated flash infinite slow"><i class="fa fa-info"></i></span> <small> The Pastor in charge <strong class="pst-in-charge">{{$pref->pastor->fullname}}</strong> would be assumed to be the author of the Welcoming address on the homepage</small>
                    </div>
                
                    <p><strong>Welcoming Address:</strong></p>
                    <div class="alert alert-success">
                        {{$pref->welcome_address}}
                    <p class="text-right">
                        <a href="#edit-welcome-address" data-toggle="collapse" data-target="#edit-welcome-address" aria-expanded="true" aria-controls="edit-welcome-address">
                            <i class="fa fa-pen"></i> edit welcome address
                        </a>                   
                    </p>

                    </div>

                    <div id="edit-welcome-address" class="form-group collapse admin-panel-collapse" aria-labelledby="" data-parent="#preference-accordion">
                        <label for="" class="label-control">Edit Welcome Address on home page</label>
                        <textarea class="form-control" name="welcome_address">{{$pref->welcome_address}}</textarea>
                    </div>
                    
                    <p><strong>Front Image:</strong></p>
                    <div class="alert alert-info">
                        <span class="badge badge-warning animated flash infinite slow"><i class="fa fa-info"></i></span> <small> This should be another good quality picture of <strong class="pst-in-charge">{{$pref->pastor->fullname}}</strong> to fit in the home page</small>
                    </div>
                    @if($pref->front_image == null)
                    <div class="alert alert-warning">There is no front image yet</div>
                        <div class="form-group">
                            <input class="form-control" type="file" name="front_image" accept="image/*">
                            <div class="image-preview-container" preview-height="auto" preview-width="100%" ></div>
                        </div>
                    @else
                        <div class="text-center">
                            <img src="{{$pref->frontImageUrl()}}" alt="Home page front image" width="100%" id="old-front-image">
                        </div>
                        <p class="text-right">
                            <a href="#edit-front-image" data-toggle="collapse" data-target="#edit-front-image" aria-expanded="true" aria-controls="edit-front-image">
                                <i class="fa fa-pen"></i> edit front image
                            </a> 
                        </p>
                        <div id="edit-front-image" class="form-group collapse admin-panel-collapse" aria-labelledby="" data-parent="#preference-accordion">
                            <div class="form-group">
                                <input class="form-control" type="file" name="front_image" accept="image/*">
                                <div class="image-preview-container" preview-height="auto" preview-width="100%" replace="#old-front-image"></div>
                            </div>
                        </div>
                    @endif

                    
                    <div class="form-group">
                        <button class="btn custom-btn" type="submit">Update</button>
                    </div>
                
            </form>
        </div>

    </div>
</div>