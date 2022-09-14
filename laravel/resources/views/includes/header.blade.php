<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
            <ul class="">
                <li><a class="" href="{{ route('comics.index') }}">Comics</a></li>
                <li><a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi un fumetto</a></li>
            </ul>
        </div>
    </div>
</nav>