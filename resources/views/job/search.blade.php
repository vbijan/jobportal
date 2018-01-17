@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			@include('layouts.category')
			<div class="col-md-4">
				<div class="panel panel-default">
					<center><h3>Searching Results</h3></center>
					<ul>
						@if($count > 0)
							@foreach($data as $job)
								<a href="/job/{{$job->id}}"><li>{{$job->title}}</li></a>
							@endforeach
						@else
							<p>No Results Found...</p>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection