@extends('adminlte::page')

@section('title', 'Editar Categoría')

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorías</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Categoría</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update',$category->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$category->name) }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="custom-control custom-switch">
                    <input 
                        type="checkbox"
                        class="custom-control-input"
                        id="status" 
                        name="status" 
                        value="1"
                        @checked(old('status',$category->status))/>
                    <label class="custom-control-label" for="status">Activo</label>
                </div>
                @error('status')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
