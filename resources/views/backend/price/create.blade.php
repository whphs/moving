@extends('backend.master')

@section('title')
    {{ __('string.prices_standard') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.add_a_price'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: open(['route' => 'admin.price.store']) !!}
            {!! Form::token() !!}
            {!! Form::inputGroup('distance_from', __('string.distance_from') . __('string.km'), null, 'number') !!}
            {!! Form::inputGroup('distance_to', __('string.distance_to') . __('string.km'), null, 'number') !!}
            {!! Form::inputGroup('amount', __('string.amount') . __('string.unit_km'), null, 'number') !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/price', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

