@extends('layouts.master')

@section('content')
@include('layouts.sidebaremployer')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <center><div class="panel-heading">Lists of Jobs</div></center>
                <div class="panel-body">
					<table class="table table-bordered">
						<tr>
							<th>Job Title</th>
							<th>Job Discription</th>
							<th>Position</th>
							<th>Opening</th>
							<th>Salary</th>
							<th>Experience</th>
							<th>Category</th>
							<th>Company</th>
						</tr>
						@foreach($jobs as $job)
						<tr>
							<td>{{$job->title}}</td>
							<td>{{$job->discription}}</td>
							<td>{{$job->position}}</td>
							<td>{{$job->opening}}</td>
							<td>{{$job->salary}}</td>
							<td>{{$job->experience}}</td>
							<td>{{App\Category::find($job->category_id)->title}}</td>
							<!-- <td>{{$job->company_id}}</td> -->
							 <td>{{App\User::find($job->company_id)->company_name}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection