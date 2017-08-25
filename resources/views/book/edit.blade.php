{!! Form::open(['url'=>['book/'.$book->id],'method'=>'put']) !!}
{!! Form::text('title',$book->title) !!}
{{--<input type="text" name="title" value="{{$book->title}}">--}}
{!! Form::submit('Save') !!}
{{Form::close()}}