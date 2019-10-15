@extends('backend.master')

@section('title')
    {{ __('string.about_us') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.about_us'),
        'rightButton' => null,
        'showStatus' => true,
    ])
        {!! Form::model($aboutUs, ['method' => 'PUT', 'route' => 'admin.about_us.update']) !!}
            {!! Form::inputGroup('title', __('string.title'), $aboutUs->title) !!}
            {!! Form::inputGroup('introduction', __('string.introduction'), $aboutUs->introduction, 'textarea') !!}
            {!! Form::inputGroup('email', __('string.email'), $aboutUs->email, 'email') !!}
            {!! Form::inputGroup('phone', __('string.phone'), $aboutUs->phone, 'number') !!}
            {!! Form::inputGroup('address', __('string.address'), $aboutUs->address) !!}
            {!! Form::inputGroup('website', __('string.website'), $aboutUs->website) !!}
            {!! Form::submit(__('string.update'), ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

