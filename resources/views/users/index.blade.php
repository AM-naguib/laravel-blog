@extends('posts.layouts.app')
@section('content')
@section('title',"Users")
@section("users-active","active")
<div class="col-5 mx-auto p-5">
    <h1 class="text-center">Users</h1>
    <a href="{{route("users.create")}} " class="btn btn-primary form-control">Create User</a>
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
                <td>Name</td>
                <td>email</td>
                <td>Type</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{!!$user->type()!!}</td>
                <td><a href="{{route("users.edit",$user->id)}} " class="btn btn-info">Edit</a></td>
                <td>
                    <form action="{{route("users.destroy",$user->id)}} " method="POST">
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
        {{$users->links()}}
    </div>
</div>
@endsection
