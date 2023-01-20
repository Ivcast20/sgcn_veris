@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Lista de productos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Producto</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
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
                            <option value="{{ $key }}" @selected(old('category_id', $product->category_id) == $key)>{{ $value }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
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
                        @checked(old('status',$product->status))/>
                    <label class="custom-control-label" for="status">Activo</label>
                </div>
                @error('status')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
