@extends('adminlte::page')

@section('title', 'Editar Fuente')

@section('content_header')
    <h1>{{ __('Editar Fuente de Riesgo') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('sources.index') }}">Fuentes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Fuente</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('sources.update', $source->id) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- NOMBRE -->
                <div class="form-group">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $source->name) }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- DESCRIPCION -->
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description', $source->description) }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--Status -->
                <div class="custom-control custom-switch">
                    <input 
                        type="checkbox"
                        class="custom-control-input"
                        id="status" 
                        name="status" 
                        value="1"
                        @checked(old('status',$source->status))/>
                    <label class="custom-control-label" for="status">Activa</label>
                </div>
                @error('status')
                <span class="text-danger">{{ $message }}</span>
                @enderror
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
