@extends('admin.layouts.app')

@section('content')
  <h1>Create Post</h1>
  {!! Form::open(['action' => 'AdmController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  <div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title', 'required'])}}
  </div>
  <div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
  </div>
  <div class="form-group">
    {{Form::file('cover_image')}}
  </div>
  <div class="form-group">
  {{Form::select('en_cats', $en_categories, null, ['class' => 'form-control', 'placeholder' => 'En_Cats'])}}
  </div>
  <div class="form-group">
    {{Form::select('ru_cats', $ru_categories, null, ['class' => 'form-control', 'placeholder' => 'Ru_Cats'])}}
  </div>
  <div class="form-group">
    {{Form::label('tags', 'Tags')}}
    {{Form::text('tags', '', ['class' => 'form-control', 'placeholder' => 'Tags'])}}
  </div>
  {!! Form::button( 'Draft', ['type' => 'submit', 'class' => 'btn btn-default', 'name' => 'submitbutton', 'value' => 'draft'])!!}
  {!! Form::button( 'Post EN', ['type' => 'submit', 'class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'en_post']) !!}
  {!! Form::button( 'Post RU', ['type' => 'submit', 'class' => 'btn btn-success', 'name' => 'submitbutton', 'value' => 'ru_post'])!!}
  {!! Form::close() !!}
@endsection
