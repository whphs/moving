@extends('frontend.app')

@section('content')
    <section>
        <div class="container" style="font-size: 15px;font-weight: bold;">
{{--            Search area --}}
            <div class="row search-area">
                <div class="col-3 d-flex select-area">
                    <span>Dandong</span>
                </div>
                <div class="col-9 search-address" >
                    <input type="text" class="form-control"  id="search-addr" placeholder="Enter moving area" style="border:unset">
                </div>
            </div>
            <div class="row search-area">
                <div class="col-6 select-area">
                    <span><i class="fa fa-map-pin" style="margin-right: 3px;"></i>Current Position</span>
                </div>
                <div class="col-6">
                    <span><i class="fa fa-map-marker" style="margin-right: 3px;"></i>Select Map</span>
                </div>
            </div>
{{--            Select Item--}}
            <div class="row" style="position: relative;top:20px;">
                <div class="col-12">
                    <ul class="list-group list-group-flush" style="box-shadow: -1px 0px 58px 38px #3232320a;">
                        <li class="list-group-item select-item" id = "selectArea">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>dkeikfdfdfkjdkflsd</p>
                        </li>
                        <li class="list-group-item select-item">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>dkeikfdfdfkjdkflsd</p>
                        </li>
                        <li class="list-group-item select-item">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>dkeikfdfdfkjdkflsd</p>
                        </li>
                        <li class="list-group-item select-item">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>dkeikfdfdfkjdkflsd</p>
                        </li>
                        <li class="list-group-item select-item">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>dkeikfdfdfkjdkflsd</p>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $('#selectArea').click(function () {
           window.location.href = "/select_floor/{{ $move_type }}/{{ $location }}";
        });
    </script>
@endsection
