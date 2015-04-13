@extends('app')

@section('content')
    <h2>Create Post for Catagories "{{ $catagory->name }}"</h2>

    {!! Form::model(new App\Post, ['route' => ['catagories.posts.store', $catagory->title], 'class'=>'']) !!}
    @include('posts/partials/form', ['submit_text' => 'Create Posts'])
    {!! Form::close() !!}
    @endsection

            <!-- /resources/views/tasks/edit.blade.php -->
    @extends('app')

@section('content')
    <h2>Edit Post "{{ $post->name }}"</h2>

    {!! Form::model($post, ['method' => 'PATCH', 'route' => ['catagories.posts.update', $catagory->title, $post->title]]) !!}
    @include('posts/partials/form', ['submit_text' => 'Edit Post'])
    {!! Form::close() !!}
@endsection