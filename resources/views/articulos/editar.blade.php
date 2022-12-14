@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar Artículo </h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <form action="{{ route('articulos.update',$articulo->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" name="titulo" class="form-control" value="{{ $articulo->titulo }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="autor">Autor</label>
                                        <input type="text" name="autor" class="form-control" value="{{ $articulo->autor }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-floating">
                                        <label for="contenido">Contenido</label>
                                        <textarea class="form-control" name="contenido" style="height: 100px">{{ $articulo->contenido }}</textarea>
                                    </div>
                                </div>
                                <!-- Imagen metodo -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image:</strong>
                                        <input type="file" name="image" class="form-control" placeholder="image">
                                        <img src="/image/{{ $articulo->image }}" width="100px">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                <!-- Fin del metodo de la imagen -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection