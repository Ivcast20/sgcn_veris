@extends('adminlte::page')

@section('title', 'Editar Estado de Tratamiento de Riesgos')

@section('content_header')
    <h1>{{ __('Editar Estado de Tratamiento de Riesgos') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('status_risks.index') }}">Lista de Opciones</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Estado de Tratamiento de Riesgos</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('status_risks.update', $status_risk->id) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label class="form-label">Nombre del Estado</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$status_risk->name) }}">
                    @error('name')
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
                        @checked(old('status', $status_risk->status))/>
                    <label class="custom-control-label" for="status">Activo</label>
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
