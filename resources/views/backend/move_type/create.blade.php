@extends('backend.master')

@section('title')
    {{ __('string.move_types') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.add_a_move_type'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: open(['route' => 'admin.move_type.store']) !!}
            {!! Form::token() !!}
            {!! Form::inputGroup('name', __('string.name')) !!}
            {!! Form::selectGroup('area_id', __('string.area'), $areas) !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/move_type', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

