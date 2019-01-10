<div class="welcome-address-container" >
    <div style="padding: 20px 0 ">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div >
                            <div class="text-center">
                                <h2  style="color: red">Welcome To Living Faith Church, Owerri</h2>
                                <hr>
                                <h4 class="">Our global membership is referred to as the Winners’ Family.</h4>	
                            </div>
                                <div style="text-align: justify; line-height: 30px; padding: 20px 10px; box-shadow: 0px 10px 10px rgba(0,0,0,.2); border-radius: 5px">
                                @if($PREF !==null && $PREF->welcome_address !== null && $PREF->welcome_address !== '')
                                        <p style="">{!!$PREF->welcome_address!!}</p> 
                                        <h4 class="text-right">-{{$PREF->pastor->fullname}}</h4>
                                        <p class="text-right">{{$PREF->pastor->position}}</p> 
                                    @endif
                                </div>
                        </div>
                    </div>
                    
                    <div  class="col-md-6">
                        @if($PREF !==null && $PREF->imageAvailable())
                            <figure class="overlay-caption pastor-figure white-shadow" >
                                <figcaption>
                                    <!-- <h4 class="caption text-center"> Pastor Joseph Ademola AJIBADE</h4> -->
                                </figcaption>
                                <img src="{{$PREF->frontImageUrl()}}" alt="Winners Owerri Pastor" style="border-radius: 5px">
                            </figure>
                        @endif

                    </div>
                </div >
            </div>
        </div>
    </div>
</div>
