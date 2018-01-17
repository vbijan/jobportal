@extends('layouts.master')

@section('content')
@include('layouts.sidebar')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Category</div>
                <div class="panel-body">
                @if(Session::has('success'))
                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif

                @if(Session::has('danger'))
                    <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif
                  <form class="form-horizontal" method="post" action="{{route('category.update', $id)}}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group col-sm-12">
                              <label for="title">Category Title:</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Category Title" name="title" value="{{$old->title}}">
                        </div>
                        <div class="form-group col-sm-12">
                              <label for="discription">Category Discription:</label>
                             <textarea class="form-control" rows="5" id="discription" name="discription" placeholder="Enter Discription" >{{$old->discription}}</textarea>
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