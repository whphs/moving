@extends('backend.layout')

@section('title')
    {{ __('string.bonuses') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.add_a_bonus'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: open(['route' => 'admin.bonus.store']) !!}
            {!! Form::token() !!}
            {!! Form::inputGroup('title', __('string.title')) !!}
            {!! Form::selectGroup('area_id', __('string.area'), $areas) !!}
            {!! Form::inputGroup('price', __('string.price')) !!}
            {!! Form::inputGroup('start_date', __('string.start_date'), null, 'date') !!}
            {!! Form::inputGroup('end_date', __('string.end_date'), null, 'date') !!}
            {!! Form::inputGroup('description', __('string.description')) !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/bonus', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

