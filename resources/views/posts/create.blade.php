@extends('posts.layouts.app')
@section('posts-active', 'active')
@section('title', 'Create Post')

@section('content')

    <h1 class="text-center my-5">Create Post</h1>

    <div class="col-6 mx-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        <form action="{{ route('posts.store') }} " method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Discription</label>
                <textarea name="description" id="" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <select name="category_id" id="" class="form-select">
                    @if ($categories->count() > 0)
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach

                    @endif

                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary form-control">Submit</button>
            </div>
        </form>
    </div>
@endsection
