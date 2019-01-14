
        <form class="has-image-upload" method="POST" action="{{route('add.post')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label class="control-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="post title" value="{{ old('title') }}" required autofocus>
                        @if ($errors->has('title'))
                                <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                            <label class="control-label">Body:</label>
                        <textarea class="form-control" name="body" placeholder="post content" autofocus>{{ old('bio')}}</textarea>
                        @if ($errors->has('body'))
                                <span class="help-block">
                                    {{ $errors->first('body') }}
                                </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-inner">
                        <div class="form-group">
                            <label for="featured_image" class="label-control">Featured Image</label>
                            <div class="text-center">
                                <img src="{{asset('storage/images/posts/default.png')}}" id="default-featured-image" style="width: 100%">
                            </div>
                            <br>
                            <input class="form-control" type="file" name="featured_image" accept="image/*" >
                            <div class="image-preview-container" replace="#default-featured-image"></div>
                        </div>                        
                    </div>
                </div>
                
                <div class="col-12">
                    <label class="send-notification"><input type="checkbox" name="notification"  value="true" checked> Send Push Notification</label>
                    <div class="form-group">
                        <button type="submit" class="custom-btn" >
                            Publish Post
                        </button>
                    </div>
                </div>
            </div>
        </form>

