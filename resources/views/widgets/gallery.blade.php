<div style="background: url({{asset('storage/images/assets/worship.jpg')}}) center no-repeat; background-size: cover;">
    <div style="background-color: rgba(0,0,0,.6);  padding: 100px 5px">
        <h2 class="white text-center section-heading">Gallery</h2>
        <div class="gallery-container">
            @if($GALLERY->count() > 0)
            <div class="row">
                @foreach($GALLERY as $g)
                <div class="col-sm-3 col-6">
                    <div style="padding: 15px">
                        <div class="animated swing infinite image-caption" style="animation-duration:10s; border: 5px solid #fff; border-radius: 10px; ">
                            <div class="caption text-center">
                                <h4>{{$g->caption}}</h4>
                            </div>
                            <img src="{{$g->imageUrl()}}" width="100%" >                        
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
            @else
                <div class="alert alert-warning">No photo in the gallery yet</div>
            @endif
        </div>
    </div>
</div>
