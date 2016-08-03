@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="{{ URL::asset('images/logo.jpg') }}" alt="Welcome to Krypton" class="center-block">
            <h1>Welcome to Krypton</h1>
            <p>A working user managemnt system</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
