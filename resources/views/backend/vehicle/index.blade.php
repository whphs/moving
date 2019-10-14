@extends('backend.master')

@section('title')
    {{ __('string.vehicles') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.vehicle_list'),
        'rightButton' => ['route' => 'admin.vehicle.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        @component('components.table.action', [
            'columns' => [__('string.name'), __('string.move_type'), __('string.area'), __('string.size')],
            'rows' => $vehicles,
            'keys' => ['name', ['move_type', 'name'], ['area', 'name'], 'size'],
            'route' => 'admin.vehicle'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

