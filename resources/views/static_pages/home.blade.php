@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <h1>Hello</h1>
        <p class="lead">
            Welcome to <a href="#">Weitter</a>'s Homepage!
        </p>

        <p>
            This is the beginning.
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign Up Now</a>
        </p>
    </div>
@stop