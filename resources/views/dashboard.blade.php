@extends('layouts.master')

@section('content')
<div class="card-body">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="/posts/create" class="card-title btn btn-primary">Create Post</a>
                       <h3 class="card-title"> Your Blog Posts</h3>
                       <hr>
                       @if(count($posts) > 0)
                       {{-- {{dd($posts)}} --}}
                            <ul class="list-group">
                                <tr>
                                    <h4>Title</h4>
                                </tr>
                                
                                @foreach($posts as $post)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <td>{{$post->title}}</td>
                                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a></td>
                                            <td>
                                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!!Form::close()!!}
                                            </td>
                                        </li>
                                @endforeach
                            </ul>
                        @else
                            <p>You have no post</p>
                        @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
