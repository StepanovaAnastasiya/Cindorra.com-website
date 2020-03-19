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
						<h3><a href="{{ route('single_post',['cat_slug' => $post->cat_slug, 'slug' => $post->slug])  }}">{{ $post->title}}</a></h3>
						<p>Category: {{ $post->cat_title }}</p>
						<time class="published" datetime="2015-10-15">{{ $post->created_at }}</time>
					</header>
					<a href="{{ route('single_post',['cat_slug' => $post->cat_slug, 'slug' => $post->slug])  }}" class="image"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" /></a>
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
				<h2><a href="{{ route('single_post',['cat_slug' => $post->cat_slug, 'slug' => $post->slug])  }}">{{ $post->title }}</a></h2>
				<p>Category: {{ $post->cat_title }}</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-10-25">{{ $post->created_at }}</time>
				<span class="name">{{ $post->name }}</span>
			</div>
		</header>
		<a href="{{ route('single_post',['cat_slug' => $post->cat_slug, 'slug' => $post->slug])  }}" class="image featured"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" /></a>
		<p>{!! Str::words($post->body, 100, ' ...') !!}</p>
		<div>
			<ul class="actions">
				<li><a href="{{ route('single_post',['cat_slug' => $post->cat_slug, 'slug' => $post->slug])  }}" class="button large">Continue Reading</a></li>
			</ul>
		</div>
		<!--  @include ('inc.postfooter') -->
	</article>
	@endforeach
	{{ $posts->links('inc.pagination') }}
	@include ('inc.footer')
</div>
@endsection
