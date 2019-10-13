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
                        Move Type List
                        <a href="{{ route('admin.movetypes.create') }}" class="btn btn-success float-right" style="font-size: 14px; margin: 0">Add</a>
                    </h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th>Name</th>
                                <th>Area</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($movetypes as $type)
                                <tr>
                                    <td>{{$type->name}}</td>
                                    <td>{{$type->area}}</td>
                                    <td>
                                        <a href="{{ route('admin.movetypes.edit', $type->id) }}" class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.movetypes.destroy', $type->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
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

