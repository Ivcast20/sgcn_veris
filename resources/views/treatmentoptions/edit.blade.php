@extends('adminlte::page')

@section('title', 'Editar opción de tratamiento')

@section('content_header')
    <h1>{{ __('Editar opción de tratamiento') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('treatmentoptions.index') }}">Lista de Opciones</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar opción de tratamiento</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('treatmentoptions.update', $treatmentoption->id) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- Estrategia -->
                <div class="form-group">
                    <label class="form-label">Estrategia</label>
                    <input 
                        type="text" 
                        name="strategy" 
                        id="strategy" 
                        class="form-control" value="{{ old('strategy', $treatmentoption->strategy) }}">
                    @error('strategy')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Descripción -->
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea 
                        class="form-control" 
                        name="description" 
                        rows="3">{{ old('description', $treatmentoption->description) }}</textarea>
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
                        @checked(old('status', $treatmentoption->status))/>
                    <label class="custom-control-label" for="status">Activo</label>
                </div>
                <!-- FIN -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('treatmentoptions.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
