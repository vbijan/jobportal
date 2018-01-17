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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
