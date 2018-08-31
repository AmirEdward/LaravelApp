@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back</a>
    <h1>{{$post->title}}</h1>
    <img class="img-thumbnail" src="{{asset("storage/cover_images/$post->cover_image")}}">
    <br>
    <br>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on: {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(Auth::user() && Auth::user()->id === $post->user_id)
        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-default">Edit</a>
        {!! Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id], 'class' => 'pull-right']) !!}
        <div class="form-group">
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    @endif
@endsection