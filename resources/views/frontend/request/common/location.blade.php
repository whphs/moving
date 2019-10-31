@extends('frontend.app')

@section('content')
    <section>
        <div class="container" style="font-size: 16px;font-weight: bold;">
{{--            Search area --}}
            <div class="row search-area">
                <div class="col-3 d-flex select-area">
                    <span>Dandong</span>
                </div>
                <div class="col-9" style="z-index: 1;">
                    <div class="dropdown">
                        <input type="text" class="form-control" onkeyup="myFunction()"  id="searchAddr" placeholder="Enter moving area" style="border:unset;margin-bottom: 0px;">
                        <ul id="searchCon" class="search-address">
                            <li><a href="#">Yinhe Dajie </a></li>
                            <li><a href="#">GG</a></li>

                            <li><a href="#">HJ</a></li>
                            <li><a href="#">SY</a></li>

                            <li><a href="#">SS</a></li>
                            <li><a href="#">GJ</a></li>
                            <li><a href="#">KG</a></li>
                        </ul>
                    </div>
{{--                    <input type="text" class="form-control"  id="search-addr" placeholder="Enter moving area" style="border:unset">--}}
                </div>
            </div>
            <div class="row search-area">
                <div class="col-6 select-area">
                    <span><i class="fa fa-map-pin" style="margin-right: 3px;"></i>{{__('string.current_position')}}</span>
                </div>
                <div class="col-6">
                    <span><i class="fa fa-map-marker" style="margin-right: 3px;"></i>{{__('string.select_map')}}</span>
                </div>
            </div>
{{--            Select Item--}}
            <div class="row" style="position: relative;top:20px;">
                <div class="col-12">
                    <ul class="list-group list-group-flush" style="box-shadow: -1px 0px 58px 38px #3232320a;">
                        <li class="list-group-item select-item" id = "selectArea">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>Yinhe Dajie 16-2</p>
                        </li>
                        <li class="list-group-item select-item">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>Yinhe Dajie 16-2</p>
                        </li>
                        <li class="list-group-item select-item">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>Yinhe Dajie 16-2</p>
                        </li>
                        <li class="list-group-item select-item">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>Yinhe Dajie 16-2</p>
                        </li>
                        <li class="list-group-item select-item">
                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i>
                            <span>GG</span>
                            <p>Yinhe Dajie 16-2</p>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        let input, filter, ul, li, a, i, txtValue,con;
        function myFunction() {
            $('#searchCon').show();
            input = document.getElementById("searchAddr");
            filter = input.value.toUpperCase();
            ul = document.getElementById("searchCon");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        $('.search-address').on('click', 'li', function() {
            con = $(this)[0].firstChild.textContent;
            $('#searchAddr').val(con);
            $(".search-address").hide();
            window.location.href = "/select_floor/{{ $move_type }}/{{ $location }}/"+con;
        });
        $('#selectArea').click(function () {
           window.location.href = "/select_floor/{{ $move_type }}/{{ $location }}/GG";
        });
    </script>
@endsection
