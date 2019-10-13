@extends('backend.master')

@section('title')
    {{ __('string.vehicles') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.vehicle_list'),
        'rightButton' => ['route' => 'admin.vehicles.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        @component('components.table.action', [
            'columns' => [__('string.name'), __('string.move_type'), __('string.size'), __('string.load_weight'), __('string.volume'), __('string.description')],
            'rows' => $vehicles,
            'keys' => ['name', 'movetype', 'size', 'load_weight', 'volume', 'description'],
            'route' => 'admin.vehicles'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

