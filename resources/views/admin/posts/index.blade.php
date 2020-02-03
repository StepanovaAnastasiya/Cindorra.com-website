@extends('admin.layouts.app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card shadow p-3">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <img style="width:100%;" src="{{$post->cover_image}}">
          </div>
          <div class="col-md-4 col-sm-4">
            <h3><a href="/{{$post->type}}/{{$post->post_slug}}">{{$post->title}}</a><h3>
            <small>Written on {{$post->created_at}}</small>
          </div>
        </div>
      </div>
    @endforeach
    <br>
    {{$posts->links()}}
  @else
    <p>No Posts Found</p>
  @endif
@endsection
