@extends('admin.layouts.app')

@section('content')
    <h1>Drafts</h1>
    @if(count($drafts) > 0)
        @foreach($drafts as $draft)
            <div class="card shadow p-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="{{$post->cover_image}}" class="img-fluid">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3><a href="/{{$draft->type}}/{{$draft->post_slug}}">{{$draft->title}}</a>
                            <h3>
                                <small>Started on {{$draft->created_at}}</small>
                    </div>
                    <div class="w-100 p-2">
                        {{ str_limit($draft->content, $limit = 500, $end = '...') }}
                    </div>
                </div>
                <tr>
                    <td><a href="/edit/{{$draft->type}}/{{$draft->post_slug}}" class="btn btn-info">Edit</a></td>
                    <td class="float-right">
                        {!!Form::open(['action' => ['AdmController@destroy', $draft->post_slug, 'draft'], 'method' => 'POST', 'class' => 'float-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger float-right mt-2'])}}
                        {!!Form::close() !!}
                    </td>
                </tr>
            </div>
        @endforeach
        <br>
        {{$drafts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection
