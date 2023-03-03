@extends('adminlte::page')

@section('title', 'Editar Actividad')

@section('content_header')
    <h1>{{ __('Editar Actividad') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
            <li class="breadcrumb-item"><a
                    href="{{ route('promedios.index', $activity->criticproduct->bia_process_id) }}">Promedios de calificaciones
                    de productos</a></li>
            <li class="breadcrumb-item"><a
                    href="{{ route('activities.index', ['bia_id' => $activity->criticproduct->bia_process_id, 'product_id' => $activity->criticproduct->id]) }}">Actividades</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Editar Actividad') }}</li>
        </ol>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('activities.update2', $activity) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $activity->name) }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--Total Score -->
                <div class="form-group">
                    <label for="total_score" class="form">Total</label>
                    <input type="text" name="total_score" id="total_score" class="form-control"
                        value="{{ old('total_score', $activity->total_score) }}" readonly>
                    @error('total_score')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Es crítica -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="is_critical" name="is_critical"
                        @checked(old('is_critical', $activity->is_critical)) />
                    <label class="custom-control-label" for="is_critical">Es crítica</label>
                </div>
                @error('is_critical')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <!-- Justificación -->
                <div class="form-group pt-2">
                    <label for="justificacion">Justificación</label>
                    <textarea class="form-control" id="justificacion" name="justificacion" rows="3">{{ old('justificacion', $activity->justificacion) }}</textarea>
                    @error('justificacion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Status -->
                <div class="custom-control custom-switch">
                    <input 
                        type="checkbox"
                        class="custom-control-input"
                        id="status" 
                        name="status"
                        @checked(old('status', $activity->status))/>
                    <label class="custom-control-label" for="status">Activa</label>
                </div>
                <!-- Fin -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('bias.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
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
