@extends('layouts.master')

@section('content')
@if(Auth::check())
	<?php
		

		if(Auth::user()->role == '2'):?>
			@include('layouts.sidebarjob')

		<?php elseif(Auth::user()->role=='1'): ?>
			@include('layouts.sidebaremployer')
		<?php endif;
	?>

@endif
	<div class="container">
		<div class="row">
			Company Name: {{$member->company_name}}<br>
			Company Address: {{$member->company_address}}<br>
			Company Category : {{App\Category::find($member->category_id)->title}}<br>
			Company Ownership : {{$member->ownership}}<br>
			Company Employee type : {{$member->employee_type}}<br>
			Company Contact Name : {{$member->name}}<br>
			Mobile Number : {{$member->mobile}}<br>
			<img src="{{URL::asset('logos/')}}/{{$member->logo}}">
		</div>
	</div>
@endsection