hello

@extends('app')


    <table class="table table-striped table-bordered">
        <tbody>
        @foreach($catagories as $catagory);

        <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->subject }}</td>
                <td>{{ $value->status }}</td>
                <td>{{ $value->completed }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->catagory_id }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>


                    <a class="btn btn-small btn-success" href="{{ URL::to('posts/'.$value->id) }}">View post</a>
                    <a class="btn btn-small btn-success" href="{{ URL::to('posts/'.$value->id.'/edit/') }}">Edit Post</a>

                    {!! Form::open(array('method'=> 'DELETE', 'route' => array('posts.destroy', $value->id))) !!}
                    {!! Form::submit('Delete', array('class'=> 'btn btn-danger')) !!}
                    {!! Form::close() !!}

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
