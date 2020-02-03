@extends('admin.layouts.app')

@section('content')
  <h1>Edit Post</h1>
  {!! Form::open(['action' => ['AdmController@update', $post->post_slug, Request::route('type')], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  <div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title', 'required'])}}
  </div>
  <div class="form-group">
    {{Form::label('slug', 'Slug')}}
    {{Form::text('slug', $post->post_slug, ['class' => 'form-control'])}}
  </div>
  <div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $post->content, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
  </div>
  <div class="form-group">
    {{Form::file('cover_image')}}
  </div>
  <div class="form-group">
    {{Form::select('size', $en_categories, null, ['class' => 'form-control', 'placeholder' => 'En_Cats'])}}
  </div>
  <div class="form-group">
    {{Form::select('size', $ru_categories, null, ['class' => 'form-control', 'placeholder' => 'Ru_Cats'])}}
  </div>
  {!! Form::button( 'Draft', ['type' => 'submit', 'class' => 'btn btn-default', 'name' => 'submitbutton', 'value' => 'draft'])!!}
  {!! Form::button( 'Post EN', ['type' => 'submit', 'class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'en_post']) !!}
  {!! Form::button( 'Post RU', ['type' => 'submit', 'class' => 'btn btn-success', 'name' => 'submitbutton', 'value' => 'ru_post'])!!}
  {{Form::hidden('_method', 'PUT')}}
  {{Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-warning', 'name' => 'submitbutton', 'value' => 'update'])}}
  {!! Form::close() !!}
@endsection
