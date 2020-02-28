@extends('layouts.app')
@section('content')
<div id="main">

  @if (session('status'))
     <div class="alert alert-success">
         {{ session('status') }}
     </div>
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
            <h3><a href="{{ route('single_post', ['post_id' => $post->id]) }}">{{ $post->title }}</a></h3>
            <time class="published" datetime="2015-10-20">{{ $post->created_at }}</time>
          </header>
            <ul class="actions">
          <a href="{{ route('edit_post', ['post_id' => $post->id]) }}" class="button large">Edit</a>

          <form action="{{ route('delete_post', ['post_id' => $post->id]) }}" method="post">
          {{ csrf_field() }}
          <button type="submit" name="submit" value="article" class="button large" >Delete</button>
          </form>
             </ul>
          <a href="{{ route('single_post', ['post_id' => $post->id]) }}" class="image"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}"/></a>

        </article>
      </li>

      @endforeach
    </ul>
    {{ $posts->links('default') }}
  </section>
</div>

@endsection
