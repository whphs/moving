@extends('frontend.user_center.app')

@section('title', 'Sign In')

@section('content')
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */.
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            -webkit-animation-name: fadeIn; /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        /* Modal Content */
        .modal-content {
            position: fixed;
            bottom: 0;
            background-color: #fefefe;
            width: 100%;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s
        }

        /* The Close Button */
        .close {
            color: black;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {bottom: -300px; opacity: 0} 
            to {bottom: 0; opacity: 1}
        }

        @keyframes slideIn {
            from {bottom: -300px; opacity: 0}
            to {bottom: 0; opacity: 1}
        }

        @-webkit-keyframes fadeIn {
            from {opacity: 0} 
            to {opacity: 1}
        }

        @keyframes fadeIn {
            from {opacity: 0} 
            to {opacity: 1}
        }
    </style>

    <div class="container" style="text-align: center;">
        <div class="mt-50">
            <img src="frontend/assets/image/logo.png" alt="">
        </div>
        <div class="mt-50">
            <div class="input-group has-success mb-30">
                <span class="input-group-addon">
                    <i class="fa fa-phone"></i>
                </span>
                <input type="text" class="form-control" placeholder="Please enter your cell phone number">
            </div>
            <button class="btn green btn-circle btn-block">SignIn</button>
        </div>
        <div class="mt-30">
            <a href="/user_agreement">Go to User Agreement</a>
        </div>
        <hr>
        <div>
            <p class="text-success">---------------One-click Signin---------------</p>
            <img class="img-circle" id="myBtn" src="frontend/assets/image/wechat.png">
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div style="margin-left: 5%; margin-right: 5%;">
                <span class="close">&times;</span>
                <h4 style="font-weight: bold;">requests to use</h4>
                <h1 class="mb-30">Your mobile number</h1>
                <div class="mb-30">
                    <span style="font-weight: bold;">13394260131</span><span style="margin-left: 10%;">Linked to Wechat</span><input type="checkbox" checked="" style="float: right;">
                </div>
                <a href="/sign_othermobile">Use Other Mobile Number</a>
                <div class="mt-30 mb-30" style="text-align: center;">
                    <button type="button" class="btn btn-default" style="width: 30%;">Reject</button>
                    <button type="button" class="btn btn-success" style="width: 30%; margin-left: 10%;">Allow</button>    
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection