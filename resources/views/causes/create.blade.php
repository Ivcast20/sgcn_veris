@extends('adminlte::page')

@section('title', 'Nueva Causa')

@section('content_header')
    <h1>'Nueva Causa</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('causes.index') }}">Causas o Amenazas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nueva Causa</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('causes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
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
