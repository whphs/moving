<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ $title }}
                    @if ($rightButton)
                        {!! link_to_route($rightButton['route'], $rightButton['title'], $rightButton['params'], ['class' => 'btn btn-success float-right']) !!}
                    @endif
                </h3>
                @if ($showStatus)
                    {!! Form::statusAlert('success') !!}                    
                @endif
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
