@extends('layouts.app')

@section('content')
  <h1>Create Posts</h1>

  {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  <div class="form-group">
     {{Form::label('title', '')}}
    {{Form::text('title', '', ['class' => 'form-control','placeholder' => 'Title'])}}
  </div>

  <div class="form-group">
    {{Form::label('Message', 'Message')}}
   {{Form::textarea('message', '', ['id' => 'article-ckeditor', 'class' => 'form-control','placeholder' => 'Message'])}}
 </div>

 <div class="form-group">
   {{Form::file('cover_image')}}
 </div>

 {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
  
  @endsection