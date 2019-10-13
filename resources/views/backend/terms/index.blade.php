@extends('backend.master')

@section('title')
    Terms and Conditions
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.terms.update') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Edit Terms and Conditions
                            <button type="submit" class="btn btn-primary float-right" style="font-size: 14px; margin: 0">Update</button>
                        </h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{session('status')}}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" name="content">{{ $terms->content }}</textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        })
    </script>
@endsection


