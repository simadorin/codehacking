@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Owner</th>
                <th>Title</th>
                <th>Photo</th>
                <th>Category</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->user->name}}</td>
                        <td><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
                        <td><img height="50"  src="{{$post->photo ? $post->photo->file : '/public/images/Placeholder.jpg'}}" alt=""></td>
                        <td>{{$post->category_id}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

@endsection
