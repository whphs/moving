@extends('backend.master')

@section('title')
    {{ __('string.move_types') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.move_type_list'),
        'rightButton' => ['route' => 'admin.movetypes.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        @component('components.table.action', [
            'columns' => [__('string.name'), __('string.area')],
            'rows' => $movetypes,
            'keys' => ['name', 'area'],
            'route' => 'admin.movetypes'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

