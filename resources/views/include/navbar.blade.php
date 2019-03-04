<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/">Whittington's Wheels</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/home">News</a>
                <a class="nav-item nav-link" href="/about">About</a>
                <a class="nav-item nav-link" href="/contact">Contact</a>
                <a class="nav-item nav-link" href="/test">Testing Page</a>
                <a class="nav-item nav-link disabled" href="/showroom">Showroom</a>
                <a class="nav-item nav-link" href="https://github.com/Halfwhit/whits-wheels">Github</a>
            </div>
        </div>


        <form class="form-inline">
            <a class="btn btn-sm btn-outline-secondary" role="button" href="/projects">Admin Panel</a>
        </form>


        <form class="form-inline">
            @guest
                <a class="btn btn-sm btn-outline-secondary" role="button" href="{{ route('login') }}">Login</a>
            @else
                <a class="btn btn-sm btn-outline-secondary" role="button" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            @endguest
        </form>
    </div>
</nav>
