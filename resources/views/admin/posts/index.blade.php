@extends('layouts.admin')


@section('content')

    <h1>Posts</h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created On</th>
            <th>Updated On</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)

          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category_id}}</td>
            <td><img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" height="50"></td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
          </tr>

          @endforeach

            @endif

      </tbody>
    </table>

@stop