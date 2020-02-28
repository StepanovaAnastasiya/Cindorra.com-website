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

        <ul class="actions">
          <li><a href="{{ route('all_posts') }}" class="button large">See all my posts</a></li>
          <li><a href="{{ route('create_post') }}" class="button large">Add a new post</a></li>
        </ul>


    </div>


    @if (session('status'))
       <div class="alert alert-danger">
           {{ session('status') }}
       </div>
   @endif
 </div>
 @endsection
