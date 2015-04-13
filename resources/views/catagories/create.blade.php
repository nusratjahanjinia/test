@extends('app')

@section('content')
    <h2>Create Catagories</h2>

    {!! Form::model(new App\Catagory, ['route' => ['catagories.store']]) !!}
    @include('catagories/partials/form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
@endsection