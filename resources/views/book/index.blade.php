@extends('layout.master')
@section('body')
<h1>Book Management</h1>

@if($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>

@endif

@if(session ('success'))

    <div class="alert alert-success">
        <h3>{{session('success')}}</h3>
    </div>

@endif
{!! Form::open(['url'=>'book','method'=>'post']) !!}
{!! Form::text('title') !!}
{!! Form::submit('Save') !!}
{{Form::close()}}

<table border="1">
    <tr>
        <th>Title</th>
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

@endsection