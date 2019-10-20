@extends('backend.master')

@section('title')
    {{ __('string.bonuses') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.bonus_list'),
        'rightButton' => ['route' => 'admin.bonus.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        @component('components.table.action', [
            'columns' => [__('string.title'), __('string.area'), __('string.price'), __('string.start_date'), __('string.end_date')],
            'rows' => $bonuses,
            'keys' => ['title', ['area', 'name'], 'price', 'start_date', 'end_date'],
            'route' => 'admin.bonus'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

