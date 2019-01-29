<div class="accordion" id="services-accordion">
   <div class="card">
        <div class="card-header">
            <button class="btn btn-info" data-toggle="collapse" data-target="#new-service" aria-expanded="true" aria-controls="new-service">
                <i class="fa fa-plus-circle"></i> Add New Service 
            </button>
            <h4><i class="fa fa-calendar"></i>  Services <span class="badge badge-secondary">{{$SERVICES->count()}}</span></h4>
        </div>
        <div class="card-body admin-panel" style="padding: 0">

            <!--New service form-->
            <div style="padding: 10px">
                <div id="new-service" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#services-accordion">
                    @include('widgets.admin.new-service')
                </div> 
            </div>

            <!--New service form-->

            @if($SERVICES->count() > 0)
                @foreach($SERVICES as $service)
                    <div style="padding: 8px;margin-bottom: 5px; border-bottom: 1px solid #f7f7f7">
                        @include('templates.service')
                    </div>
                @endforeach
                
            @else
                <div class="alert alert-warning text-center">No service added yet</div>
            @endif
        </div>
    </div>
</div>