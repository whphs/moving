
@section('floor')
    <section>
        {!! Html::image('frontend/assets/img/bg-img/feature5.jpg','map',['style'=>'height: 385px;']) !!}
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
                            <div style="margin-top: 15px;">
                                <i class="fa fa-trello" style="margin-right: 3px;"></i>
                                <span style="color:#7d7d7d">GG</span>
{{--                                <i class="fa fa-angle-right" style="float: right;position: relative;top: 15px;"></i>--}}
                                <input placeholder="12 floor" style="margin-left: 15px;border:unset;color: #7d7d7d;">
                            </div>
                            <div>
                                <i class="fa fa-building" style="margin-right: 3px;"></i>
                                <span style="color:#7d7d7d">GG</span><input placeholder="12 floor" style="margin-left: 15px;border:unset;color: #7d7d7d">
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="select-area">
                        <button type="button" id = "specialItemBtn" class ="btn south-btn m-1" data-dismiss="modal" style="bottom: -5px;width: 100%;height: 33px;">
                            Submit
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
@show

