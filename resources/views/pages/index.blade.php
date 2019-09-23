@extends('layouts.master')

@section('content')
    <div class='jumbotron text-center'>
        <h1>{{$data}}</h1>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/login" role="button">Register</a>
    </div>
@endsection
