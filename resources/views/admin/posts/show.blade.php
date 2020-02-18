@extends('admin.layouts.app')

@section('content')
  <a href="/" class="btn btn-info">Go Back</a>
  <h1>{{$post->title}}</h1>
  <img src="{{$post->cover_image}}" class="img-fluid">
  <br>
  <br>
  <div>
    {!!$post->content!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}}</small>
  <hr>
      <a href="/edit/{{$post->type}}/{{$post->post_slug}}" class="btn btn-info">Edit</a>
      {!!Form::open(['action' => ['AdmController@destroy', $post->post_slug, Request::route('type')], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!!Form::close() !!}
@endsection