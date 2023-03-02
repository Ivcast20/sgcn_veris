@extends('adminlte::page')

@section('title', 'Nuevo nivel de riesgo')

@section('content_header')
    <h1>Nuevo nivel de riesgo</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('risk_levels.index') }}">Lista de niveles de riesgo</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo nivel de riesgo</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('risk_levels.store') }}" method="POST">
                @csrf
                {{-- 'range',
                'clasification',
                'description',
                'status' --}}
                <!-- range -->
                <div class="form-group">
                    <label for="name" class="form">Rango</label>
                    <input type="text" name="range" id="range" class="form-control" value="{{ old('range') }}">
                    @error('range')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- clasification -->
                <div class="form-group">
                    <label for="value" class="form">Clasificación</label>
                    <input type="text" name="clasification" id="clasification" class="form-control" value="{{ old('clasification') }}">
                    @error('clasification')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--description-->
                <div class="form-group">
                    <label for="description" class="form">Descripción</label>
                    <textarea name="description"  cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- FIN -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('risk_levels.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
