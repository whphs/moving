@extends('backend.master')

@section('title')
    Edit User Role
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Role for Registered User</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="username" value="{{$user->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Give Role</label>
                                <select name="role">
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    <option value="Helper">Helper</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('admin.user') }}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
