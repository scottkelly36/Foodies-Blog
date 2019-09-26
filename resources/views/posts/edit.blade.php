@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title', ) }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body', ) }}
            {{ Form::textarea('body', $post->body, ['class' => 'form-control ckeditor', 'placeholder' => 'Body', 'id' => 'article-ckeditor', 'style' => 'resize:none;']) }}
        </div>
        <div class="form-group">
                {{form::file('cover_image')}}
            </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
    {!! Form::close() !!}
            
        
@endsection