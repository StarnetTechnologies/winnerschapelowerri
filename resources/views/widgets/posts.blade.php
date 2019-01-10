<h4 class="super-font theme-color text-center">From Pastor's Desk</h4>

@if($POSTS->count() > 0)
	<div style="padding-top: 20px">
        <div class="posts-container">
            @foreach($POSTS as $post)
                <div style="margin-bottom: 5px">
                    @include('templates.post')
                </div> 
            @endforeach
            <div class="text-right">
                <a href="{{route('posts')}}" class="btn btn-secondary"> See More <span>&raquo;</span></a>
            </div>
        </div>
@else
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-warning">No post yet</div>
            </div>
        </div>
@endif