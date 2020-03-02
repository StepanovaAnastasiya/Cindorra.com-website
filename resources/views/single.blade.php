@extends('layouts.app')
@section('content')
				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2>{{ $post->title }}</h2>
											<p>Category: {{ $post->category($post->id)->title }}</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ $post->created_at }}</time>
										<span class="name">{{ $post->writer->name }}</span><img src="images/avatar.jpg" alt="" />
									</div>
								</header>
								<span class="image featured"><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" /></span>

								{{ $post->body }}
			<!--					<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer> -->
							</article>
					</div>
			</div>
		@endsection
