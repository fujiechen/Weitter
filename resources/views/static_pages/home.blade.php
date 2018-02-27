@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            Welcome to <a href="something">Sample App</a>'s Homepage!
        </p>

        <p>
            This is the beginning.
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Signup Now</a>
        </p>
    </div>
@stop