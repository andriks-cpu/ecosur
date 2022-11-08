@extends('layouts.estilos')


<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="" src="{{ asset('img/logo.png') }}" width="65" height=""
                    class="d-inline-block align-text-top">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Acceder</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach( $articulos as $articulo)
        <div class="col">
            <div class="card h-100">
                <img src="/image/{{ $articulo->image }}" height="200px" class="card-img-top" alt="..naiz.">
                <div class="card-body">
                    <h5 class="card-title">{{ $articulo->titulo }}</h5>
                    <p class="card-text">{{ $articulo->autor }}</p>

                    <p class="card-text">{{ Illuminate\Support\Str::of ($articulo->contenido)->words(20) }}</p>
                    <a class="btn btn-info" href="{{ route('show',$articulo->id) }}">Mostrar</a>



                </div>
            </div>
        </div>

        @csrf
        @endforeach
    </div>
    <!-- Ubicamos la paginacion a la derecha -->
    <div class="pagination justify-content-end">
        {!! $articulos->links() !!}
    </div>
</div>
