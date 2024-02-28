@extends('posts.layouts.app')
@section('content')
@section('title',"Posts")
@section("posts-active","active")
<div class="col-5 mx-auto p-5">
    <h1 class="text-center">Posts</h1>
    <a href="{{route("posts.create")}} " class="btn btn-primary form-control">Create Post</a>
</div>
<div class="col-12 mx-auto my-3">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Description</td>
                <td>Category</td>
                <td>user</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->title}}</td>
                <td>{{\Str::limit($post->description,50)}}</td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->user->name}}</td>
                <td><a href="{{route("posts.edit",$post->id)}} " class="btn btn-info">Edit</a></td>
                <td>
                    <form action="{{route("posts.destroy",$post->id)}} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{$posts->links()}}
    </div>
</div>
@endsection
