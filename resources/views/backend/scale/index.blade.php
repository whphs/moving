@extends('backend.master')

@section('title')
    {{ __('string.scales') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.scale_list'),
        'rightButton' => ['route' => 'admin.scale.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        <div class="table-responsive">
            <table class="mv-table">
                <thead class="text-primary">
                    <tr>
                        <th>{{ __('string.no') }}</th>
                        <th>{{ __('string.name') }}</th>
                        <th>{{ __('string.vehicle') }}</th>
                        <th>{{ __('string.helpers') }}</th>
                        <th>{{ __('string.init_price') }}</th>
                        <th>{{ __('string.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($scales as $index => $scale)
                        <tr>
                            <td class="w-40">{{ $index + 1 }}</td>
                            <td>{{ $scale->name }}</td>
                            <td>{!! $scale->vehicle_description !!}</td>
                            <td>{!! $scale->helper_description !!}</td>
                            <td>{!! $scale->init_price !!}</td>
                            <td class="w-150">
                                {!! Form::open(['route' => ['admin.scale.destroy', $scale->id], 'method' => 'DELETE']) !!}
                                    {!! Form::token() !!}
                                    {!! link_to_route('admin.scale.edit', __('string.edit'), $scale->id, ['class' => 'btn btn-info small w-60']) !!}
                                    {!! Form::submit(__('string.delete'), ['class' => 'btn btn-danger small w-60']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endcomponent

@endsection

@section('scripts')

@endsection

