<div class="col-lg-12">
				<div class="panel panel-default">
					<center><h3>Job list by Category</h3></center>
					<ul class="ul">
						@foreach($category as $cat)
							<a href="/category/{{$cat->id}}"><li>{{$cat->title}}</li></a>
						@endforeach
					</ul>
				</div>
			</div>