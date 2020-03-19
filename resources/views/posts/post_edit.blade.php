@extends('layouts.app')
@section('content')
<style media="screen">
form, button {
  width: 100%
}
</style>
<div class="container-fluid">
  <div class="row">

    <div class="align-items-center border-bottom">
      <h1 class="h1">Edit Post</h1>
    </div>
    <form action="{{ route('update_post', ['slug' => $post->slug]) }}" method="post"enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        @if ($post->cat_id==1)
        <select required name="category">
          <option value="1" selected>Job post</option>
          <option value="2">Article</option>
        </select>
        @else
        <select required name="category">
          <option value="1">Job post</option>
          <option value="2" selected>Article</option>
        </select>
        @endif
      </div>
    </br>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $post->title }}" required>
    </div>
  </br>
  <div class="form-group">
    <label for="body">Content</label>
    <textarea class="form-control" rows="5" name="body" required>{{ $post->body }}</textarea>
  </div>
</br>
<div class="form-group">
  <label>Feature Image</label>
  <input type="file" class="form-control-file" name="image">
</div>
</br>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</main>
</div>
</div>
@endsection
