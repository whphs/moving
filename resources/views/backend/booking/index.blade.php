@extends('backend.master')

@section('title')
    {{ __('string.bookings') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="title">{{ __('string.booking_list') }}</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="mv-table">
                            <thead class="text-primary">
                            <tr>
                                <th>{{ __('string.no')}}</th>
                                <th>{{ __('string.move_type')}}</th>
                                <th>{{ __('string.from')}}</th>
                                <th>{{ __('string.to')}}</th>
                                <th>{{ __('string.price')}}</th>
                                <th>{{ __('string.user')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bookings as $index => $booking)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $booking->vehicle_id ? __('string.easy_move') : __('string.safe_move')}}</td>
                                    <td>{{ $booking->where_from }}</td>
                                    <td>{{ $booking->where_to }}</td>
                                    <td>{{ $booking->price }}</td>
                                    <td>{{ $booking->user_id }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

@endsection

