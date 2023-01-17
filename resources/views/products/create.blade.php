@extends('adminlte::page')

@section('title', 'Nuevo Producto')

@section('content_header')
    <h1>Nuevo Producto</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Lista de productos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Producto</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Categoría -->
                <div class="form-group">
                    <label for="categoría" class="form-label">categoría</label>
                    <select class="form-control" aria-label="Default select example" name="category_id">
                        <option value="">-- Seleccione una categoría --</option>
                        @foreach ($categorias as $key => $value)
                            <option value="{{ $key }}" @selected(old('category_id') == $key)>{{ $value }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                @foreach ($categorias as $key => $value)
                    {{ $key }} => {{ $value }}
                @endforeach
            </form>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
