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
        {!! Form:: open(['route' => 'admin.movetypes.store']) !!}
            {!! Form::token() !!}
            {!! Form::inputGroup('name', __('string.name')) !!}
            {!! Form::inputGroup('area', __('string.area')) !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/movetypes', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

