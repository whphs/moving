<div class="form-group">
    {!! Form::label($name, $title) !!}
    @switch($type)
        @case('textarea')
            {!! Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
            @break
        @case('number')
            {!! Form::number($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
            @break
        @case('email')
            {!! Form::email($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
            @break
        @case('password')
            {!! Form::password($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
            @break
        @case('date')
            {!! Form::date($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
            @break
        @case('file')
            {!! Form::file($name, array_merge(['class' => 'form-control-file', 'style' => 'opacity: 1;position:inherit'], $attributes)) !!}
            @break
        @case('photo')
            <div class="d-inline-flex">
                <div class="add-photo">
                    <input class="thumb-file-input" type='file' style="display: none" />
                    {!! Html::image('backend/assets/img/camera.png', null, ['class' => 'thumb-image'] ) !!}
                    <a class="thumb-remove"><i class="fa fa-times-circle"></i></a>
                </div>
            </div>
            @break
        @default
            {!! Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}

    @endswitch
</div>
