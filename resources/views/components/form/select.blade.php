<div class="form-group">
    {!! Form::label($name, $title) !!}
    {!! Form::select($name, $list, $selected, array_merge(['class' => 'form-control'], $attributes)) !!}
</div>