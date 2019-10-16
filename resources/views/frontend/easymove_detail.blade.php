@extends('frontend.app')

@section('content')
<body>       
    <header>
      <div style="background-color: #ffffff;width: 45px;height: 45px;text-align: center;display: inline-block;">
          <img src="frontend/assets/south/img/icons/phone-call.png" alt="" style="padding: 16px 0;max-width: 15px;">
      </div>
      <div style="background-color: #ffffff;width: 45px;height: 45px;text-align: center;display: inline-block;margin-left: -4px">
          <img src="frontend/assets/south/img/icons/phone-call.png" alt="" style="padding: 16px 0;max-width: 15px;">
      </div>
    </header>
    <main>
    <section class="south-contact-area">
      <div class="container">
      <!-- select truck start -->
      <div class="row">  
        <div class="col-12">
          <div class="content-sidebar">
            <div class="card" style="margin:10px 0">
              <div class="card-header">基础服务</div>            
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        已选车型                        
                    <button type="submit" class="btn btn-link btn-sm detail" id="myBtn">
                    小面包车》</button>
                    </li>
                    <li class="list-group-item" style="padding-top: 8px;padding-bottom: 0px;z-index: 0;">
                      需要搬运服务              
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
              <div class="card-header">搬家信息</div>   
                <ul class="timeline">       
                  <li class="current-location">
                    <span>您从哪里搬出</span>                          
                  </li>
                  <li class="destination-location">
                    <span>您搬到哪里去</span>                          
                  </li>
                </ul>   
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><img src="frontend/assets/south/img/icons/garage.png" />
                    搬家时间                        
                <button type="submit" class="btn btn-link btn-sm watch" id="myTimeBtn">
                请选择时间》</button>
                </li> 
                </ul>         
            </div> 
          </div>
        </div>
      </div>

        <!-- Add big baggage -->        
      <div class="row"  id = "addBaggage">        
        <div class="col-12">
          <div class="content-sidebar">
            <div class="card" style="margin:10px 0">
              <div class="card-header" style="font-size: 14px;">
                Big baggage(washer,refrigerator...)
                <p style="display: inline-block;">aaa</p>
              </div>

            </div>
          </div>
        </div>
      </div>
        
       <!-- order notes start -->      
      <div class="row">  
        <div class="col-12">
          <div class="card" style="margin:10px 0">
            <div class="card-header">订单备注 
              <button type="submit" class="btn btn-link btn-sm watch">如搬家物品及照片></button>
            </div>              
              <ul class="list-group list-group-flush" >
              <li class="list-group-item" style="z-index: 0;min-width: 287px;">
              <button type="button" class="btn south-btn follow">一人跟车</button>             
              <button type="button" class="btn south-btn follow">两人跟车</button>             
              <button type="button" class="btn south-btn follow">小推车</button>                           
              </li>
              <li class="list-group-item" style="z-index: 0;">
                  <p style="display: inline-block;margin-bottom: 0px;margin-top: 4px;">联系电话</p>              
                  <input type="input" class="form-control" name="phoneNum" id = "phoneNum" placeholder="phone-number" >              
              </li>  
              </ul>         
          </div> 
        </div>
        </div>
      

      </div>
    </section>

    <!-- terms and policy -->
    <div class="container">
       <p style="font-size: 12px;margin-bottom: initial;">若产生高速费、停车费,请用户额外支付</p>   
       <input type="checkbox" name="" style="margin-right: 5px;" /><span style="font-size: 12px;">fsjfjsj<a href="#" style="color: #947054">kkkkkd</a></span>
    </div>
    <div class="container" style="position: relative;top:20px;">     
      <p>&nbsp</p>     
    </div>
   <!-- footer start -->
   <div class="footer">
       <div class="container">
         <div class="row">
          <div class="col-8" style="padding-right: 15px;padding-left: 15px;">
            <div>
              <p style="display: inline-block;font-size: 20px;margin-bottom: 0px;color:#ef6774;line-height: normal">$25</p><span style="text-decoration: line-through;">$30</span>
            </div>            
            <p style="display: inline-block;">aaaaaa$5</p>
            <a href = "#" style="float: right;position: relative;top:-10px;left: 25px;color:#947054 ">preview</a>
          </div>
          <div class="col-4">
            <button type="button" class="btn south-btn" style="margin-top: 12px;min-width: 100px;min-height: 35px;">Submit</button> 
          </div>           
         </div>
       </div>
   </div>

<!-- The Modal_1 -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">      
        
            <!-- Nav Start -->
            <div class="classynav">
                <ul>                    
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Properties</a></li>
                    <li><a href="#">Blog</a></li>                               
                    <li><a href="#">Contact</a></li>                    
                </ul>
                <span class="close" style="padding: unset;margin-top: -28px; margin-right: auto;">&times;</span>
            </div>
            <!-- Nav End -->                         
    </div>

    <div class="modal-body">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ul>
      
    <!-- The slideshow -->
      <div class="carousel-inner" style="min-width: 310px;max-width:768px;height: 100px;">
        <div class="carousel-item active">
          <img src="frontend/assets/south/img/bg-img/about.jpg" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="frontend/assets/south/img/bg-img/cta.jpg" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="frontend/assets/south/img/bg-img/editor.jpg" alt="New York" width="1100" height="500">
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
    <!-- Truck descrition -->
    <div class="row">
      <div class="col-12">
        <h6 style="font-weight: bold;color: #000000d9;line-height: 2; ">用车提示</h6>
        <p style="background-color: #dee2e6a1;font-size: 12px; ">适合单人搬家,无大型家电家具人群</p>
        <div>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; color: #000000d9;">可装载物品 :</p>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; ">小型洗衣机或空调等</p>  
        </div>
        <div>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block;color: #000000d9; ">不可装载物品 : </p> 
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; ">超过1.5米床垫以及双门以上家电</p>
        </div>   
        <div>
          <p style= "font-size: 12px;font-weight: bold; ">PS: 照片、尺寸仅供参考,以实际接单车为准</p>
        </div>     
      </div>      
    </div>    
  </div>

    <div class="modal-footer">
      <button type = "submit" class="btn south-btn m-1">立即下单</button>
    </div>

</div>
</div>
<!-- Modal content end -->

<div id="timeModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header"> 
      <!-- Nav Start -->
            <div class="classynav">
                <ul>                    
                    <li><a href="#" style="font-size: 16px;">setting</a></li>                                    
                </ul>
                <span class="close" style="padding: unset;margin-top: -28px; margin-right: auto;font-size: 16px;">Exit</span>
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

</main>

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    {!! Html::script('frontend/assets/south/js/jquery/jquery-2.2.4.min.js') !!}      
    <!-- Bootstrap js -->
    {!! Html::script('frontend/assets/south/js/bootstrap.min.js') !!}    
    {!! Html::script('frontend/assets/south/js/bootstrap-datetimepicker.min.js') !!}
    <!-- Plugins js -->
    {!! Html::script('frontend/assets/south/js/plugins.js') !!}  
    <!-- Custom js -->
    {!! Html::script('frontend/assets/south/js/custom-modal.js') !!} 

    <script type="text/javascript">
      $('#datepicker').datepicker();
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

    </script>
@endsection