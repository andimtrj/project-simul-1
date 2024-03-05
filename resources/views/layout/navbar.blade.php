<nav class="navbar navbar-expand-lg" style="background-color: white; margin-bottom: 10px;">
    <div class="container">
        <div class="navbar-brand">
        <a href="{{ route("home") }}"><img class="mx-auto" src="assets/Logo.png" alt="cimbLogo" style="height: 5rem; width: auto;"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
        <div style="color: #9C0404;">Welcome, Admin!</div>  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/Profile.png" alt="Prof" class="rounded-circle" style="width: auto; height: 80px; object-fit: cover;">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="font-size: 25px" href="Super.html">Profile</a></li>
                        <li><a class="dropdown-item" style="font-size: 25px" href="{{ route('logout') }}">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>

<style>
    .navbar {
    border-bottom: 3px solid #9C0404;
    }
</style>