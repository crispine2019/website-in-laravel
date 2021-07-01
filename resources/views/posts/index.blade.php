@extends('layouts.app')
@section('content')
<h1> posts</h1>

  @if(count($posts)>0)
 
      @foreach($posts as $post)
      <table class="table table-striped">
         <div class="well">
            <div class="row">
               <div class="col-md-4 col-sm-4">
               <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
            <div class="col-md-8 col-sm-8">
         <h3><a class="nav-link" href="posts/{{$post->id}}">{{$post->title}}</a></h3>
         <small>written on {{$post->created_at}}  </small>
         </div>   
      @endforeach
      {{$posts->links()}}
@else
   <p>no posts found</p>
      </table>
  @endif 
@endsection
