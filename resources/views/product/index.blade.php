@extends('layout.master')
@section('body')
<h1>Product Names List</h1>
<a href="{{url ('product/create')}}" class="btn btn-default">Create</a>
<table class="table table-bordered">
        <tr>
                <th>No</th>
                <th>Title</th>
                <th>created at</th>
        </tr>
        @foreach($products as $product)
        <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->created_at->diffForHumans()}}</td>
        </tr>

                @endforeach
</table>




@endsection