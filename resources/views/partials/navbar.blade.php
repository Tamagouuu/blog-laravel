<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">Tama Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                <a class="nav-link {{ (request()->segment(1) == 'about') ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ (request()->segment(1) == 'blog') ? 'active' : '' }}" href="/blog">Blog</a>
                <a class="nav-link {{ (request()->segment(1) == 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
            </div>
            <div class="navbar-nav ms-auto dropdown">
                @auth
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window me-1"></i> My Dashboard</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item" name="logout"><i class="bi bi-box-arrow-left me-1"></i> Logout</button>
                        </form>
                    </li>
                </ul>
                @else
                <a class="nav-link  {{ (request()->segment(1) == 'login') ? 'active' : '' }}" aria-current="page" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
