@extends('app')

@section('title', 'Bonus List')

@section('content')
    <div class="container">
        <div class="input-group input-group-sm mt-30">
            <div class="input-group-control">
                <input type="text" class="form-control input-sm" placeholder="Click here to enter the exchange code">
            </div>
            <span class="input-group-btn btn-right">
                <button class="btn green-haze" type="button">Exchange</button>
            </span>
        </div>
        <hr>
        <span>You have a pull ticket that is about to expire.</span>
        <a style="float: right;">Instructions</a>
        <div class="mt-30">
            <table class="mb-20">
                <td style="text-align: center;">
                    <img src="assets/about.png" style="width: 50%;">
                    <p>Order reduction</p>
                </td>
                <td>
                    <p style="font-weight: bold;">Care-Free Moving - Workday</p>
                    <p>2019-10-10 ~ 2019-10-12</p>
                    <a>More datails</a>
                </td>
            </table>
            <table class="mb-20">
                <td style="text-align: center;">
                    <img src="assets/about.png" style="width: 50%;">
                    <p style="margin-bottom: 0px;">Order reduction</p>
                </td>
                <td>
                    <p style="font-weight: bold;">Care-Free Moving - Workday</p>
                    <p>2019-10-10 ~ 2019-10-12</p>
                    <a>More datails</a>
                </td>
            </table>
            <table class="mb-20">
                <td style="text-align: center;">
                    <img src="assets/about.png" style="width: 50%;">
                    <p style="margin-bottom: 0px;">Order reduction</p>
                </td>
                <td>
                    <p style="font-weight: bold;">Convenient Moving</p>
                    <p>2019-10-02 ~ 2019-10-10</p>
                    <a>More datails</a>
                </td>
            </table>
            <table class="mb-20">
                <td style="text-align: center;">
                    <img src="assets/about.png" style="width: 50%;">
                    <p style="margin-bottom: 0px;">Order reduction</p>
                </td>
                <td>
                    <p style="font-weight: bold;">Convenient Moving</p>
                    <p>2019-10-02 ~ 2019-10-10</p>
                    <a>More datails</a>
                </td>
            </table>
            <table class="mb-20">
                <td style="text-align: center;">
                    <img src="assets/about.png" style="width: 50%;">
                    <p style="margin-bottom: 0px;">Order reduction</p>
                </td>
                <td>
                    <p style="font-weight: bold;">Convenient Moving</p>
                    <p>2019-10-02 ~ 2019-10-10</p>
                    <a>More datails</a>
                </td>
            </table>
        </div>
    </div>
@endsection