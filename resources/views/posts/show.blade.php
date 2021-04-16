@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
  <h1>{{$posts->title}}</h1>
  <div class="row">
      <div class="col-md-4 col-sm-4">
  <img  src="/storage/cover_images/{{$posts->cover_image}}" style="width:100%" /> 
      </div>
  
      <div class="col-md-8 col-sm-8">
    {!!$posts->body!!}
  </div>
</div>
<hr>
  <small>Written on {{$posts->created_at}} <i class="text text-primary">By {{$posts->user->name}}</i></small>
  <br />
  
  @if(!Auth::guest())
    @if(Auth::user()->id == $posts->user_id)
<a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['PostController@destroy', $posts->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
 {{Form::hidden('_method','DELETE')}}
 {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
 @endif
@endif
@endsection