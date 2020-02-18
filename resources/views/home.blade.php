@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('sidenavbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Welcome!!! Here you can add and edit your articles or job posts.</h1>
                </div>
            </main>
        </div>
    </div>

    @if (session('status'))
       <div class="alert alert-danger">
           {{ session('status') }}
       </div>
   @endif
@endsection
