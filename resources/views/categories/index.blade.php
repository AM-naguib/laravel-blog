@extends('posts.layouts.app')
@section('content')
@section('title', 'Categories')
@section('categories-active', 'active')
<div class="col-5 mx-auto p-5">
    <h1 class="text-center">Categories</h1>
    <a href="{{ route('categories.create') }} " class="btn btn-primary form-control">Create category</a>
</div>
<div class="col-12 mx-auto my-3">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('categories.edit', $category->id) }} " class="btn btn-info">Edit</a></td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
