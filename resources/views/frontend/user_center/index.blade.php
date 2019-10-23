@extends('frontend.user_center.layout')

@section('title', 'User Center')

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

    <div class="mb-30 p-b-20 txt-align-c" style="background-color: white;">
        <div>
            <img class="w-20p m-t-30" src="frontend/assets/img/icons/profile_user.png" alt="">
        </div>
        <div class="m-t-50">
            <button type="button" class="btn btn-link" style="font-size: 20px; color: #212529;" onclick="goSign();">Sign In</button>
        </div>
    </div>
    <div class="m-t-5">
        <table>
            <tr onclick="goBookingList();">
                <td class="txt-align-c w-40"><i class="fa fa-file-text"></i></td>
                <td>Booking List</td>
                <td class="w-20"><i class="fa fa-angle-right"></i></td>
            </tr>
            <tr onclick="goBonusList();">
                <td class="txt-align-c"><i class="fa fa-th-list"></i></td>
                <td>Bonus List</td>
                <td><i class="fa fa-angle-right"></i></td>
            </tr>
            <tr onclick="goSetting();">
                <td class="txt-align-c"><i class="fa fa-cog"></i></td>
                <td>Setting</td>
                <td><i class="fa fa-angle-right"></i></td>
            </tr>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        function goSign() {
            window.location.href = "sign_in";
        }

        function goBookingList() {
            window.location.href = "bookings";
        }

        function goBonusList() {
            window.location.href = "bonuses";
        }

        function goSetting() {
            window.location.href = "setting";
        }
    </script>
@endsection
