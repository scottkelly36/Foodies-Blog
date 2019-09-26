@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title', ) }}
            {{ Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body', ) }}
            {{ Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Body', 'id' => 'article-ckeditor', 'style' => 'resize:none;']) }}
        </div>
        <div class="form-group">
            {{form::file('cover_image')}}
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
    {!! Form::close() !!}
            
        
@endsection