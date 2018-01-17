@extends('layouts.master')

@section('content')
@include('layouts.sidebar')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Category</div>
                <div class="panel-body">
                @if(Session::has('success'))
                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif

                @if(Session::has('danger'))
                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif
                  <form class="form-horizontal" method="POST" action="{{ route('add_category') }}">
                        {{ csrf_field() }}
                        <div class="form-group col-sm-12">
                              <label for="title">Category Title:</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Category Title" name="title">
                        </div>
                        <div class="form-group col-sm-12">
                              <label for="discription">Category Discription:</label>
                             <textarea class="form-control" rows="5" id="discription" name="discription" placeholder="Enter Discription"></textarea>
                        </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @include('layouts.errors')

                </div>
            </div>
        </div>
    </div>
</div>

@endsection