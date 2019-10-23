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
            color: white;
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
            <img src="frontend/assets/img/icons/logo.png" alt="">
        </div>
        <div class="mt-50">
            <button class="btn btn-circle btn-block" id="myBtn" style="background-color: #1aad19;"><img src="frontend/assets/img/icons/wechat.png"><span style="color: white;">Wechat Authorized SignIn</span></button>
            <a href="sign_in/phone" class="btn green btn-circle btn-block" style="margin-top: 30px;">Mobile phone number SignIn</a>
        </div>
        <div class="mt-50">
            <a href="/agreement">Go to User Agreement</a>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div style="margin-left: 5%; margin-right: 5%;">
                <span class="close">&times;</span>
                <h4 style="font-weight: bold;">requests to use</h4>
                <h2>Your mobile number</h2>
                <hr>
                <span style="font-weight: bold;">13394260131</span><span style="margin-left: 10%;">Linked to Wechat</span><input type="checkbox" checked="" style="float: right;">
                <hr>
                <a href="/sign_in/other">Use Other Mobile Number</a>
                <div class="mt-30 mb-30" style="text-align: center;">
                    <button type="button" class="btn btn-default" style="width: 30%; color: green;">Reject</button>
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
