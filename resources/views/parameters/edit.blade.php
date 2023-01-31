@extends('adminlte::page')

@section('title', 'Editar Parámetro')

@section('content_header')
    <h1>Editar Parámero</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('parameters.index') }}">Lista de parámetros</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Producto</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('parameters.update', $parameter->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ old('name', $parameter->name) }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Categoría -->
                <div class="form-group">
                    <label for="bia_id" class="form-label">BIA</label>
                    <select class="form-control" aria-label="Default select example" name="bia_id">
                        <option value="">-- Seleccione un BIA --</option>
                        @foreach ($bias as $bia)
                            <option value="{{ $bia->id }}" @selected(old('bia_id', $parameter->bia_id) == $bia->id)>{{ $bia->name }}</option>
                        @endforeach
                    </select>
                    @error('bia_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--Status -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="status" name="status" value="1"
                        @checked(old('status', $parameter->status)) />
                    <label class="custom-control-label" for="status">Activo</label>
                </div>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('parameters.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
