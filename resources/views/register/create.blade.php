@extends('layouts.master')

@section('content')
	<div class="container">
		<div class=row>
				<form method="post" action="/job_seeker_register">
					{{ csrf_field() }}
					<center><h3>Login Details JobSeeker Signup</h3></center>
					<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="full_name">Name:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="full_name" name="full_name">
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
					    <label class="control-label col-sm-6" for="re_password">Re-Password:</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="re_password" name="re_password">
					    </div>
			 		</div>
			 		<div class="col-lg-12">
			 			<center><h3>Other Personal Details</h3></center>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="dob">Date Of Birth:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="dob" name="dob">
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="marital_status">Marital Status:</label>
					    <div class="col-sm-10">
					      <select class="form-control" name="marital_status">
					      	<option value="0">Single</option>
					      	<option value="1">Married</option>
					      	<option value="2">Divorced</option>
					      </select>
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="home_address">Home Address:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="home_address" name="home_address">
					    </div>
			 		</div>
			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="home_number">Home Number:</label>
					     <div class="col-sm-10">
					      <input type="text" class="form-control" id="home_number" name="home_number">
					    </div>
			 		</div>

			 		<div class="form-group class-lg-6">
					    <label class="control-label col-sm-6" for="mobile">Mobile Number:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="mobile" name="mobile">
					    </div>
			 		</div>
			 		<input type="hidden" name="role" value="2">
			 		<hr />
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