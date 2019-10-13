@extends('backend.master')

@section('title')
    {{ __('string.move_types') }}
@endsection

@section('content')
    @component('components.normal.container', [
        'title' => __('string.edit_a_move_type'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: model($movetype, ['method' => 'PUT', 'route' => ['admin.movetypes.update', $movetype->id]]) !!}
            {!! Form::inputGroup('name', __('string.name'), $movetype->name) !!}
            {!! Form::inputGroup('area', __('string.area'), $movetype->area) !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/movetypes', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

