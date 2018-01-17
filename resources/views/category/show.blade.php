@extends('layouts.master')
@section('content')
@include('layouts.sidebar')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">Lists Of  Categories</div></center>
                <div class="panel-body">
	                @if(Session::has('success'))
	                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
	                @endif
					<table class="table table-bordered">
						<tr>
							<th>Category Title</th>
							<th>Category Discription</th>
							<th></th>
						</tr>
						@foreach($category as $cats)
						<tr>
							<td>{{$cats->title}}</td>
							<td>{{$cats->discription}}</td>
							<td><a href="/category/{{$cats->id}}/edit">Edit</a></td>
							<td><a href="{{route('category.destroy',['id'=>$cats->id])}}" onclick="return confirm('Are you sure?')">Delete</a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
