<div class="card">
    <div class="card-header">
        <h4><i class="fa fa-phone"></i>  Contacts</h4>
    </div>
    <div class="card-body">

        @if($CONTACTS !== null)
        <div class="accordion" id="contacts-accordion">
            <div class="contact">
                <i class="fa fa-map-marker"></i>  {{$CONTACTS->address}} 
            </div>
            <div class="contact">
                <i class="fa fa-phone"></i>  {{$CONTACTS->phone1.', '.$CONTACTS->phone2}} 
            </div>   
            <div class="contact">
                <i class="fa fa-envelope"></i>  {{$CONTACTS->email}} 
            </div>   
            <div class="contact">
                <i class="fab fa-facebook"></i>  {{$CONTACTS->facebook}} 
            </div>
            <div class="contact">
                <i class="fab fa-instagram"></i>  {{$CONTACTS->instagram}} 
            </div>   
            <div class="contact">
                <i class="fab fa-twitter"></i>  {{$CONTACTS->twitter}} 
            </div>  
            <div class="contact">
                <i class="fab fa-youtube"></i>  {{$CONTACTS->youtube}} 
            </div> 
                <p class="text-right">
                    <a href="#update-contacts"  data-toggle="collapse" data-target="#update-contacts" aria-expanded="true" aria-controls="update-contacts">
                        <i class="fa fa-pen"></i> Update Contacts 
                    </a> 
                </p>

                <div id="update-contacts" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#contacts-accordion">
                    <h5>Update Contacts</h5>
                    <form action="{{route('update.contacts')}}" method="POST">
                        
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fa fa-map-marker"></i>  Address</label>
                            <input class="form-control" type="text" name="address" value="{{$CONTACTS->address}}">
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    {{ $errors->first('address') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('phone1') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fa fa-phone"></i>  Phone 1</label>
                            <input class="form-control" type="tel" name="phone1" value="{{$CONTACTS->phone1}}">
                            @if ($errors->has('phone1'))
                                <span class="help-block">
                                    {{ $errors->first('phone1') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('phone2') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fa fa-phone"></i>  Phone 2</label>
                            <input class="form-control" type="tel" name="phone2" value="{{$CONTACTS->phone2}}">
                            @if ($errors->has('phone2'))
                                <span class="help-block">
                                    {{ $errors->first('phone2') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fa fa-envelope"></i>  Email Address</label>
                            <input class="form-control" type="tel" name="email" value="{{$CONTACTS->email}}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>


                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fa fa-envelope"></i>  Email Address</label>
                            <input class="form-control" type="tel" name="email" value="{{$CONTACTS->email}}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('facebook') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fab fa-facebook"></i>  Facebook Page</label>
                            <input class="form-control" type="url" name="facebook" value="{{$CONTACTS->facebook}}">
                            @if ($errors->has('facebook'))
                                <span class="help-block">
                                    {{ $errors->first('facebook') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('instagram') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fab fa-instagram"></i>  Instagram</label>
                            <input class="form-control" type="url" name="instagram" value="{{$CONTACTS->instagram}}">
                            @if ($errors->has('instagram'))
                                <span class="help-block">
                                    {{ $errors->first('instagram') }}
                                </span>
                            @endif
                        </div>


                        <div class="form-group {{$errors->has('twitter') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fab fa-twitter"></i>  Twitter</label>
                            <input class="form-control" type="url" name="twitter" value="{{$CONTACTS->twitter}}">
                            @if ($errors->has('twitter'))
                                <span class="help-block">
                                    {{ $errors->first('twitter') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('youtube') ? 'has-error' : ''}}">
                            <label for="" class="label-control"><i class="fab fa-youtube"></i>  Youtube Channel</label>
                            <input class="form-control" type="url" name="youtube" value="{{$CONTACTS->youtube}}">
                            @if ($errors->has('youtube'))
                                <span class="help-block">
                                    {{ $errors->first('youtube') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="custom-btn" >
                                Update Contacts
                            </button>
                        </div>
                        
                    </form>
                </div>
        </div>
        @else
            <div class="alert alert-warning">No contact added yet</div>
        @endif
    </div>
</div>