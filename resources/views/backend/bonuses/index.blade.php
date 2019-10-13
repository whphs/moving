@extends('backend.master')

@section('title')
    {{ __('string.bonuses') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.bonus_list'),
        'rightButton' => ['route' => 'admin.bonuses.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        @component('components.table.action', [
            'columns' => [__('string.title'), __('string.move_type'), __('string.price'), __('string.start_date'), __('string.end_date')],
            'rows' => $bonuses,
            'keys' => ['title', 'movetype', 'price', 'start_date', 'end_date'],
            'route' => 'admin.bonuses'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

