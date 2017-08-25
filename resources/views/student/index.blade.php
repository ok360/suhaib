@extends('layout.master')
@section('body')

    <h1>Student Page</h1>
    <table border="1">
        <tr>
            <th>Name</th>
        </tr>

        @foreach($students as $student)
            <tr>
            <td>{{$student->name}}</td>
            </tr>
        @endforeach

    </table>

@endsection