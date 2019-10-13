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
        {!! Form::model($aboutus, ['method' => 'PUT', 'route' => 'admin.aboutus.update']) !!}
            {!! Form::inputGroup('title', __('string.title'), $aboutus->title) !!}
            {!! Form::inputGroup('introduction', __('string.introduction'), $aboutus->introduction, 'textarea') !!}
            {!! Form::inputGroup('email', __('string.email'), $aboutus->email, 'email') !!}
            {!! Form::inputGroup('phone', __('string.phone'), $aboutus->phone, 'number') !!}
            {!! Form::inputGroup('address', __('string.address'), $aboutus->address) !!}
            {!! Form::inputGroup('website', __('string.website'), $aboutus->website) !!}
            {!! Form::submit(__('string.update'), ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

