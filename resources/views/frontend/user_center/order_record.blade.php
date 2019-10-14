@extends('frontend.user_center.app')

@section('title', 'Order Record')

@section('content')
    <div class="container">
        <div class="tabbable-line" style="text-align: center;">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab_15_1" data-toggle="tab">
					Convenient Moving</a>
				</li>
				<li style="float: right;">
					<a href="#tab_15_2" data-toggle="tab">
					Care-Free Moving</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_15_1">
					<img class="mt-10" src="frontend/assets/image/document.png" style="width: 20%;">
					<P class="mt-10">No order yet</P>
					<button type="button" class="btn blue btn-sm mt-20">Go to order</button>
				</div>
				<div class="tab-pane" id="tab_15_2">
					<img class="mt-10" src="frontend/assets/image/document.png" style="width: 20%;">
					<P class="mt-10">No order yet</P>
					<button type="button" class="btn blue btn-sm mt-20">Go to order</button>
				</div>
			</div>
		</div>
    </div>
@endsection