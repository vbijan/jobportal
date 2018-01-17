@extends('layouts.master')

@section('content')
	<div class="container">
		<div class=row>
				<form method="post" action="/employer_register" enctype = 'multipart/form-data'>
					{{ csrf_field() }}
					<center><h3>Login Details Employer Signup</h3></center>
					<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="company_name">Company Name:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="company_name" name="company_name">
					    </div>
			 		</div>

			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="email">Email:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="email" name="email">
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="email">Re-type Email:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="re_email" name="re_email">
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="email">Password:</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="password" name="password">
					    </div>
			 		</div>

			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="email">Re-Password:</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="re_password" name="re_password">
					    </div>
			 		</div>
			 		<div class="col-lg-12">
			 			<center><h3>Other Company Details</h3></center>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="company_address">Company Address:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="company_address" name="company_address">
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="category_id">Company Category:</label>
					    <div class="col-sm-10">
					     <select class="form-control" name="category_id">
					     	@foreach($category as $cat)
					      	<option value="{{$cat->id}}">{{$cat->title}}</option>
					      	@endforeach
					      </select>
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="ownership">Company Ownership:</label>
					    <div class="col-sm-10">
					      <select class="form-control" name="ownership">
					      	<option value="1">Government</option>
					      	<option value="2">Non-profit</option>
					      	<option value="3">Public</option>
					      	<option value="4">Private</option>
					      </select>
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="office_number">Company Office Number:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="office_number" name="office_number">
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="employee_type">Employee Type:</label>
					    <div class="col-sm-10">
					      <select class="form-control" name="employee_type">
					      	<option value="direct">direct</option>
					      	<option value="education">education</option>
					      	<option value="indirect">indirect</option>
					      	<option value="internet">internet</option>
					      	<option value="training">training</option>
					      </select>
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="no_of_employees">Employee Number:</label>
					    <div class="col-sm-10">
					      <select class="form-control" name="no_of_employees">
					      	<option value="1">0-10</option>
					      	<option value="2">10-50</option>
					      	<option value="3">50-100</option>
					      	<option value="4">100-1000</option>
					      	<option value="5">more than 1000</option>
					      </select>
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="full_name">Contact  Name:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="full_name" name="full_name">
					    </div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="ownership">Contact Mobile Number:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="mobile" name="mobile">
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="ownership">Company Logo:</label>
					    <div class="col-sm-10">
					      <input type="file" data-preview="#preview" class="form-control" id="logo" name="logo">
					      <!-- <img class="col-sm-6" id="preview"  src="" ></img> -->
					    </div>
			 		</div><hr />
			 		<div class="form-group"> 
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">Register</button>
					    </div>
					  </div>
					  <div class="col-lg-12">
					  	@include('layouts.errors');
					  </div>
				</form>
		</div>
	</div>
@endsection