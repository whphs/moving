@if (session('status'))
    <div class="alert alert-{{$status}}" role="alert">
        {{ session('status') }} 
    </div>
@endif

    