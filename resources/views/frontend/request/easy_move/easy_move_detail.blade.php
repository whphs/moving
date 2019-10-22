@extends('frontend.app')

@section('content')
    <header>
      <div class="header-img">
          {!! Html::image('frontend/assets/img/icons/user.png') !!}
      </div>
      <div class = "header-img" style="position: relative;left: -4px;">
          {!! Html::image('frontend/assets/img/icons/history.png') !!}
      </div>
    </header>
    <main>
    <section class="south-contact-area" style ="padding-top:3em;" >
      <div class="container">
      <!-- select truck start -->
      <div class="row">
        <div class="col-12">
          <div class="content-sidebar">
            <div class="card" style="margin:10px 0">
              <div class="card-header">{{__('string.basic_service')}}</div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        {{__('string.select_model')}}
                    <p class ="detail" id="vehicleSelBtn" data-toggle = "modal" data-target = "#vehicleSelModal">{{$selectedVehicle->name}}</p>
                    <!-- setting hidden id -->
                     <input type="hidden"  id = "vehicleId" value="">
                    </li>
                    <li class="list-group-item" style="padding-top: 8px;padding-bottom: 0px;z-index: 0;">
                        {{__('string.option_service')}}
                    <label class="switch">
                      <input type="checkbox" class="primary">
                      <span class="slider round"></span>
                    </label>
                    </li>
                  </ul>
              </div>
          </div>
        </div>
      </div>

      <!-- select location start -->
      <div class="row">
        <div class="col-12">
          <div class="content-sidebar">
            <div class="card" style="margin:10px 0">
              <div class="card-header">{{__('string.moving_info')}}</div>
                <ul class="timeline">
                  <li class="current-location">
                    <span>{{__('string.moving_location')}}</span>
                  </li>
                  <li class="destination-location">
                    <span>{{__('string.moving_destination')}}</span>
                  </li>
                </ul>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  {!! Html::image("frontend/assets/img/icons/calendar.png",'calendar',['style' => 'width: 30px;height: 22px;']) !!}
                  {{__('string.moving_time')}}
                <p class="detail" id="myTimeBtn">
                {{__('string.set_time')}}</p>
                </li>
                </ul>
            </div>
          </div>
        </div>
      </div>

        <!-- Add big baggage -->
      <div class="row"  id = "addBaggage"  data-toggle = "modal" data-target = "#specialItemModal">
        <div class="col-12">
          <div class="content-sidebar">
            <div class="card" style="margin:10px 0">
              <div class="card-header">
                Big baggage(washer,refrigerator...)<span>aaaaa</span>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- order notes start -->
      <div class="row">
        <div class="col-12">
          <div class="card" style="margin:10px 0">
            <div class="card-header">{{__('string.order_note')}}
              <p class="detail" id="photoSelBtn" data-toggle = "modal" data-target = "#movingPhotoModal" style="font-weight: 100">{{__('string.upload_photo')}}</p>
            </div>
              <ul>
              <li style="z-index: 0;min-width: 287px;padding:10px;border-bottom: 1px solid rgba(0,0,0,.125);">
              <input type="radio" id="hOne" name="hOne" style="display: none;">
              <input type="radio" id="hTwo"  name = "hTwo" style="display: none;">
              <input type="checkbox" id="hSmall" name = "hSmall" style="display: none;">

              <button type="button" id = "one" class="btn south-btn follow">{{__('string.one')}}</button>
              <button type="button" id = "two" class="btn south-btn follow">{{__('string.two')}}</button>
              <button type="button" id = "small" class="btn south-btn follow">{{__('string.small_cart')}}</button>
              </li>
              <li style="z-index: 0;padding-left: 10px;padding-top: 3px;padding-bottom: 3px;">
                  <p style="display: inline-block;margin-bottom: 0px;margin-top: 4px;">{{__('string.contact_number')}}</p>
                  <input type="input" class="form-control" name="phoneNum" id = "phoneNum" placeholder="13394260131" >
              </li>
              </ul>
          </div>
        </div>
      </div>


      </div>
    </section>

    <!-- terms and policy -->
    <div class="container">
       <p style="font-size: 12px;margin-bottom: initial;">{{__('string.note_detail')}}</p>
      <div id="holder">
          <input type="checkbox" id="checkboxTerm" class="regular-checkbox" /><label for="checkboxTerm"></label>
          <span style="font-size: 12px;position: relative;bottom: 13px;">
           This is test example<a href="#" style="color: #947054;font-size: 12px;">{{__('string.note_link')}}</a></span>
      </div>
    </div>
    <div class="container" style="position: relative;top:20px;">
        <p>&nbsp</p>
    </div>
   <!-- footer start -->
   <div class="footer">
       <div class="container">
         <div class="row">
          <div class="col-4">
            <div class="easy-move-footer-price">
              <p>$25</p>
            </div>
          </div>
          <div class="col-8">
              <div class="easy-move-footer-price1">
{{--                  <a href = "/easy_move_detail/preview">{{__('string.preview')}}</a>--}}
                  {!! link_to('easy_move/preview', __('string.preview'), $attributes = [], $secure = null) !!}
                  <button type="button" class="btn south-btn resv-btn">{{__('string.reservation_btn')}}</button>
              </div>
          </div>
         </div>
       </div>
   </div>
</main>

<!-- Time Modal -->
<div id="timeModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <!-- Nav Start -->
            <div class="classynav">
                <ul style="padding: 3px;">
                    <li><span class = "time-setting" id = "setting">Setting</span></li>
                    <li style="float: right;"><span id = "close" class = "time-setting" >Exit</span></li>
                </ul>

            </div>
            <!-- Nav End -->
    </div>
    <div class="modal-body">
        <div class="container">
          <div class="input-group date">
              <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/YYYY" style="margin-top: 15%;">
          </div>
        </div>
    </div>
  </div>
</div>
{{--Time Modal End--}}
<!-- The EasyMove Detail Modal -->
 <div class="modal" id="vehicleSelModal" tabindex="-1" role="dialog">
      <div class="modal-content">
        <div class="modal-header">

              <ul id="vehiclesTab" class="nav">
                  @foreach($vehicles as $index => $vehicle)
                  <li id="li{{$index}}" class="nav-item active">
                      <a href="#vehicle{{$index}}"  class="nav-link active">{{$vehicle->name}}</a>
                      <input type="hidden"  id = "vehicleMId{{$index}}" value="{{$vehicle->id}}">
                      <input type="hidden"  id = "vehicleMName{{$index}}" value="{{$vehicle->name}}">
                      <input type="hidden"  id = "vCount" value="{{count($vehicles)}}">
                  </li>
                 @endforeach
                     <button type="button" class="close" data-dismiss="modal">&times;</button>

              </ul>

        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <div class="tab-content">
               @foreach($vehicles as $index => $vehicle)
                <div class="tab-pane fade" id="vehicle{{$index}}">
                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ul>
                    <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">

                          {!! Html::image('storage/'.$vehicle->photo_0,'front truck',['class'=>'easyMoveSlider']) !!}
                        </div>
                        <div class="carousel-item">

                          {!! Html::image('storage/'.$vehicle->photo_1,'middle truck',['class'=>'easyMoveSlider']) !!}
                        </div>
                        <div class="carousel-item">

                          {!! Html::image('storage/'.$vehicle->photo_2,'back truck',['class'=>'easyMoveSlider']) !!}
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
                     <!-- Truck description -->
                    <div class="row">
                      <div class="col-12 truck-des">
                        <h6>{{__('string.car_tips')}}</h6>
                        <p> {{$vehicle->description}}</p>
                        <div class="truck-des-content">
                          <p style= "color: #000000d9;">{{__('string.available_items')}} :</p>
                          <p>{{$vehicle->available_items}}</p>
                        </div>
                        <div class="truck-des-content">
                          <p style= "color: #000000d9; ">{{__('string.unavailable_items')}} : </p>
                          <p>{{$vehicle->unavailable_items}}</p>
                        </div>
                        <div class="truck-des-note">
                          <p>PS: {{__('string.ps_note')}}</p>
                        </div>
                      </div>
                    </div>
                </div>
                @endforeach
            </div>
      </div>
        <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" id = "selTruckBtn" class ="btn south-btn m-1" data-dismiss="modal">{{__('string.select_car')}}</button>
      </div>

      </div>
    </div>
 <!-- The EasyMove Detail Modal end -->
{{--The Moving Items and Photo Start --}}
    <div class="modal" id="movingPhotoModal" tabindex="-1" role="dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: unset;">
                <button type="button" class="close" data-dismiss="modal" style="font-size: 29px;margin-right: -3px;">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="padding: 1rem;">
                <div class="item-description">
                    <textarea id = "itemDescription" rows = "4" cols ="10" placeholder="Please enter moving item description."></textarea>
                    <div class="clear-description">
                        <span>200character</span>
                        <span style="float: right;">{{__('string.clear')}}</span>
                    </div>
                </div>
                <div class="history-description">
                    <p>This is test</p>
                    <p>This is test</p>
                    <p>This is test</p>
                </div>
                <div class="upload-photo">
                    <p style="font-size: 15px;font-weight: bold">Upload Photo</p>
                    <div class="upload-photo-image">
                        {!! Html::image('frontend/assets/img/icons/camera.png','take photo')!!}
                        <input type="file" id = "fileUpload" name = "fileUpload" style="display: none">
                        <p>Upload</p>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id = "photoSettingBtn" class ="btn south-btn m-1" data-dismiss="modal">Submit</button>
            </div>

        </div>
    </div>
{{--The Moving Items and Photo End --}}
{{--The Special Item Modal Start--}}
    <div class="modal" id="specialItemModal" tabindex="-1" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="big-item-title">Big Item</span>
                <button type="button" class="close" data-dismiss="modal" style="font-size: 29px;margin-right: -18px;">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="special-item">
                    <span>furniture:</span>
                    <span>45kg dkdkdkf fkdf fdfdfdk</span>
                </div>
                <div class="special-item">
                    <span>furniture:</span>
                    <span>45kg dkdkdkf fkdf fdfdfdk</span>
                </div>
                <div class="add-special-item">
                    <p>Add Item</p>
                    <div class="d-inline-flex">
                        {!! Html::image('frontend/assets/img/icons/minus.png','minus button',['class' => 'min-button']) !!}
                        <p id="qty" name="qty">1</p>
                        {!! Html::image('frontend/assets/img/icons/plus.png','minus button',['class' => 'plus-button']) !!}
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id = "specialItemBtn" class ="btn south-btn m-1" data-dismiss="modal">Submit</button>
            </div>

        </div>
    </div>
{{--The Special Item Modal End--}}

@endsection

@section('scripts')
    {!! Html::script('frontend/assets/js/custom-modal.js') !!}
    <script type="text/javascript">
      $(document).ready(function(){
        let selectedId = 0;
        $("#selTruckBtn").click(function(){
            let vehicleMId = $('#vehicleMId'+selectedId).val();
            let vehicleMName = $('#vehicleMName'+selectedId).val();
            $("#vehicleSelBtn").text(vehicleMName);
            $("#vehicleId").val(vehicleMId);
        });
        $('#vehicleSelBtn').click(function(e){

          let vCount = $("#vCount").val();
          $('.tab-pane').removeClass('show active');
          for(i = 0; i < vCount; i++)
          {
            if(e.target.innerText == $("#vehicleMName"+i).val())
            {
              $('#vehicle'+i).addClass('show active');
              selectedId = i;
            }

          }

        });
        $('.modal-header').on('click', 'li', function() {
          let index = $(this)[0].id.substring(2, 3);
          selectedId = index;

          $(this).parent().parent().parent().parent().find('.tab-pane').removeClass('show active');
          $(this).parent().parent().parent().parent().find('#vehicle' + index).addClass('show active');
        });
      });

    </script>
    <script type="text/javascript">
      $('#datepicker').datepicker('setDate', 'today');
      $("#addBaggage").hide();
      $(".primary").click(function() {
          if(this.checked) {
              $("#addBaggage").show();
          }
          else
          {
            $("#addBaggage").hide();
          }
      });

      $("#one").click(function(){
        if($("#hOne").is(":checked") == false)
        {
          $("#hOne").prop("checked",true);
          $("#hTwo").prop("checked",false);
          $("#one").css("background-color", "#000000");
          $("#two").css({"background-color": "#947054"});
        }

      });
      $("#two").click(function(){
        if($("#hTwo").is(":checked") == false)
        {
          $("#hTwo").prop("checked",true);
          $("#hOne").prop("checked",false);
          $("#one").css({"background-color": "#947054"});
          $("#two").css({"background-color": "#000000"});
        }
      });
      $("#small").click(function(){
        if($("#hSmall").is(":checked") == false)
        {
          $("#hSmall").prop("checked",true);
          $("#small").css({"background-color": "#000000"});
        }
        else
        {
          $("#hSmall").prop("checked",false);
          $("#small").css({"background-color": "#947054"});
        }

      })

    </script>

@endsection
