@extends('backend.master')

@section('title')
    {{ __('string.bonuses') }}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        {{ __('string.add_a_bonus') }}
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        {!! Form:: open(['route' => 'admin.bonuses.store']) !!}
                            {!! Form::token() !!}
                            {!! Form::inputGroup('title', 'Title') !!}
                            {!! Form::selectGroup('movetype', 'Move Type', Config::get('constants.MOVE_TYPES')) !!}
                            {!! Form::inputGroup('price', 'Price') !!}
                            {!! Form::inputGroup('start_date', 'Start Date', null, 'date') !!}
                            {!! Form::inputGroup('end_date', 'End Date', null, 'date') !!}
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        {!! Form:: close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection

