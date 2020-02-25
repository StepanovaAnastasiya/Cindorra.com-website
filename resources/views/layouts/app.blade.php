<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Cindorra</title>
		<script src="{{ asset('js/jquery.min.js') }}" defer></script>
		<script src="{{ asset('js//browser.min.js') }}" defer></script>
		<script src="{{ asset('js/breakpoints.min.js') }}" defer></script>
		<script src="{{ asset('js/util.js') }}" defer></script>
		<script src="{{ asset('js/main.js') }}" defer></script>
		
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{{ route('main') }}">Cindorra</a></h1>
						<!-- <nav class="links">
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li>
							</ul>
						</nav> -->
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>



						<!-- Actions -->
							<section>
								<ul class="actions stacked">
										@if (Route::has('login'))
										@auth
												<li><a href="{{ url('/home') }}" class="button large fit">Home</a></li>
										@else
										<li><a href="{{ route('login') }}" class="button large fit">Login</a></li>

										@if (Route::has('register'))
												<li><a href="{{ route('register') }}" class="button large fit">Register</a></li>
										@endif
								@endauth
								 @endif
								</ul>
							</section>

					</section>



				<!-- Main -->
					<div id="main">
  @yield('content')

			</div>
			<!-- Footer
				<section id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
						<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
				</section>  -->
	</body>
</html>
