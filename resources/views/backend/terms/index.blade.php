@extends('backend.master')

@section('title')
    {{ __('string.terms_conditions') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.terms_conditions'),
        'rightButton' => null,
        'showStatus' => true,
    ])
        {!! Form::model($terms, ['method' => 'PUT', 'route' => 'admin.terms.update']) !!}
            {!! Form::inputGroup('content', __('string.content'), $terms->content, 'textarea') !!}
            {!! Form::submit(__('string.update'), ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

    @endcomponent

@endsection

@section('scripts')
    {!! Html::script('//cdn.tinymce.com/4/tinymce.min.js') !!}
    <script>
        tinymce.init({
            selector: 'textarea'
        })
    </script>
@endsection

