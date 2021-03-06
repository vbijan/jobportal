@extends('layouts.master')

@section('content')
<div class="container">
		<div class="row">
			@include('layouts.category')
			<div class="col-md-4">
				<div class="panel panel-default">
					<center><h3>Jobs for this Category</h3></center>
					<ul>
						@foreach($jobs as $job)
						<a href="/job/{{$job->id}}"><li>{{$job->title}}</li></a>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>

@endsection