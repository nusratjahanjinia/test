@extends('app')

@section('content')
    <h2>
        {!! link_to_route('catagories.show', $catagory->name, [$catagory->title]) !!} -
        {{ $post->name }}
    </h2>

    {{ $post->title }}
    {{ $post->subject }}
    {{ $post->status }}
    {{ $post->completed }}
    {{ $post->description }}
@endsection