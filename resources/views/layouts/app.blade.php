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

	@include ('inc.navbar')
	<!-- Main -->
	<div id="main">
		@include ('inc.messages')
		@yield('content')
	</div>

</body>
</html>
