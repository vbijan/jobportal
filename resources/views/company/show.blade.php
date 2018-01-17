@extends('layouts.master')

@section('content')
@include('layouts.sidebar')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">List Of Companies</div></center>
                <div class="panel-body">
					<table class="table table-bordered">
						<tr>
							<th>Company Title</th>
							<th>Company Discription</th>
							<th>Company Location</th>
							<th>Company Category</th>
						</tr>
						@foreach($company as $com)
						<tr>
							<td>{{$com->title}}</td>
							<td>{{$com->discription}}</td>
							<td>{{$com->company_address}}</td>
							<td>{{App\Category::find($com->category_id)->title}}</td>

						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection