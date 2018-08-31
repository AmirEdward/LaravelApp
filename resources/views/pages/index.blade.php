@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <h3>{{$message}}</h3>
        <p>
            @if(Auth::guest())
                <a href="{{route('login')}}" class="btn btn-primary btn-lg" role="button">Login</a>
                <a href="{{route('register')}}" class="btn btn-success btn-lg" role="button">Register</a>
            @endif
        </p>
    </div>
@endsection
