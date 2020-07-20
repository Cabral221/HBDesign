<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav">
                <li class="nav-item mr-auto">
                    <a class="nav-link" href="{{ route('welcome') }}">
                        <img src="{{ asset('img/logo.jpeg') }}" class="mr-3" height="30px" alt="Logo HB" >Interface utilisateur<span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item ml-auto left-align active">
                    <a href="{{ route('home') }}" class="nav-link" >Administration</a>
                </li>
                <li class="nav-item ml-auto left-align">
                    <a href="#" class="nav-link btn btn-outline-danger" onclick="event.preventDefault();document.getElementById('form-logout').submit()">Déconnexion</a>
                    <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>