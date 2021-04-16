@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- You are logged in! --}}
                    
                    <a href="/posts/create/" class="btn btn-primary">Create Post</a>
                   <hr>
                    @if(count($posts) > 0)
                   <table class="table table-striped table-responsive">
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                  @foreach($posts as $post)
                            <tr>
                                <td>
                                    {{$post->title}}
                                </td>

                                <td>
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                                    </td>

                                    <td>
                                            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                           {!!Form::close()!!}
                                        </td>
                            </tr>
                            @endforeach
                   </table>
                   @else
                     <p>You have no Post.</p>
                   @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
