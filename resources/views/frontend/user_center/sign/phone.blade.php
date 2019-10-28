@extends('frontend.user_center.layout')

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

    <div class="txt-align-c">
        <div class="h-200" style="background-color: white;">
            <img style="margin-top: 60px;" src="/frontend/assets/img/icons/logo.png" alt="">
        </div>
        <div class="container m-t-5 p-t-30" style="background-color: white;">
            <input type="text" class="form-control" placeholder="Please enter your cell phone number">
            <button class="btn green btn-circle btn-block m-t-20">SignIn</button>
            <p class="m-t-20 p-b-30" style="color: #f16622" onclick="goAgreement();">Go to User Agreement</p>
            <div class="p-b-30">
                <p class="text-success">---------------One-click Signin---------------</p>
                <img class="rounded-circle" id="myBtn" src="/frontend/assets/img/icons/wechat.png">
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="container">
                <span class="close">&times;</span>
                <h5 class="m-t-10">requests to use</h5>
                <h3 style="font-weight: bold;">Your mobile number</h3>
                <hr>
                <table style="width: 100%;">
                    <tr>
                        <td><span style="font-weight: bold;">13394260131</span></td>
                        <td>Linked to Wechat</td>
                        <td><input type="checkbox" checked="" style="float: right;"></td>
                    </tr>
                </table>
                <hr>
                <a href="/sign/other">Use Other Mobile Number</a>
                <div class="m-t-30 m-b-30" style="text-align: center;">
                    <button type="button" class="btn btn-default" style="width: 30%; color: green;">Reject</button>
                    <button type="button" class="btn btn-success" style="width: 30%; margin-left: 10%;">Allow</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function goAgreement() {
            window.location.href = "/agreement";
        }

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
