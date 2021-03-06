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
						<h3><a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->cat_slug, 'slug' => $post->slug])  }}">{{ $post->title}}</a></h3>
						<p>Category: {{ $post->category($post->id)->cat_title }}</p>
						<time class="published" datetime="2015-10-15">{{ $post->created_at }}</time>
					</header>
					<a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->cat_slug, 'slug' => $post->slug])  }}" class="image"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" /></a>
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
				<h2><a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->cat_slug, 'slug' => $post->slug])  }}">{{ $post->title }}</a></h2>
				<a href="{{ route('explore', ['cat_slug' => $post->category($post->id)->cat_slug]) }}"><p>Category: {{ $post->category($post->id)->cat_title }}</p></a>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-10-25">{{ $post->created_at }}</time>
				<span class="name">{{$post->writer->name}}</span>
			</div>
		</header>
		<a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->cat_slug, 'slug' => $post->slug])  }}" class="image featured"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" /></a>
		<p>{!! Str::words($post->body, 100, ' ...') !!}</p>
		<div>
			<ul class="actions">
				<li><a href="{{ route('single_post',['cat_slug' => $post->category($post->id)->cat_slug, 'slug' => $post->slug])  }}" class="button large">Continue Reading</a></li>
			</ul>
		</div>
		<!--  @include ('inc.postfooter') -->
	</article>
	@endforeach
	{{ $posts->links('inc.pagination') }}


	<!-- Sidebar -->
	<section id="sidebar">

		<!-- Intro -->
		<section id="intro">
			<a href="{{ route('main') }}" class="logo"><img src="images/logo.jpg" alt="" /></a>
			<header>
				<h2>Cindorra</h2>
				<p>Articles and job for video content makers</p>
			</header>
		</section>


		<!-- About -->
		<section class="blurb">
			<h2>About</h2>
			<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
			<ul class="actions">
				<li><a href="{{ url('/profile') }}" class="button">Add new article or job post</a></li>
			</ul>
		</section>
		@include ('inc.footer')
	</div>
	@endsection
