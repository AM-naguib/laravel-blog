<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo (request()->route()->getName() == 'home.index') ? 'active' : ''; ?>" aria-current="page" href="{{ route("home.index") }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @yield("posts-active")" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Posts
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route("posts.index")}}">All Posts</a></li>
                        <li><a class="dropdown-item" href="{{route("posts.create")}}">Add Post</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @yield("categories-active")" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route("categories.index")}}">All Categories</a></li>
                        <li><a class="dropdown-item" href="{{route("categories.create")}}">Add Category</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @yield("users-active")" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Users
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route("users.index")}}">All Users</a></li>
                        <li><a class="dropdown-item" href="{{route("users.create")}}">Add User</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex" role="search" method="get" action="{{route("posts.search")}}">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q" value="{{request()->q}}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
