@extends('layouts.app')
@section('content')
				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2>{{ $post->title }}</h2>
											<a href="{{ route('explore', ['cat_slug' => $post->category($post->id)->cat_slug]) }}"><p>Category: {{ $post->category($post->id)->cat_title }}</p></a>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ $post->created_at }}</time>
										<span class="name">{{ $post->writer->name }}</span><img src="images/avatar.jpg" alt="" />
									</div>
								</header>
								<span class="image featured"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" /></span>

								{{ $post->body }}

		<!-- @include ('inc.postfooter') -->

							</article>
							@include ('inc.footer')
					</div>
			</div>
		@endsection
