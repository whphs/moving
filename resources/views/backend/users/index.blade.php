@extends('backend.master')

@section('title')
    {{ __('string.user_roles') }}
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
            'keys' => ['name', 'phone', 'email', 'role'],
            'route' => 'admin.users'
        ])
        @endcomponent

    @endcomponent

@endsection

@section('scripts')

@endsection

