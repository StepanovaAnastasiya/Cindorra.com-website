@extends('layouts.app')
@section('content')
<div id="main">

  @if (session('status'))
     <div class="alert alert-success">
         {{ session('status') }}
     </div>
 @endif

 <ul class="actions">
   <li><a href="{{ route('create_article') }}" class="button large">Add a new article</a></li>
 </ul>

  <section>
    <ul class="posts">
      @foreach($posts as $post)
      <li>
        <article>
          <header>
            <h3><a href="{{ route('single_article', ['post_id' => $post->id]) }}">{{ $post->title }}</a></h3>
            <time class="published" datetime="2015-10-20">{{ $post->created_at }}</time>
          </header>
            <ul class="actions">
          <a href="{{ route('edit_article_form', ['post_id' => $post->id]) }}" class="button large">Edit</a>

          <form action="{{ route('delete_post', ['post_id' => $post->id]) }}" method="post">
          {{ csrf_field() }}
          <button type="submit" name="submit" value="jobpost" class="button large" >Delete</button>
          </form>
             </ul>
          <a href="{{ route('single_article', ['post_id' => $post->id]) }}" class="image"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}"/></a>

        </article>
      </li>

      @endforeach
    </ul>
    {{ $posts->links('default') }}
  </section>
</div>
<!--
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
                                  <a href="{{ route('edit_article_form', ['post_id' => $post->id]) }}" class="card-link btn btn-primary">Edit</a>
                                  <form action="{{ route('delete_post', ['post_id' => $post->id]) }}" method="post"><br>
                                       {{ csrf_field() }}
                                       <button type="submit" name="submit" value="article" class="btn btn-danger" >delete</button>
                                   </form>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>


            </main>
        </div>
    </div> -->
@endsection
