@extends('adminlte::page')

@section('title', 'Editar Departamento')

@section('content_header')
    <h1>{{__('Editar Departamento')}}</h1>
@stop

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('departments.index') }}">Departamentos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar Departamento</li>
</ol>
<div class="card">
    <div class="card-body">
        <form action="{{ route('departments.update', $department->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$department->name) }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" class="form">Descripción</label>
                <textarea type="text" name="description" id="description" class="form-control">{{ old('description',$department->description) }}</textarea>
                @error('description')
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
                    @checked(old('status',$department->status))/>
                <label class="custom-control-label" for="status">Activo</label>
            </div>
            @error('status')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="d-flex justify-content-center mt-2">
                <a href="{{ route('departments.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
                <button type="submit" class="btn btn-success">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop