@extends('backend.layout')

@section('title')
    {{ __('string.move_types') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.move_type_list'),
        'rightButton' => ['route' => 'admin.move_type.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
    {{-- {{ $moveTypes[0]['area']['name'] }} --}}
        @component('components.table.action', [
            'columns' => [__('string.name'), __('string.area')],
            'rows' => $moveTypes,
            'keys' => ['name', ['area', 'name']],
            'route' => 'admin.move_type'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

