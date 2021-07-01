@extends('layouts.app')
@section('content')
<a class="nav-link"href="{{ url('/posts') }}">go back</a>
<h1> {{$post->title}}</h1>
<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
<br>
     <div>
         {{$post->body}}
     </div>
<hr>
<small>written on {{$post->created_at}}  </small>
 <hr>

    <a href="{{ url('/posts')}}/{{$post->id}} /edit" class= "btn btn-primary">Edit</a>
 
    {!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST','class'=> 'pull-right'])!!}
      {{Form::hidden('_method','DELETE')}}
      {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
