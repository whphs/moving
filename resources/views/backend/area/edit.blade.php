@extends('backend.master')

@section('title')
    {{ __('string.areas') }}
@endsection

@section('content')
    @component('components.normal.container', [
        'title' => __('string.edit_an_area'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: model($area, ['method' => 'PUT', 'route' => ['admin.area.update', $area->id]]) !!}
            {!! Form::inputGroup('name', __('string.name'), $area->name) !!}
            {!! Form::inputGroup('country', __('string.country'), $area->country) !!}
            {!! Form::inputGroup('zip_code', __('string.zip_code'), $area->zip_code) !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/area', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

