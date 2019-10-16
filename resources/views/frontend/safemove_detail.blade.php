@extends('frontend.app')

@section('content')
  <section class="south-contact-area">
        <div class="container">
            <div class="row">
               <!-- Select location -->
                <div class="col-12 col-lg-6">                    
                    <div class="content-sidebar">
                      <div class="card" style="margin:10px 0">
                          <div class="card-header">Moving information</div>   
                            <ul class="timeline" style="font-size: 14px;">       
                              <li class="current-location">
                                <span>Where do you from moving</span>                          
                              </li>
                              <li class="destination-location">
                                <span>Where do you move</span>                          
                              </li>
                            </ul>   
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="font-size: 14px;"><img src="frontend/assets/south/img/icons/garage.png" />
                                Moving time                        
                            <button type="submit" class="btn btn-link btn-sm watch" id="myTimeBtn" style="font-size: 14px;">
                            Please select a time</button>
                            </li> 
                            </ul>         
                        </div> 
                    </div>
                </div>
                <!-- Upload baggage photo  -->
                <div class="col-12 col-lg-6">                    
                    <div class="content-sidebar">
                      <div class="card" style="margin:10px 0">
                          <div class="card-header">Order remark</div>
                            <input type="input" class="form-control" name="oderNote" id = "orderNote" placeholder="Enter notes(e.g moving item type)" >
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="font-size: 14px;">Contact Number
                              <input type="input" class="form-control" name="phoneNum" id = "phoneNum" placeholder="phone-number" >              
                            </li> 
                            </ul>                                        
                      </div> 
                    </div>
                </div>
            </div>

            <!-- Coupon -->
            <div class="row">
              <div class="col-12">
                <div class="content-sidebar">
                  <div class="card" style="margin:10px 0">
                    <div class="card-header">Coupon
                      <button type="submit" class="btn btn-link btn-sm watch">80yuan off ></button>
                    </div>                                                              
                  </div> 
                </div>
              </div>
            </div>
            <!-- Note description -->
            <div class="row">                
                <div class="col-12">
                    <p style="font-size: 12px;">after confirming the order, customer service will call yu for details as soon as possible.</p>
                </div>
            </div>           
          
        </div>
    </section>

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
    <script type="text/javascript">
      $('#datepicker').datepicker();
    </script>
@endsection