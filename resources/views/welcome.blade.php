@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <hr>
            <img src="{{ URL::asset('images/logo.jpg') }}" alt="Welcome to Krypton" class="center-block">
            <h1>Welcome to Krypton</h1>
            <p>An out of this world task manager</p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Jor-El</div>

                <div class="panel-body">
                    <i>
                        "You will give the people of Earth an ideal to strive towards. They will race behind you,
                        they will stumble,  they will fall. But in time, they will join you in the sun, Kal. In time,
                        you will help them accomplish wonders."
                    </i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
