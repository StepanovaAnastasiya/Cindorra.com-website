<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="">
    <nav class="navbar navbar-light bg-success justify-content-between">
        <a class="navbar-brand" style="color: white">Cindorra</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white">Search</button>
        </form>
        @if (Route::has('login'))
               <div class="top-right links">
                   @auth
                       <a href="{{ url('/home') }}">Home</a>
                   @else
                       <a href="{{ route('login') }}">Login</a>

                       @if (Route::has('register'))
                           <a href="{{ route('register') }}">Register</a>
                       @endif
                   @endauth
               </div>
           @endif

    </nav>
    <main class="py-4">
        <div class="row container-fluid">

            {{-- main content area--}}
            <div class="col-md-4">
                @foreach($job_posts as $post)
                    <div class="card mb-3">
                        @if($post->image)
                            <img class="card-img-top" src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" style="height: 200px">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                {{ $post->body }}
                            </p>
                            <p class="card-text"><small class="text-muted">{{ $post->writer->name }} </small></p>
                        </div>
                    </div>
                @endforeach
                    {{ $job_posts->links() }}
            </div>
            <div class="col-md-4">
                @foreach($articles as $post)
                    <div class="card mb-3">
                        @if($post->image)
                            <img class="card-img-top" src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" style="height: 200px">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                {{ $post->body }}
                            </p>
                            <p class="card-text"><small class="text-muted">{{ $post->writer->name }} </small></p>
                        </div>
                    </div>
                @endforeach
                    {{ $articles->links() }}
            </div>
            {{-- side navbar --}}
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Recent Job Posts
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($latest_job_posts as $post)
                        <li class="list-group-item">
                            <a href="">{{ $post->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Recent Articles
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($latest_articles as $post)
                        <li class="list-group-item">
                            <a href="">{{ $post->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
