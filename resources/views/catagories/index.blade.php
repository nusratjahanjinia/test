@extends('app')

@section('content')
    <h2>Catogories</h2>
    @if ( !$catagories->count() )
        You have no projects
    @else
        <ul>
            @foreach( $catagories as $catagory )
                <li>
                    {{--{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('Catogories.posts.destroy', $catagory->name))) !!}--}}
                    <a href="{{ route('catagories.show', $catagory->id) }}">{{ $catagory->name }}</a>
                    (
                    {!! link_to_route('catagories.edit', 'Edit', array($catagory->name), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    <p>
        {!! link_to_route('catagories.create', 'Create Catagories') !!}
    </p>
@endsection


