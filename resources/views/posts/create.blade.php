@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['method' => 'POST', 'action' => 'PostsController@store', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control' , 'placeholder' => 'Title']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']) !!}
        </div>
        <div class="form-group">
            {!! Form::file('cover_image') !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit' , ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection