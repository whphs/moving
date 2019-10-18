@extends('backend.master')

@section('title')
    {{ __('string.prices_standard') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.prices_standard'),
        'rightButton' => ['route' => 'admin.price.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        @component('components.table.action', [
            'columns' => [__('string.distance_from') . __('string.km'), __('string.distance_to') . __('string.km'), __('string.amount') . __('string.unit_km')],
            'rows' => $prices,
            'keys' => ['distance_from', 'distance_to', 'amount'],
            'route' => 'admin.price'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

