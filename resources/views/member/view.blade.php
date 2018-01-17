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
			Full Name:  {{$member->name}}<br>
			Date Of Birht : {{$member->dob}}<br>
			Marital Status : {{$member->marital_status}}<br>
			Home Address : {{$member->home_address}}<br>
			Home Number : {{$member->home_number}}<br>
			Mobile Number : {{$member->mobile}}
		</div>
	</div>
@endsection