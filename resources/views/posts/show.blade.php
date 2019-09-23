@extends('layouts.master')

@section('content')
    <a href="/posts" class="btn btn-default bg-secondary text-light">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default bg-secondary text-light">Edit</a>

        {{-- <form action = "{{['method' => 'DELETE', URL::route('destroy', [$post->id]])}}" method = "POST" class="pull-right">
        <input type="submit" class="btn btn-danger" value="Delete"/>
        </form> --}}

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endif
@endsection