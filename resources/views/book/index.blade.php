<h1>Book Management</h1>

{!! Form::open(['url'=>'book','method'=>'post']) !!}
{!! Form::text('title') !!}
{!! Form::submit('Save') !!}
{{Form::close()}}

<table border="1">
    <tr>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book->title}}</td>
            <td>

                {!! Form::open(['url'=>['book/'.$book->id],'method'=>'delete']) !!}
                <a href="{{url ('book/'.$book->id.'/edit')}}">Edit</a>
                {!! Form::submit('X') !!}
                {{Form::close()}}
            </td>
        </tr>
        @endforeach
</table>