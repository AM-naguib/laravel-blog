@extends('posts.layouts.app')
@section('posts-active', 'active')
@section('title', 'Search')

@section('content')
    <h1 class="text-center my-5">Search : {{request()->q}} </h1>
    <div class="col-7 mx-auto">
        @if (count($posts) == 0)
        <div class="alert alert-danger">
            No Post Found
        </div>
        @else
        @foreach ($posts as $post)
        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}} </h5>
                <p class="card-text">{{$post->title}} </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
        @endif
    </div>
@endsection
