@extends('layouts.app')
@section('content')
<div id="main">

    <div class="container-fluid">
        <div class="row">

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Welcome!!! Here you can add and edit your articles or job posts.</h1>
                </div>
            </main>
        </div>

            @if (session('status'))
               <h4>
                   {{ session('status') }}
               </h4>
           @endif
        <ul class="actions">
          <li><a href="{{ route('create_post') }}" class="button large">Add a new post</a></li>
        </ul>


        <section>
          <ul class="posts">
            @foreach($posts as $post)
            <li>
              <article>
                <header>
                  <h3><a href="{{ route('single_post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                  <p>Category: {{ $post->category($post->id)->title }}</p>
                  <time class="published" datetime="2015-10-20">{{ $post->created_at }}</time>
                </header>
                  <ul class="actions">
                <a href="{{ route('edit_post', ['slug' => $post->slug]) }}" class="button large">Edit</a>

                <form action="{{ route('delete_post', ['slug' => $post->slug]) }}" method="post">
                {{ csrf_field() }}
                <button type="submit" name="submit" value="article" class="button large" >Delete</button>
                </form>
                   </ul>
                <a href="{{ route('single_post', ['slug' => $post->slug]) }}" class="image"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}"/></a>

              </article>
            </li>

            @endforeach
          </ul>
          {{ $posts->links('default') }}
        </section>
 </div>

 </div>
 @endsection
