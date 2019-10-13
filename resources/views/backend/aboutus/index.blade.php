@extends('backend.master')

@section('title')
    About Us
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.aboutus.update') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Edit About Us
                            <button type="submit" class="btn btn-primary float-right" style="font-size: 14px; margin: 0">Update</button>
                        </h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{session('status')}}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title here ..." value="{{$aboutus->title}}">
                            </div>
                            <div class="form-group">
                                <label for="introduction">Introduction</label>
                                <textarea class="form-control" id="introduction" name="introduction">{{$aboutus->introduction}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email here ..." value="{{$aboutus->email}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone here ..." value="{{$aboutus->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address here ..." value="{{$aboutus->address}}">
                            </div>
                            <div class="form-group">
                                <label for="Website">Website</label>
                                <input type="text" class="form-control" id="website" name="website" placeholder="Website address here ..." value="{{$aboutus->website}}">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

