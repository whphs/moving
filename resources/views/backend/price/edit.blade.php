@extends('backend.master')

@section('title')
    {{ __('string.prices_standard') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')
    @component('components.normal.container', [
        'title' => __('string.edit_a_price'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: model($price, ['method' => 'PUT', 'route' => ['admin.price.update', $price->id]]) !!}
            {!! Form::inputGroup('distance_from', __('string.distance_from') . __('string.km'), $price->distance_from, 'number') !!}
            {!! Form::inputGroup('distance_to', __('string.distance_to') . __('string.km'), $price->distance_to, 'number') !!}
            {!! Form::inputGroup('amount', __('string.amount') . __('string.unit_km'), $price->amount, 'number') !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/area', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

