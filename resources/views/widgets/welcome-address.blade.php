<div class="welcome-address-container" >
    <div class="pt-5">
        <div class="row-eq-height">
            <div class="col-sm-10 offset-sm-1">
                <div class="row align-items-end">
                    <div class="col-sm-5 col-md-6">
                        <div >
                            <div class="text-center">
                                <h2  style="color: red">Welcome To Living Faith Church, Owerri</h2>
                                <hr>
                                <h4 class="">Our global membership is referred to as the Winners’ Family.</h4>	
                            </div>
                                <div style="text-align: justify; line-height: 30px; padding: 20px 10px;">
                                @if($PREF !==null && $PREF->welcome_address !== null && $PREF->welcome_address !== '')
                                        <p style="">{!!$PREF->welcome_address!!}</p> 
                                        <h4 class="text-right">-{{$PREF->pastor->fullname}}</h4>
                                        <p class="text-right">{{$PREF->pastor->position}}</p> 
                                    @endif
                                </div>
                        </div>
                    </div>
                    
                    <div  class="col-sm-7 col-md-6 d-none d-md-block" id="pastor">
                        @if($PREF !==null && $PREF->imageAvailable())
                            <img src="{{$PREF->frontImageUrl()}}" alt="">     
                        @endif

                    </div>
                </div >
            </div>
        </div>
    </div>
</div>
