@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('sidenavbar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Create An Article</h1>
                </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter article title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Content</label>
                            <textarea class="form-control" rows="5" name="body" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
            </main>
        </div>
    </div>
@endsection
