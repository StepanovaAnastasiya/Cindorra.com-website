@extends('layouts.app')
@section('content')
				<!-- Main -->
					<div id="main">

						<section>
							<ul class="posts">
								@foreach($posts as $post)
								<li>
									<article>
										<header>
											<h3><a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->slug, 'slug' => $post->slug])  }}">{{ $post->title}}</a></h3>
											<p>Category: {{ $post->category($post->id)->title }}</p>
											<time class="published" datetime="2015-10-15">{{ $post->created_at }}</time>
										</header>
										<a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->slug, 'slug' => $post->slug])  }}" class="image"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" /></a>
									</article>
								</li>
								@endforeach
							</ul>
						</section>

						<!-- Post -->
						 @foreach($posts as $post)
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->slug, 'slug' => $post->slug])  }}">{{ $post->title }}</a></h2>
										<p>Category: {{ $post->category($post->id)->title }}</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-25">{{ $post->created_at }}</time>
										<span class="name">{{$post->writer->name}}</span>
									</div>
								</header>
								<a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->slug, 'slug' => $post->slug])  }}" class="image featured"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" /></a>
								<p>{!! Str::words($post->body, 100, ' ...') !!}</p>
								<footer>
									<ul class="actions">
										<li><a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->slug, 'slug' => $post->slug])  }}" class="button large">Continue Reading</a></li>
									</ul>
								<!-- 	<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>  -->
								</footer>
							</article>
							@endforeach
							  {{ $posts->links('inc.pagination') }}			

			</div>
			@endsection
