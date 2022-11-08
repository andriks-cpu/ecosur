@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 mt-5 mb-5">
                <div class="card d-block gb-light" style="width: 250px;">
                    <img class="card-img-top" src="/image/{{ $articulo->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $articulo->titulo }}</h5>
                        <p class="card-text">{{ $articulo->autor }}</p>
                        <p class="card-text">{{ $articulo->contenido }}</p>
                        <a class="btn btn-primary" href="{{ route('articulos.index') }}">Ver descripcion completa</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection