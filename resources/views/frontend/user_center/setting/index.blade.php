@extends('frontend.user_center.layout')

@section('title', 'Set Up')

@section('content')
    <style>
        table {
            width: 100%;
            background-color: white;
        }
        tr {
            height: 50px;
            border-bottom: 2px solid #eee;
        }
        tr:hover {
            background-color: #ccc;
        }
    </style>

    <div class="m-t-5">
        <table>
            <tr onclick="goAgreement();">
                <td class="p-l-10">{{__('string.user_agreement')}}</td>
                <td class="w-20"><i class="fa fa-angle-right"></i></td>
            </tr>
            <tr onclick="goStandard();">
                <td class="p-l-10">{{__('string.charging_standard')}}</td>
                <td><i class="fa fa-angle-right"></i></td>
            </tr>
            <tr onclick="goAbout();">
                <td class="p-l-10">{{__('string.about_us')}}</td>
                <td><i class="fa fa-angle-right"></i></td>
            </tr>
        </table>
    </div>
    <div class="txt-align-c m-t-10">
        <a href="/" class="btn btn-primary btn-sm" style="position: center;">{{__('string.sign_out')}}&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
    </div>
@endsection

@section('scripts')
    <script>
        function goAgreement() {
            window.location.href = '/agreement';
        }

        function goStandard() {
            window.location.href = '/standards';
        }

        function goAbout() {
            window.location.href = '/about_us';
        }
    </script>
@endsection
