      <?php
        $now = new DateTime();
      ?>
      @if($PW == null)
        <form class="" method="POST" action="{{ route('new.pw') }}">
                {{ csrf_field() }}
        
                    <h4 class="text-center help-block">Prophetic word for this month <strong>{{$now->format('F').', '.$now->format('Y')}}</strong></h4>
                        <div class="form-group{{ $errors->has('word') ? ' has-error' : '' }}">
                            <div class="row">
                            <label class="col-md-3 control-label">Prophetic Word: </label>
                                <div class="col-md-9">
                                    <input id="word" type="text" class="form-control" name="word" placeholder="prophetic word for this month" value="{{ old('word') }}" required autofocus>
                                    @if ($errors->has('word'))
                                            <span class="help-block">
                                                {{ $errors->first('word') }}
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bible_verse') ? ' has-error' : '' }}">
                            <div class="row">
                            <label class="col-md-3 control-label">Bible Verse:</label>
                                <div class="col-md-9">
                                        <input id="bible_verse" type="text" class="form-control" name="bible_verse" placeholder="bible verse" value="{{ old('bible_verse') }}" required autofocus>
                                    @if ($errors->has('bible_verse'))
                                            <span class="help-block">
                                                {{ $errors->first('bible_verse') }}
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            <div class="row">
                            <label class="col-md-3 control-label">Note: <i>(Optional)</i></label>
                                <div class="col-md-9">
                                <p class="help-block">A note about this month prophetic word</p>
                                    <textarea id="note" class="form-control" name="note" placeholder="prophetic word note,if any" required autofocus>{{ old('note')}}</textarea>
                                    @if ($errors->has('note'))
                                            <span class="help-block">
                                                {{ $errors->first('note') }}
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    
                    <div class="form-group">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="custom-btn" >
                                Publish
                            </button>
                        </div>
                    </div>

            </form>
        @else
        <form class="" method="POST" action="{{ route('update.pw',$PW->first()->id) }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                    <h4 class="text-center help-block">Update this month <strong>{{$now->format('F').', '.$now->format('Y')}} Prophetic word</strong></h4>
                        <div class="form-group{{ $errors->has('word') ? ' has-error' : '' }}">
                            <div class="row">
                            <label class="col-md-3 control-label">Prophetic Word: </label>
                                <div class="col-md-9">
                                    <input id="word" type="text" class="form-control" name="word" placeholder="prophetic word for this month" value="{{ $PW->word }}" required autofocus>
                                    @if ($errors->has('word'))
                                            <span class="help-block">
                                                {{ $errors->first('word') }}
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bible_verse') ? ' has-error' : '' }}">
                            <div class="row">
                            <label class="col-md-3 control-label">Bible Verse:</label>
                                <div class="col-md-9">
                                        <input id="bible_verse" type="text" class="form-control" name="bible_verse" placeholder="bible verse" value="{{ $PW->bible_verse }}" required autofocus>
                                    @if ($errors->has('bible_verse'))
                                            <span class="help-block">
                                                {{ $errors->first('bible_verse') }}
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            <div class="row">
                            <label class="col-md-3 control-label">Note: <i>(Optional)</i></label>
                                <div class="col-md-9">
                                <p class="help-block">A note about this month prophetic word</p>
                                    <textarea id="note" class="form-control" name="note" placeholder="prophetic word note,if any" required autofocus>{{$PW->note}}</textarea>
                                    @if ($errors->has('note'))
                                            <span class="help-block">
                                                {{ $errors->first('note') }}
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    
                    <div class="form-group">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="custom-btn" >
                                Update {{$now->format('F').', '.$now->format('Y')}} PW
                            </button>
                        </div>
                    </div>

            </form>
        @endif