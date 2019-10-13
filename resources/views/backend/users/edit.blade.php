@extends('backend.master')

@section('title')
    {{ __('string.assign_roles')}}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.assign_roles'),
        'rightButton' => null,
        'showStatus' => true,
    ])
        {!! Form:: model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}
            {!! Form::inputGroup('name', __('string.name'), $user->name) !!}
            {!! Form::selectGroup('role', __('string.role'), Config::get('constants.USER_ROLES'), $user->role) !!}
            {!! Form::submit(__('string.update'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/users', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection
