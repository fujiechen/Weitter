@extends('layouts.default')

@section('content')
  @if (Auth::check())
  <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h3>Post List</h3>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
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
  @endif
@stop
