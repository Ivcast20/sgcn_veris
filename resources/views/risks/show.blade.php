@extends('adminlte::page')

@section('title', 'Detalle del Riesgo')

@section('content_header')
    <h1>{{ __('Detalle del Riesgo') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('risks.index') }}">Riesgos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detalle de Riesgo</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <!-- code -->
            <div class="form-group">
                <label class="form">Código</label>
                <input type="text" name="code" class="form-control" value="{{ $risk->code }}" readonly>
            </div>
            <!-- BIA -->
            <div class="form-group">
                <label class="form">BIA</label>
                <input type="text" name="code" class="form-control" value="{{ $risk->bia->name }}" readonly>
            </div>
            <!-- description -->
            <div class="form-group">
                <label class="form">Descripción</label>
                <textarea type="text" name="description" class="form-control" readonly>{{ $risk->description }}</textarea>
            </div>
            <!-- Fuente -->
            <div class="form-group">
                <label class="form">Fuente</label>
                <input type="text" name="code" class="form-control" value="{{ $risk->source->name }}" readonly>
            </div>
            <!-- causes -->
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-bold">
                        Causas
                    </div>
                    <table class="table">
                        <thead class="table-primary">
                            <th>Id</th>
                            <th>Nombre de la causa</th>
                        </thead>
                        <tbody>
                            @foreach ($risk->causes as $causa)
                                <tr>
                                    <td>{{ $causa->id }}</td>
                                    <td>{{ $causa->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group mt-2">
                        <label class="form">Consecuencias</label>
                        <textarea type="text" 
                            name="consecuences" 
                            class="form-control" 
                            style="height: 100%" 
                            rows="8"
                            readonly>{{ $risk->consecuences }}</textarea>
                    </div>
                </div>
            </div>
            <!-- Departamentos -->
            <div class="py-2">
                <div class="text-bold">
                    Dueño de riesgo
                </div>
                <table class="table">
                    <thead class="table-primary">
                        <th>Id</th>
                        <th>Dueño de riesgo</th>
                    </thead>
                    <tbody>
                        @foreach ($risk->departments as $depa)
                            <tr>
                                <td>{{ $depa->id }}</td>
                                <td>{{ $depa->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- existing_controls -->
            <div class="form-group">
                <label class="form">Controles existentes</label>
                <textarea type="text" name="existing_controls" class="form-control" rows="5" readonly>{{ $risk->existing_controls }}</textarea>
                @error('existing_controls')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- probability -->
            <div class="form-group">
                <label class="form">Nivel de probabilidad</label>
                <input type="text" name="code" class="form-control" value="{{ $risk->probability }}" readonly>
            </div>
            <!-- impact -->
            <div class="form-group">
                <label class="form">Nivel de impacto</label>
                <input type="text" name="code" class="form-control" value="{{ $risk->impact }}" readonly>
            </div>
            <!-- risk_level -->
            <div class="form-group">
                <label class="form">Nivel de riesgo</label>
                <input type="text" name="risk_level" class="form-control" value="{{ $risk->risk_level }}" readonly>
            </div>
            <!-- is_aceptable -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="is_aceptable" @checked($risk->is_aceptable) disabled>
                <label class="form-check-label" for="flexSwitchCheckDefault">
                    <p class="fw-bolder">Es aceptable</p>
                </label>
            </div>
            <!-- treatment_option_id -->
            <div class="form-group">
                <label class="form">Opción de tratamiento</label>
                <input type="text" name="risk_level" class="form-control" value="{{ $risk->treatment_option->strategy }}" readonly>
            </div>
            <!-- treatment_plan -->
            <div class="form-group">
                <label class="form">Plan de tratamiento</label>
                <textarea type="text" name="treatment_plan" class="form-control" readonly>{{ $risk->treatment_plan }}</textarea>
                @error('treatment_plan')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- responsable -->
            <div class="form-group">
                <label class="form">Responsable</label>
                <textarea type="text" name="responsable" class="form-control" readonly>{{ $risk->responsable }}</textarea>
            </div>
            <!-- resources -->
            <div class="form-group">
                <label class="form">Recursos</label>
                <textarea type="text" name="resources" class="form-control" readonly>{{ $risk->resources }}</textarea>
            </div>
            <!-- start_date -->
            <div class="form-group">
                <label class="form">Fecha de inicio</label>
                <input type="date" name="start_date" class="form-control" value="{{ $risk->start_date }}" readonly>
            </div>
            <!-- end_date -->
            <div class="form-group">
                <label class="form">Fecha de fin</label>
                <input type="date" name="end_date" class="form-control" value="{{ $risk->end_date }}" readonly>
            </div>
            <!-- status_id -->
            <div class="form-group">
                <label class="form">Estado de tratamiento</label>
                <input type="text" name="end_date" class="form-control" value="{{ $risk->treatment_status->name }}" readonly>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
