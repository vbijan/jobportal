@extends('layouts.master')


@section('content')
	<div class="container">
		<div class="row">
			<center><h2>Login</h2></center>
			<form method="post" action="/logins">
				{{csrf_field()}}
				<div class="form-group class-lg-6">
					<label class="control-label col-sm-6" for="user_id">User Name</label>
					<div class="col-sm-10">
					    <input type="text" class="form-control" id="user_id" name="user_id">
					</div>
			 	</div>
			 	<div class="form-group class-lg-6">
					<label class="control-label col-sm-6" for="password">Password</label>
					<div class="col-sm-10">
					    <input type="password" class="form-control" id="password" name="password">
					</div>
			 	</div>
			 	<div class="form-group"> 
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-success">Login</button>
					    </div>
					  </div>
					  <div class="col-lg-12">
					  	@include('layouts.errors');
					  </div>
			</form>
		</div>
	</div>

@endsection