@extends('layouts.app')

@section('content')
        <a href="/posts" class='btn btn-success btn-sm mb-3'>Go Back</a>
        <h1>{{$post->title}}</h1>
        <img src="/storage/cover_images/{{$post->cover_image}}" alt="cover_image" style="width: 100%">
        <br><br>
        <div>{!!$post->body!!}</div>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
@auth         
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success btn-sm">Edit</a>
        {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
        {!! Form::close() !!}
     @endif
@endauth
@endsection