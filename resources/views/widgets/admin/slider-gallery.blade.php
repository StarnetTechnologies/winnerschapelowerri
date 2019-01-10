<div class="accordion" id="slider-gallery-accordion">
    <div class="card">
        <div class="card-header">
                <button class="btn btn-info" data-toggle="collapse" data-target="#slider-gallery" aria-expanded="true" aria-controls="slider-gallery">
                    <i class="fa fa-plus-circle"></i> Add New Photo 
                </button>
            <h4><i class="fa fa-images"></i>  Home Slider <span class="badge badge-secondary">{{$SLIDERS->count()}}</span></h4>
        </div>
        <div class="card-body admin-panel">
            <!--new upload-->
            <div id="slider-gallery" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#slider-gallery-accordion">
                <form class="has-image-upload" action="{{route('add.gallery')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input class="form-control" type="file" name="photos[]" accept="image/*" multiple required>
                    <input type="hidden" name="role" value="slider">
                    <div class="image-preview-container" caption='caption'></div>
                    <input  class="btn btn-info" type="submit" value="Upload Image">
                </form>
            </div>
            <!--new upload-->

            </div>
            @if($SLIDERS->count() > 0)
                <div class="row">
                    @foreach($SLIDERS as $photo)
                        @include('templates.admin.photo-preview')
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning">No photo in the slider yet</div>
            @endif
        </div>
    </div>
</div><!--slider gallery-accordion-->