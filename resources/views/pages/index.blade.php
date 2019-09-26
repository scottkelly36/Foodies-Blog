@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-3 logo">Foodies</h1>
            <p>This is a Blog for foodies to share new and interesting recipes!</p>
        <a class="btn btn-primary btn-lg" href="{{route('register')}}" role="button">Register &raquo;</a>
        <a class="btn btn-success btn-lg" href="{{route('login')}}" role="button">Login &raquo;</a>
        </div>
    </div>  

@endsection