@extends('app')

@section('content')
    <h2>{{ $catagory->name }}</h2>
<?PHP #var_dump($catagory->posts); ?>
    @if ( !$catagory->posts->count() )
        Your project has no posts.
    @else
        <ul>
            @foreach( $catagory->posts as $post )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('catagories.posts.destroy', $catagory->name, $post->title))) !!}
                    <a href="{{ route('catagories.posts.show', [$catagory->id, $post->id]) }}">{{ $post->title }}</a>

                    (
                    {{--{!! link_to_route('catagories.Posts.edit', 'Edit', array($catagory>name, $post->title), array('class' => 'btn btn-info')) !!},--}}

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    {{--)--}}
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('catagories.index', 'Back to Catagories') !!} |
        {!! link_to_route('catagories.posts.create', 'Create Post', $catagory->name) !!}
    </p>
@endsection

