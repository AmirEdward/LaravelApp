@extends('layouts.app')

@section('content')
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
                        <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
                        @if(count($posts))
                            <h3>Your blog posts</h3>
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit Post</a></td>
                                        <td>
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id], 'class' => 'pull-right']) !!}
                                            <div class="form-group">
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
