@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Company</div>

                <div class="panel-body">
                   @if(Session::has('success'))
                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif

                @if(Session::has('danger'))
                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif
                  <form class="form-horizontal" method="POST" action="{{ route('add_company') }}">
                        {{ csrf_field() }}
                        <div class="form-group col-sm-12">
                              <label for="title">Company Title:</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Company Title" name="title">
                        </div>
                        <div class="form-group col-sm-12">
                              <label for="discription">Company Discription:</label>
                             <textarea class="form-control" rows="5" id="discription" name="discription" placeholder="Enter Discription"></textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="location">Company Location:</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Company Location"> 
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="category_id">Company Category Type:</label>
                            <select class="form-control" name="category_id">
                                <option value="select">Select</option>
                                @foreach($category as $cats)
                                <option value="{{$cats->id}}">{{$cats->title}}</option>
                                @endforeach
                            </select>
                             
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