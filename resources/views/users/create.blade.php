@extends('posts.layouts.app')
@section('users-active', 'active')
@section('title', 'Create User')

@section('content')

    <h1 class="text-center my-5">Create User</h1>

    <div class="col-6 mx-auto">
        @include("inc.message")

        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="emai" class="form-label">Email</label>
                <input type="email" class="form-control" id="name" name="email">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="text" class="form-control" id="password" name="confirm_password">
            </div>
            <div class="mb-3">
                <select name="type" id="" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="writer">Writer</option>
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary form-control">Submit</button>
            </div>
        </form>
    </div>
@endsection
