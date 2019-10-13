@extends('backend.master')

@section('title')
    {{ __('string.bonuses') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.add_a_bonus'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: open(['route' => 'admin.bonuses.store']) !!}
            {!! Form::token() !!}
            {!! Form::inputGroup('title', __('string.title')) !!}
            {!! Form::selectGroup('movetype', __('string.move_type'), Config::get('constants.MOVE_TYPES')) !!}
            {!! Form::inputGroup('price', __('string.price')) !!}
            {!! Form::inputGroup('start_date', __('string.start_date'), null, 'date') !!}
            {!! Form::inputGroup('end_date', __('string.end_date'), null, 'date') !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/bonuses', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

