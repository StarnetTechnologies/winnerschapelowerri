<div id="words">
	<h2 class="theme-color">God's Word For You</h2>
		<div id="motivations-wrapper">
		@if($MOTIVATIONS->count() > 1)
			@php
				$m = $MOTIVATIONS->first();
			@endphp
			@include('templates.motivation')
			<a class="theme-color" data-toggle="collapse" href="#more-words" role="button" aria-expanded="false" aria-controls="more-words">
				See previous
			  </a>
			  <div class="collapse" id="more-words">
				@foreach($MOTIVATIONS as $m)
					@if($loop->first)
						@continue
					@endif
					@include('templates.motivation')
				@endforeach
			  </div>
			@elseif($MOTIVATIONS->count() > 0)
				@php
					$m = $MOTIVATIONS->first();
				@endphp
				@include('templates.motivation')
		@else
			<div class="panel panel-default" style="background-color:rgba(68,18,0,0.2); color: rgb(68,18,0)">
				<div class="panel-body text-center">
					No words yet
				</div>
			</div>
		@endif
	</div>
</div>