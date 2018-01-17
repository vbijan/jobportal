@extends('layouts.master')

@section('content')
@include('layouts.sidebar')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">List of Member Companies</div></center>
                <div class="panel-body">
					<table class="table table-bordered">
						<tr>
							<th>Company Name</th>
							<th>Company Category</th>
						</tr>
						@foreach($companies as $company)
						<tr>
							<td>{{$company->company_name}}</td>
							<td>{{App\Category::find($company->category_id)->title}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection