@extends('backend.master')

@section('title')
    Vehicles List
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Vehicle List
                        <a href="{{ route('admin.vehicles.create') }}" class="btn btn-success float-right" style="font-size: 14px; margin: 0">Add</a>
                    </h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

@endsection

