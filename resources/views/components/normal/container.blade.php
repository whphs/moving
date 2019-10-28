<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="title">{{ $title }}</span>
                @if ($rightButton)
                    {!! link_to_route($rightButton['route'], $rightButton['title'], $rightButton['params'], ['class' => 'btn btn-success small action w-60']) !!}
                @endif

                @if ($showStatus)
                    {!! Form::statusAlert('success') !!}                    
                @endif
            </div>
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
