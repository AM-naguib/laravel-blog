@extends('posts.layouts.app')
@section('users-active', 'active')
@section('title', 'Edit User')

@section('content')

    <h1 class="text-center my-5">Edit User</h1>

    <div class="col-6 mx-auto">
        @include("inc.message")

        <form action="{{ route('users.update',$user->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label for="emai" class="form-label">Email</label>
                <input type="email" class="form-control" id="name" name="email" value="{{$user->email}}">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}">
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
