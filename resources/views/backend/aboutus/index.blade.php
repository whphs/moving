@extends('backend.master')

@section('title')
    {{ __('string.about_us') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'admin.aboutus.update', 'method' => 'PUT']) !!}
                {!! Form::token() !!}
                <div class="card">
                    <div class="card-header">
                        <h3>
                            {{ __('string.about_us') }}
                            {!! Form::submit('Update', ['class' => 'btn btn-primary float-right']) !!}
                        </h3>
                        {!! Form::statusAlert('success') !!}
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            {!! Form::inputGroup('title', __('string.title'), $aboutus->title) !!}
                            {!! Form::inputGroup('introduction', __('string.introduction'), $aboutus->introduction, 'textarea') !!}
                            {!! Form::inputGroup('email', __('string.email'), $aboutus->email, 'email') !!}
                            {!! Form::inputGroup('phone', __('string.phone'), $aboutus->phone, 'number') !!}
                            {!! Form::inputGroup('address', __('string.address'), $aboutus->address) !!}
                            {!! Form::inputGroup('website', __('string.website'), $aboutus->website) !!}
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')

@endsection

