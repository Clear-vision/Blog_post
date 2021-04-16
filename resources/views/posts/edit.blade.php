@extends('layouts.app')

@section('content')
  <h1>Edit Posts</h1>

  {!! Form::open(['action' => ['PostController@update', $posts->id], 'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
  <div class="form-group">
     {{Form::label('title', '')}}
    {{Form::text('title', $posts->title, ['class' => 'form-control','placeholder' => 'Title'])}}
  </div>

  <div class="form-group">
    {{Form::label('Message', 'Message')}}
   {{Form::textarea('message', $posts->body, ['id' => 'article-ckeditor', 'class' => 'form-control','placeholder' => 'Message'])}}
 </div>

 <div class="form-group">
    {{Form::file('cover_image')}}
  </div>
 {{Form::hidden('_method', 'PUT')}}
 {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
  
  @endsection