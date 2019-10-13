@extends('backend.master')

@section('title')
    Move Types
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Add a Move Type
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        {!! Form:: open(['route' => 'admin.movetypes.store']) !!}
                            {!! Form::token() !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name here ...']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('area', 'Area') !!}
                                {!! Form::text('area', '', ['class' => 'form-control', 'placeholder' => 'Area here ...']) !!}
                            </div>
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

