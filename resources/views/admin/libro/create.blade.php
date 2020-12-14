@extends('admin.template')

@section('content')

    <div class="container text-center">

        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> Libros <small>[ Agregar libro ]</small>
            </h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">
                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    {!! Form::open(['route'=>'libro.store']) !!}

                    <div class="form-group">
                        <label class="" for="editorial">Editorial</label>
                        <select class="form-control" name="editoriales_id" id="editorial">
                            <option selected="">Seleccione una editorial</option>
                            @foreach($editoriales as $editorial)
                                <option value="{{ $editorial->id }}"> {{ $editorial->nombre }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        {!! Form::text('titulo', null, array('class'=>'form-control','placeholder' =>'Ingrese el título...','autofocus' => 'autofocus'))!!}
                    </div>

                    <div class="form-group">
                        <label for="sinopsis">Sinopsis:</label>
                        {!! Form::text('sinopsis', null, array('class'=>'form-control','placeholder' =>'Ingresa la sinopsis...','autofocus' => 'autofocus'))!!}
                    </div>

                    <div class="form-group">
                        <label for="n_paginas"># de páginas:</label>
                        {!! Form::number('n_paginas',	null,array('class'=>'form-control','placeholder' => 'Ingresa el # de páginas...',)) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                        <a href="{{ route('libro.index') }}" class="btn btn-warning">Cancelar</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@stop
