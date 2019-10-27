@extends('frontend.app')
@section('content')
    <section>
        {!! Html::image('frontend/assets/img/bg-img/feature5.jpg','map',['style'=>'height: 353px;']) !!}
        <div class="container" style="font-size: 15px;font-weight: bold;">
            <div class="row" style="border-bottom: 1px solid #e0e0e0">
                <div class="col-12">
                    <div class="select-area">
                        <p style = "padding-top: 8px;font-size: 18px;color: black;">Title</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-group list-group-flush" style="line-height: 3;font-size: 17px;">
                        <li class="list-group-item select-item" id = "selectArea" style="padding: 5px;">
                            <i class="fa fa-map-marker" style="margin-right: 3px;position: relative;top:15px;"></i>
                            <span>GG</span>
                            <p style="line-height: 0">dkeikfdfdfkjdkflsd</p>
                            <div id = "selectFloor" style="margin-top: 15px; " data-toggle="modal" data-target="#selectFloorModal">
                                <i class="fa fa-trello" style="margin-right: 3px;"></i>
                                <span style="color:#7d7d7d">HJ</span>
                                <i class="fa fa-angle-right" style="float: right;position: relative;top: 15px;"></i>
                                <span style="float: right;margin-right: 6px;margin-top: -1px;" id = "displayFloor"></span>

                            </div>
                            <div>
                                <i class="fa fa-building" style="margin-right: 3px;"></i>
                                <span style="color:#7d7d7d">HJ</span><input placeholder="12 floor" style="margin-left: 15px;border:unset;color: #7d7d7d">
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="select-area">
                        <button type="button" id = "specialItemBtn" class ="btn south-btn m-1"  style="bottom: -5px;width: 100%;height: 33px;">
                            Submit
                        </button>
                    </div>
                </div>
            </div>

        </div>
        {{--    Select Floor Modal Start--}}
        <div class="modal" id="selectFloorModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header" style="border:unset;" >
                    <div class="d-flex">
                        <p class="floor-title">Select Floor</p>
                        <button type="button" class="close" data-dismiss="modal" style="font-size: 29px;">&times;</button>
                    </div>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="min-height: 169px;">
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class ="btn south-btn btn-3 m-1 elevator-btn" id = "floor0" onclick="selectedFloor(0)">Use elevator</button>
                        </div>
                    </div>
                    <div class="row">
                        @for($i = 1; $i <= 9; $i++)
                            <div class="col-4">
                                <button class ="btn south-btn btn-3 m-1 floor-btn" id = "floor{{$i}}" onclick="selectedFloor({{$i}})">{{$i}}floor</button>
                            </div>
                        @endfor
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id = "selectFloorBtn" class ="btn south-btn m-1" data-dismiss="modal">Submit</button>

                </div>

            </div>
        </div>
        {{--    Select Floor Modal End--}}
    </section>
@endsection
@section('scripts')
    <script>
        let selectFloorIndex = null;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function selectedFloor(selBtnIndex){
            // $('#floor'+selectFloorIndex).css("background-color","#fff");
            // $('#floor'+selBtnIndex).css("background-color","#947054");
            selectFloorIndex = selBtnIndex;
        }
        $('#selectFloorBtn').click(function () {
            if (selectFloorIndex === 0) {
                $('#displayFloor').text("elevator");
            } else {
                $('#displayFloor').text(selectFloorIndex);
            }
        });
        function put_session(key,value)
        {
            $.ajax({
                type: 'POST',
                url: '/put_session',
                data: {key: key, value: value}
            });
        }

        $(document).ready(function(){
            $('#specialItemBtn').click(function () {
                put_session("where_to","31");
                put_session("floor_to",selectFloorIndex);
                window.location.href = "/easy_move/detail";
            });
        });


    </script>
@endsection
