@extends('backend.layout')

@section('title')
    {{ __('string.assign_roles')}}
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
        {!! Form:: model($user, ['method' => 'PUT', 'route' => ['admin.user.update', $user->id]]) !!}
            {!! Form::inputGroup('name', __('string.name'), $user->name) !!}
            {!! Form::selectGroup('role_id', __('string.role'), Config::get('constants.USER_ROLES'), $user->role_id) !!}
            {!! Form::submit(__('string.update'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/user', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection
