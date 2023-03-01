@extends('adminlte::page')

@section('title', 'Editar Causa')

@section('content_header')
    <h1>Editar Causa</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('causes.index') }}">Causas o Amenazas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Causa</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('causes.update', $cause->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $cause->name) }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="status" name="status" value="1"
                        @checked(old('status', $cause->status)) />
                    <label class="custom-control-label" for="status">Activo</label>
                </div>
                {{-- <x-adminlte-input-switch name="status" data-on-text="Si" data-off-text="No" data-on-color="success" data-off-color="danger" /> --}}
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('causes.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
