@extends('adminlte::page')
@section('title', 'Editar Criterio')
@section('content_header')
    <h1 class="text-center">Editar Criterio</h1>
@stop
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('criterias.index') }}">Lista de Criterios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Criterio</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('criterias.update', $criteria->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form">Parámetro</label>
                    <input type="text" name="parameter" id="parameter" class="form-control" value="{{ old('parameter',$criteria->parameter->name) }}" readonly>
                </div>

                <div class="form-group">
                    <label for="name" class="form">Nivel</label>
                    <input type="text" name="level" id="level" class="form-control" value="{{ old('level',$criteria->level->name) }}" readonly>
                </div>

                <div class="form-group">
                    <label for="description" class="form">Descripción</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old('description', $criteria->description) }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!--Status -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="status" name="status" value="1"
                        @checked(old('status', $criteria->status)) />
                    <label class="custom-control-label" for="status">Activo</label>
                </div>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('criterias.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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