<!doctype html>
<html lang="en">

<head>
    {{-- head --}}
    @include('posts.layouts.head')
</head>

<body>
    @include('posts.layouts.nav')
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
    {{-- scripts --}}
    @include('posts.layouts.scripts') </body>

</html>
