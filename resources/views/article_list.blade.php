@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('sidenavbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">All Articles
                    </h1>
                    <a href="{{ route('create_article') }}" class="btn btn-primary float-right">Add Article</a>
                </div>
                @if (session('status'))
                   <div class="alert alert-success">
                       {{ session('status') }}
                   </div>
               @endif

               <div class="row">
                  @foreach($posts as $post)
                      <div class="col-md-4">
                          <div class="card" style="width: 18rem;">
                            @if($post->image)
                                 <img class="card-img-top" src="{{ asset('images/'.$post->image) }}" alt="Post Image">
                             @endif
                              <div class="card-body">
                                  <h5 class="card-title">{{ $post->title }} by <small><i>{{ $post->writer->name }}</i></small></h5>
                                  <p class="card-text">
                                      {{ $post->body }}
                                  </p>
                                  <a href="#" class="card-link btn btn-primary">Edit</a>
                                  <a href="#" class="card-link btn btn-danger" >delete</a>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>


            </main>
        </div>
    </div>
@endsection
