@if($PW !== null)
<div style="background-color: #ff0000;padding: 20px; color: #fff; box-shadow: 80px 80px rgba(0,0,0,.4)inset">
    <div class="row">
        <div class="col-sm-4 text-center">
            <h1 class="animated flash  infinite slow">{{$PW->month}}<br>{{$PW->year}}</h1>
        </div>
        <div class="col-sm-8">
            <h1 class="animated  bounce   infinite slow lobster-font prophetic-word" >{{$PW->word}}</span></h1>
            <p class="text-center">{{$PW->bible_verse}}</p>
        </div>
    </div>    
</div>
@else
    <div class="alert alert-info">No prophetic word for this month yet</div>
@endif