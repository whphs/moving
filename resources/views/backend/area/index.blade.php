@extends('backend.master')

@section('title')
    {{ __('string.areas') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.area_list'),
        'rightButton' => ['route' => 'admin.area.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        @component('components.table.action', [
            'columns' => [__('string.name'), __('string.country'), __('string.zip_code')],
            'rows' => $areas,
            'keys' => ['name', 'country', 'zip_code'],
            'route' => 'admin.area'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

