@extends('adminlte::page')

@section('title', 'Nuevo Estado de Tratamiento de Riesgos')

@section('content_header')
    <h1>{{ __('Nuevo Estado de Tratamiento de Riesgos') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('status_risks.index') }}">Lista de Opciones</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Estado de Tratamiento de Riesgos</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('status_risks.store') }}" method="POST">
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label class="form-label">Nombre del Estado</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- FIN -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('status_risks.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
