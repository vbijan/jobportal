@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class = col-lg-6>
				<div class="card">
				<h3>Job OverView</h3>
					{{$job->title}} Details:<br>
					Category : {{App\Category::find($job->category_id)->title}}<br>
					Position : {{$job->position}}<br>
					Experience : {{$job->experience}}<br>
					opening : {{$job->opening}}<br>
					Salary : {{$job->salary}}
				</div>
			</div>
			<div class="col-lg-6">
				<h3>Company Brief</h3>
				Company Name: <a href="/company/{{$job->company_id}}">
					{{App\User::find($job->company_id)->company_name}}</a><br>
				Company Location: {{App\User::find($job->company_id)->location}}
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<h3>Detailed Job Description / Requirements</h3>
				<hr/>
				<p>{{$job->discription}}</p>
			</div>			
		</div>
	</div>
@endsection