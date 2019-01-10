<div style="padding: 50px 5px">
    @if($THEME !== null)
    <div class="row align-items-center">
        <div class="col-sm-6">
            @if($THEME->imageAvailable())
                <div class="text-center">
                    <img src="{{$THEME->imageUrl()}}" alt="{{$THEME->theme}}" width="100%">
                </div>
                @endif
        </div>
        <div class="col-sm-6">
            <div style="color: #fff; padding: 10px">
                <h1 class="animated  bounce   infinite slow super-font monthly-theme theme-color" >{{$THEME->theme}}</span></h1>
                <p class="text-center">{{$THEME->bible_verse}}</p>
                <p style="font-size: 18px" class="text-justify">{{$THEME->note}}</p>
            </div>
        </div>
    </div>

    @else
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-warning">No Theme for this month yet</div>
            </div>
        </div>
    @endif
</div>