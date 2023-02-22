@extends('adminlte::page')

@section('title', 'Nueva Fuente')

@section('content_header')
    <h1>{{ __('Nueva Fuente de Riesgo') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('sources.index') }}">Fuentes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Usuario</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('sources.store') }}" method="POST">
                @csrf
                <!-- NOMBRE -->
                <div class="form-group">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- DESCRIPCION -->
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- FIN -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('sources.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
