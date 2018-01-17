@extends('layouts.master')

@section('content')
@if(Auth::check())
	<?php
			//echo Auth::user()->role;
		if(Auth::user()->role == '2'):?>
			@include('layouts.sidebarjob');

		<?php elseif(Auth::user()->role =='1'): ?>
			@include('layouts.sidebaremployer')
		<?php elseif(Auth::user()->role=='0'):?>
			
			@include('layouts.sidebar')
		<?php endif; ?>

@endif

	<div class="container">

		<div class="row">

			@if (session('member'))
				<?php
					$member = session('member');

					if($member->member_type == '0'):
			    	echo '<center><h2>Dashboard for '.$member->full_name.'</center></h2>';

						 else: 
			    	echo '<center><h2>Dashboard for '.$member->company_name.'</center></h2>';
				 endif;
				?>
			    
			@endif
			<div class="col-lg-8">
				@include('layouts.category')
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<center><h3>Leading Job Vaccancies</h3></center>
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