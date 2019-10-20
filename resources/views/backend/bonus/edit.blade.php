@extends('backend.master')

@section('title')
    {{ __('string.bonuses') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.edit_a_bonus'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: model($bonus, ['method' => 'PUT', 'route' => ['admin.bonus.update', $bonus->id]]) !!}
            {!! Form::inputGroup('title', __('string.title'), $bonus->title) !!}
            {!! Form::selectGroup('area_id', __('string.area'), $areas, $bonus->area_id) !!}
            {!! Form::inputGroup('price', __('string.price'), $bonus->price) !!}
            {!! Form::inputGroup('start_date', __('string.start_date'), $bonus->start_date, 'date') !!}
            {!! Form::inputGroup('end_date', __('string.end_date'), $bonus->end_date, 'date') !!}
            {!! Form::inputGroup('description', __('string.description'), $bonus->description) !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/bonus', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}
    @endcomponent

@endsection

@section('scripts')

@endsection

