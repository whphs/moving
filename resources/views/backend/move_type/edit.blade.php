@extends('backend.layout')

@section('title')
    {{ __('string.move_types') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')
    @component('components.normal.container', [
        'title' => __('string.edit_a_move_type'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: model($moveType, ['method' => 'PUT', 'route' => ['admin.move_type.update', $moveType->id]]) !!}
            {!! Form::inputGroup('name', __('string.name'), $moveType->name) !!}
            {!! Form::selectGroup('area_id', __('string.area'), $areas, $moveType->area_id) !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/move_type', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

