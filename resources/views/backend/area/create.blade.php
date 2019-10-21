@extends('backend.layout')

@section('title')
    {{ __('string.areas') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.add_an_area'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: open(['route' => 'admin.area.store']) !!}
            {!! Form::token() !!}
            {!! Form::inputGroup('name', __('string.name')) !!}
            {!! Form::inputGroup('country', __('string.country')) !!}
            {!! Form::inputGroup('zip_code', __('string.zip_code')) !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/area', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

