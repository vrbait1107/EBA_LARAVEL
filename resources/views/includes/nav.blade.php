<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Event Branding Application</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{ route('signup') }}">SignUp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{ route('signin') }}">Signin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="">Admin Signin</a>
            </li>
        </ul>
    </div>
</nav>