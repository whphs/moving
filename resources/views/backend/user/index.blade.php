@extends('backend.layout')

@section('title')
    {{ __('string.user_roles') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.assign_roles'),
        'rightButton' => null,
        'showStatus' => true,
    ])
        @component('components.table.action', [
            'columns' => [__('string.name'), __('string.phone'), __('string.email'), __('string.role')],
            'rows' => $users,
            'keys' => ['name', 'phone', 'email', 'role_id'],
            'route' => 'admin.user'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

