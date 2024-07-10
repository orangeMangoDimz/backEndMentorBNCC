<nav class="navbar navbar-expand-lg bg-dark p-4 sticky-top top-0" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Hockten</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('about') }}">About Us</a>
                </li>
            </ul>
            <div class="d-flex justify-content-center align-items-center gap-4">
                <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                <a href="" class="text-light">
                    <i class="bi bi-cart"></i>
                </a>
                <p class="text-light m-0">Hello, Udin</p>
            </div>
        </div>
    </div>
    </div>
</nav>
