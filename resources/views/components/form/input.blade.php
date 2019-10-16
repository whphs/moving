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
        @default
            {!! Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) !!}
            
    @endswitch
</div>
    