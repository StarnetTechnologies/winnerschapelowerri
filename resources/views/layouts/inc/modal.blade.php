<div class="modal fade" id="appModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(68,18,0); color: #fff">
        <h2 class="modal-title text-center" id="modalLabel" style="color: #fff"></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:#fff">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body">
			<div class="row">
				<div class="col-sm-6">
					<img src="" alt="" width="100%" height="auto" id="book-cover">
				</div>
				<div class="col-sm-6">
					<h1 id="book-price" class="theme-color"></h1>
					<p class="text-justify">A copy of <span class="book-title"></span> will be sent to you via email when payment of <span class="book-price"></span> is confirmed</p>
					<h2>Account Details:</h2>
					<hr>
					<h3>Account Name: {{$OWNER->account_name}}</h3>
					<h3>Account No: {{$OWNER->account_no}}</h3>
					<h3>Bank: {{$OWNER->bank}}</h3>
					<hr>
					<p class="text-justify">After payment, send a text to <a href="tel:{{$OWNER->phone}}"><strong><em>{{$OWNER->phone}}</em></strong></a> in the following format</p>
					<div class="text-center">
						<p class="theme-color"><q>Name / Email address / Book title</q></p>
						<p><i>For example: Adebayo Chidinma Musa / adebayomusa@mail.com / <span class="book-title">A Minister of God</span></i></p>
					</div>
				</div>
			</div>
      </div>
      <div class="modal-footer" id="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
    </div>
  </div>
</div>