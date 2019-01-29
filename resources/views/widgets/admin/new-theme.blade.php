      <?php
        $now = new DateTime();
      ?>
      @if($THEME == null)
        <form class="has-image-upload" method="POST" action="{{ route('new.theme') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h4 class="text-center">Theme for this month <strong class="theme-color">{{$now->format('F, Y')}}</strong></h4>
                <div class="form-group{{ $errors->has('theme') ? ' has-error' : '' }}">
                    <label class="control-label">Theme: </label>
                    <input id="theme" type="text" class="form-control" name="theme" placeholder="{{$now->format('F, Y')}} Theme" value="{{ old('theme') }}" required autofocus>
                    @if ($errors->has('theme'))
                            <span class="help-block">
                                {{ $errors->first('theme') }}
                            </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('bible_verse') ? ' has-error' : '' }}">
                    <label class="control-label">Bible Verse:</label>
                        <input id="bible_verse" type="text" class="form-control" name="bible_verse" placeholder="bible verse" value="{{ old('bible_verse') }}" required autofocus>
                        @if ($errors->has('bible_verse'))
                                <span class="help-block">
                                    {{ $errors->first('bible_verse') }}
                                </span>
                        @endif
                </div>
                
                <div class="form-group {{ $errors->has('note') ? ' has-error' : '' }}">
                    <label class="control-label">Note: <i>(Optional)</i></label>
                    <p class="help-block">A note about this month theme</p>
                    <textarea id="note" class="ckeditor form-control" name="note" placeholder="theme note,if any">{{ old('note')}}</textarea>
                    @if ($errors->has('note'))
                            <span class="help-block">
                                {{ $errors->first('note') }}
                            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="" class="label-control"><i class="fa fa-images"></i> Theme Graphic <i>(optional)</i></label>
                    <p class="help-block">Include a catchy graphics to the the theme </p>
                    <input class="form-control" type="file" name="image" id="">
                    <div class="image-preview-container" preview-width="100%" preview-height="auto"></div>
                </div>

                <label class="send-notification"><input type="checkbox" name="notification"  value="true" checked>  Send Push Notification</label>

                <div class="form-group">
                    <button type="submit" class="custom-btn" >
                        Publish
                    </button>
                </div>
            </form>
        @else
        <form class="has-image-upload" method="POST" action="{{ route('update.theme',$THEME->first()->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <h4 class="text-center">Update this month <strong class="theme-color">{{$now->format('F, Y')}} Theme</strong></h4>
                <div class="form-group {{ $errors->has('theme') ? ' has-error' : '' }}">
                    <label class="control-label">Theme: </label>
                    <input id="theme" type="text" class="form-control" name="theme" placeholder="{{$now->format('F, Y')}} Theme" value="{{ $THEME->theme }}" required autofocus>
                    @if ($errors->has('theme'))
                            <span class="help-block">
                                {{ $errors->first('theme') }}
                            </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('bible_verse') ? ' has-error' : '' }}">
                    <label class="control-label">Bible Verse:</label>
                    <input id="bible_verse" type="text" class="form-control" name="bible_verse" placeholder="bible verse" value="{{ $THEME->bible_verse }}" required autofocus>
                    @if ($errors->has('bible_verse'))
                            <span class="help-block">
                                {{ $errors->first('bible_verse') }}
                            </span>
                    @endif
                </div>
                
                <div class="form-group {{ $errors->has('note') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Note: <i>(Optional)</i></label>
                    <p class="help-block">A note about this month theme</p>
                    <textarea id="note" class="ckeditor form-control" name="note" placeholder="theme note,if any" >{{$THEME->note}}</textarea>
                    @if ($errors->has('note'))
                            <span class="help-block">
                                {{ $errors->first('note') }}
                            </span>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="" class="label-control"><i class="fa fa-images"></i> Theme Graphic <i>(optional)</i></label>
                    <p class="help-block">Update theme graphics</p>
                    @if($THEME->image == null)
                        <div class="alert warning">No graphics added yet</div>
                        <input class="form-control" type="file" name="image" id="">
                        <div class="image-preview-container" preview-width="100%" preview-height="auto"></div>
                    @else
                        <div class="text-center">
                            <img src="{{$THEME->imageUrl()}}" alt="{{$THEME->theme}}" width="100%" id="prev-theme-img">
                        </div>
                        <input class="form-control" type="file" name="image" id="">
                        <div class="image-preview-container" replace="#prev-theme-img"></div>

                    @endif
                </div>

                <label class="send-notification"><input type="checkbox" name="notification"  value="true" checked>  Send Push Notification</label>
            
                <div class="form-group">
                    <button type="submit" class="custom-btn" >
                        Update {{$now->format('F').', '.$now->format('Y')}} Theme
                    </button>
                </div>

            </form>
        @endif