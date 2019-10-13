@extends('backend.master')

@section('title')
    Bonuses
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Bonus List
                        <a href="{{ route('admin.bonuses.create') }}" class="btn btn-success float-right" style="font-size: 14px; margin: 0">Add</a>
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
                                <th>Title</th>
                                <th>Move Type</th>
                                <th>Price</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($bonuses as $bonus)
                                <tr>
                                    <td>{{$bonus->title}}</td>
                                    <td>{{$bonus->movetype}}</td>
                                    <td>{{$bonus->price}}</td>
                                    <td>{{$bonus->start_date}}</td>
                                    <td>{{$bonus->end_date}}</td>
                                    <td>
                                        <a href="{{ route('admin.bonuses.edit', $bonus->id) }}" class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.bonuses.destroy', ['bonus' => $bonus->id]) }}" method="POST">
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

