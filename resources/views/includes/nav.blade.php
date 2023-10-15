<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('peliculas.index') }}">Netflix 2</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('peliculas.index') }}">Peliculas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('genero.index') }}">Géneros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clasificacion.index') }}">Clasificaciones</a>
            </li>
        </ul>
    </div>
</nav>