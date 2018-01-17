@extends('layouts.master')

@section('content')
@include('layouts.sidebar')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">List of Job Seekers</div></center>
                <div class="panel-body">
					<table class="table table-bordered">
						<tr>
							<th>Job Seeker Name</th>
							<th>Job Seeker email</th>
						</tr>
						@foreach($jobseekers as $job)
						<tr>
							<td>{{$job->full_name}}</td>
							<td>{{$job->email}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection