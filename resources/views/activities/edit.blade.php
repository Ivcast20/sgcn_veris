@extends('adminlte::page')

@section('title', 'Editar Actividad Crítica')

@section('content_header')
    <h1>{{ __('Editar Actividad Crítica') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item"><a href="{{ route('promedios.index', $activity->criticproduct->bia_process_id) }}">Promedios de calificaciones de productos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('activities.index', ['bia_id' => $activity->criticproduct->bia_process_id, 'product_id' => $activity->criticproduct->id]) }}">Actividades</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('Editar Actividad Crítica') }}</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('activities.update', $activity->id) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $activity->name) }}" readonly>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--Total Score -->
                <div class="form-group">
                    <label for="total_score" class="form">Calificacion Total</label>
                    <input type="text" name="total_score" id="total_score" class="form-control"
                        value="{{ old('total_score', $activity->total_score) }}" readonly>
                    @error('total_score')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- MTPD -->
                <div class="form-group">
                    <label>MTPD</label>
                    <input type="text" name="mtpd" class="form-control"
                        value="{{ old('mtpd', $activity->mtpd) }}">
                    @error('mtpd')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- RTO -->
                <div class="form-group">
                    <label>RTO</label>
                    <input type="text" name="rto" class="form-control"
                        value="{{ old('rto', $activity->rto) }}">
                    @error('rto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- RPO -->
                <div class="form-group">
                    <label>RPO</label>
                    <input type="text" name="rpo" class="form-control"
                        value="{{ old('rpo', $activity->rpo) }}">
                    @error('rpo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Mínimo nivel aceptable -->
                <div class="form-group">
                    <label>Mínimo nivel aceptable de desempeño</label>
                    <input type="text" name="aceptable_minimun" class="form-control"
                        value="{{ old('aceptable_minimun', $activity->aceptable_minimun) }}">
                    @error('aceptable_minimun')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Prioridad de recuperación	-->
                <div class="form-group">
                    <label>Prioridad de recuperación</label>
                    <input type="number" name="priority" class="form-control" min="1" max="100"
                        value="{{ old('priority', $activity->priority) }}">
                    @error('priority')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Dependencia de otros procesos -->
                <div class="custom-control custom-switch">
                    <input 
                        type="checkbox"
                        class="custom-control-input"
                        name="other_proc_depen"
                        @checked(old('other_proc_depen', $activity->other_proc_depen))/>
                    <label class="custom-control-label">Dependencia de otros procesos</label>
                </div>
                @error('other_proc_depen')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <!-- ¿Qué procesos? ( en caso de aplicar) -->
                <div class="form-group pt-2">
                    <label>¿Qué procesos? ( en caso de aplicar)</label>
                    <textarea class="form-control" name="processes" rows="3">{{ old('processes', $activity->processes) }}</textarea>
                    @error('processes')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Periodos críticos -->
                <div class="form-group">
                    <label>Periodos críticos</label>
                    <textarea class="form-control" name="criticial_periods" rows="3">{{ old('criticial_periods', $activity->criticial_periods) }}</textarea>
                    @error('criticial_periods')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Procedimientos Alternativos -->
                <div class="form-group">
                    <label>Procedimientos Alternativos</label>
                    <textarea class="form-control" name="procedure" rows="3">{{ old('procedure', $activity->procedure) }}</textarea>
                    @error('procedure')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Cantidad de personas en operacion normal -->
                <div class="form-group">
                    <label for="normal_op_people">Cantidad de personas en operacion normal</label>
                    <textarea class="form-control" id="normal_op_people" name="normal_op_people" rows="3">{{ old('normal_op_people', $activity->normal_op_people) }}</textarea>
                    @error('normal_op_people')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Cantidad de personas requeridas -->
                <div class="form-group">
                    <label>Cantidad de personas requeridas</label>
                    <textarea class="form-control" name="people_required" rows="3">{{ old('people_required', $activity->people_required) }}</textarea>
                    @error('people_required')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Aplicaciones -->
                <div class="form-group">
                    <label>Aplicaciones</label>
                    <textarea class="form-control" name="applications" rows="3">{{ old('applications', $activity->applications) }}</textarea>
                    @error('applications')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Equipos -->
                <div class="form-group">
                    <label>Equipos</label>
                    <textarea class="form-control" name="equiptment" rows="3">{{ old('equiptment', $activity->equiptment) }}</textarea>
                    @error('equiptment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Servicio tecnológico -->
                <div class="form-group">
                    <label>Servicio tecnológico</label>
                    <textarea class="form-control" name="services" rows="3">{{ old('services', $activity->services) }}</textarea>
                    @error('services')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Espacio Físico -->
                <div class="form-group">
                    <label>Espacio Físico</label>
                    <textarea class="form-control" name="physical_space" rows="3">{{ old('physical_space', $activity->physical_space) }}</textarea>
                    @error('physical_space')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Personas -->
                <div class="form-group">
                    <label>Personas</label>
                    <textarea class="form-control" name="people" rows="3">{{ old('people', $activity->people) }}</textarea>
                    @error('people')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Competencias personales -->
                <div class="form-group">
                    <label>Competencias personales</label>
                    <textarea class="form-control" name="skills" rows="3">{{ old('skills', $activity->skills) }}</textarea>
                    @error('skills')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Proveedores -->
                <div class="form-group">
                    <label>Proveedores</label>
                    <textarea class="form-control" name="providers" rows="3">{{ old('providers', $activity->providers) }}</textarea>
                    @error('providers')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Otros recursos -->
                <div class="form-group">
                    <label>Otros recursos</label>
                    <textarea class="form-control" name="other_resources" rows="3">{{ old('other_resources', $activity->other_resources) }}</textarea>
                    @error('other_resources')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Fin -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('activities.index', ['bia_id' => $activity->criticproduct->bia_process_id, 'product_id' => $activity->criticproduct->id]) }}" class="btn btn-secondary mr-2">Cancelar</a>
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
