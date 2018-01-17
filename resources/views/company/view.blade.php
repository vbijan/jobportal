@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class = col-lg-6>
				<h3>Brief About Company</h3>
					Company Name : {{$company->company_name}}<br>
					Company Location : {{$company->location}}<br>
					Company Type : {{$company->company_type}}<br>
					Employee Number : {{$company->employee_number}}<br>
					<b>Company Details</b> :<br>
					 {{$company->discription}}<br>
			</div>
			
		</div>
		
	</div>
@endsection