@extends('posts.layouts.app')
@section('categories-active', 'active')
@section('title', 'Edit Category')

@section('content')

    <h1 class="text-center my-5">Edit Category</h1>

    <div class="col-6 mx-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        <form action="{{ route('categories.update', $category->id) }} " method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label" >name</label>
                <input type="text" class="form-control" id="title" name="name" value="{{$category->name}}">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary form-control">Submit</button>
            </div>
        </form>
    </div>
@endsection
