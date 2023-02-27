@extends('adminlte::page')

@section('title', 'Editar Nivel')

@section('content_header')
    <h1>Editar nivel de impacto</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('impact_levels.index') }}">Lista de niveles</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar nivel</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('impact_levels.update', $impactLevel->id) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- Valor -->
                <div class="form-group">
                    <label for="value" class="form">Valor</label>
                    <input type="number" name="value" class="form-control" value="{{ old('value', $impactLevel->value) }}" min=1>
                    @error('value')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Clasificación -->
                <div class="form-group">
                    <label for="value" class="form">Clasificación</label>
                    <input type="text" name="clasification" class="form-control" value="{{ old('clasification', $impactLevel->clasification) }}">
                    @error('clasification')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--description-->
                <div class="form-group">
                    <label for="description" class="form">Descripción</label>
                    <textarea name="description"  cols="30" rows="10" class="form-control">{{ old('description', $impactLevel->description) }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--Status -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="status" name="status" value="1"
                        @checked(old('status', $impactLevel->status)) />
                    <label class="custom-control-label" for="status">Activo</label>
                </div>
                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <!--Fin -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('impact_levels.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
