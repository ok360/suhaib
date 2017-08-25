@extends('layout.master')
@section('body')

<h1>Create Product</h1>
<form action="{{url ('product/store')}}" method="post">
    {{csrf_field ()}}
    Title:<input type="text" name="title">
    <button type="submit">Save</button>
</form>
@endsection