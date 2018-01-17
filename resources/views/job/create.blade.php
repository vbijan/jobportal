@extends('layouts.master')

@section('content')
@include('layouts.sidebaremployer')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add job</div>
                <div class="panel-body">
                   @if(Session::has('success'))
                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif

                @if(Session::has('danger'))
                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif
                  <form class="form-horizontal" method="POST" action="{{ route('add_job') }}">
                        {{ csrf_field() }}
                        <div class="form-group col-sm-12">
                              <label for="title">Job Title:</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Job Title" name="title">
                        </div>
                        <div class="form-group col-sm-12">
                              <label for="discription">Job Discription:</label>
                             <textarea class="form-control" rows="5" id="discription" name="discription" placeholder="Enter Discription"></textarea>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="experience">Job Experience:</label>
                            <input type="text" class="form-control" name="experience" placeholder="Enter Company Location"> 
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="position">Job Position:</label>
                            <input type="text" class="form-control" name="position" placeholder="Enter Company Location"> 
                        </div>
                         <div class="form-group col-sm-12">
                            <label for="opening">Job Opening No:</label>
                            <input type="text" class="form-control" name="opening" placeholder="Enter Company Location"> 
                        </div>
                         <div class="form-group col-sm-12">
                            <label for="salary">Job Salary:</label>
                            <input type="text" class="form-control" name="salary" placeholder="Enter Company Location"> 
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="category_id">Job Category:</label>
                            <select class="form-control" name="category_id">
                                <option value="select">Select</option>
                                @foreach($category as $cats)
                                <option value="{{$cats->id}}">{{$cats->title}}</option>
                                @endforeach
                            </select>
                             
                        </div>
                       @if(Auth::check())
                        <input type="hidden" name="company_id" value="{{Auth::user()->id}}">
                        @endif
                         <div class="form-group col-sm-12">
                            <label for="end_date">Job Vaccancy End Date:</label>
                             <input type="date" class="form-control" name="end_date"> 
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