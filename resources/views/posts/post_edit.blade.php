@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Post</h1>
                </div>
                    <form action="{{ route('update_post', ['slug' => $post->slug]) }}" method="post"enctype="multipart/form-data">
                                              {{ csrf_field() }}
                                              <p><select required name="category">
                                               <option disabled selected>Please choose category</option>
                                               <option value="1">Job post</option>
                                               <option value="2">Article</option>
                                              </select></p>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter article title" name="title" value="{{ $post->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Content</label>
                            <textarea class="form-control" rows="5" name="body" required>{{ $post->body }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Feature Image</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                      </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
            </main>
        </div>
    </div>
@endsection
