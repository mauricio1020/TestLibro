@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>
                Libros <a href="{{ route('libro.create') }}" class="btn btn-warning">
                    <i class="fa fa-plus-circle"></i>Libros
                </a>
            </h1>
        </div>
        <form  method="GET" action="{{ route("libro.index") }}" >
            @csrf

            <div class="form-group">
                <label class="" for="genero">Libro</label>
                <select class="form-control" name="genero" id="genero">
                    <option selected="" value="">Seleccione</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>

        <div class="page">
            <div class="table-reponsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Editorial</th>
                        <th>Título</th>
                        <th>sinopsis</th>
                        <th># De Páginas</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($libros as $libro)
                        <tr>
                            <td>{{ $libro->id }}</td>
                            <td>{{ $libro->editorial->nombre }}</td>
                            <td>{{ $libro->titulo }}</td>
                            <td>{{ $libro->sinopsis }}</td>
                            <td>{{ $libro->n_paginas }}</td>
                            <td>
                                <a href="{{ route('libro.edit', $libro->id) }}" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['libro.destroy', $libro->id]]) !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <hr>

            <?php echo $libros->render(); ?>

        </div>
    </div>
@stop


