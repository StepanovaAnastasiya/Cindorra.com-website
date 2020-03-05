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
                    <h1 class="h1">Add New Post</h1>
                </div>
                    <form action="{{ route('store_post') }}" method="post"enctype="multipart/form-data">
                                              {{ csrf_field() }}

                   <div class="form-group">
                     <select required name="category">
                      <option disabled selected>Please choose category</option>
                      <option value="1">Job post</option>
                      <option value="2">Article</option>
                     </select>
                   </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Title" name="title" required>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="body">Content</label>
                            <textarea class="form-control" rows="5" name="body" required></textarea>
                        </div>
                        </br>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Feature Image</label>
                          <input type="file" class="form-control-file" name="image" required>
                      </div>
                      </br>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                      </div>
                    </form>
        </div>
    </div>
@endsection
