@extends('layout.master')

@section('body')
<h1>Image Manage</h1>
<form action="{{route ('image.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field ()}}
    <label for="">Select Image</label> <input type="file" name="image">
    <input type="submit" value="Upload">

</form>
@foreach($images as $image)
<img src="{{asset ('images/'.$image->image)}}" alt="" height="300px"
     width="300px">
    @endforeach
    @endsection