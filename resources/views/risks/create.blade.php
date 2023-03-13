@extends('adminlte::page')

@section('title', 'Agregar Riesgo')

@section('content_header')
    <h1>{{ __('Agregar Riesgo') }}</h1>
@stop

@section('plugins.Select2', true)

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('risks.index') }}">Riesgos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear Riesgo</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('risks.store') }}" method="POST">
                @csrf
                <!-- code -->
                {{-- <div class="form-group">
                    <label class="form">Código</label>
                    <input type="text" name="code" class="form-control" value="{{ old('code') }}">
                    @error('code')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}
                <!-- bia_id -->
                <div class="form-group">
                    <label class="form-label">BIA</label>
                    <select class="form-control" aria-label="Default select example" name="bia_id" id="bia_id">
                        <option value="">-- Seleccione una opción --</option>
                        @foreach ($bias as $bia)
                            <option value="{{ $bia->id }}" @selected(old('bia_id') == $bia->id)>{{ $bia->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('bia_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- source_id -->
                <div class="form-group">
                    <label class="form-label">Fuente del riesgo</label>
                    <select class="form-control" aria-label="Default select example" name="source_id">
                        <option value="">-- Seleccione una opción --</option>
                        @foreach ($sources as $source)
                            <option value="{{ $source->id }}" @selected(old('source_id') == $source->id)>{{ $source->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('source_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- description -->
                <div class="form-group">
                    <label class="form">Descripción</label>
                    <textarea type="text" name="description" class="form-control">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- causes -->
                <div class="text-bold">
                    Causas
                </div>
                <select name="causes[]" id="multipleselect" multiple class="form-control">
                    @foreach ($causes as $cause)
                        <option value="{{ $cause->id }}" @selected(collect(old('causes'))->contains($cause->id))>{{ $cause->name }}
                        </option>
                    @endforeach
                </select>
                @error('causes')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <!-- consecuences -->
                <div class="form-group mt-2">
                    <label class="form">Concecuencias</label>
                    <textarea type="text" name="consecuences" class="form-control">{{ old('consecuences') }}</textarea>
                    @error('consecuences')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- departments -->
                {{-- <div class="form-group">
                    <label class="form-label">Dueño del riesgo</label>
                    <select class="form-control" aria-label="Default select example" name="risk_owner_id"
                        id="risk_owner_id">
                        <option value="">-- Seleccione una dueño de riesgo --</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}" @selected(old('risk_owner_id') == $department->id)>{{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('risk_owner_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}
                <div class="text-bold">
                    Dueño(s) del riesgo
                </div>
                <select name="departments[]" id="select_multiple" multiple class="form-control">
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" 
                            @selected(collect(old('departments'))->contains($department->id))>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
                @error('departments')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <!-- existing_controls -->
                <div class="form-group mt-2">
                    <label class="form">Controles existentes</label>
                    <textarea type="text" name="existing_controls" class="form-control">{{ old('existing_controls') }}</textarea>
                    @error('existing_controls')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- probability -->
                <div class="form-group">
                    <label class="form-label">Nivel de probabilidad</label>
                    <select class="form-control" aria-label="Default select example" name="probability" id="probability">
                        <option value="">-- Seleccione un nivel --</option>
                        @foreach ($probability_levels as $probability)
                            <option value="{{ $probability->value }}" @selected(old('probability') == $probability->value)>
                                {{ $probability->clasification }}</option>
                        @endforeach
                    </select>
                    @error('probability')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- impact -->
                <div class="form-group">
                    <label class="form-label">Nivel de impacto</label>
                    <select class="form-control" aria-label="Default select example" name="impact" id="impact">
                        <option value="">-- Seleccione un nivel --</option>
                        @foreach ($impact_levels as $impact)
                            <option value="{{ $impact->value }}" @selected(old('impact') == $impact->value)>{{ $impact->clasification }}
                            </option>
                        @endforeach
                    </select>
                    @error('impact')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- risk_level -->
                <div class="form-group">
                    <label class="form">Nivel de riesgo</label>
                    <input type="text" name="risk_level" id="risk_level" class="form-control"
                        value="{{ old('risk_level') }}" readonly>
                    @error('risk_level')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- is_aceptable -->
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="is_aceptable" @checked(old('is_aceptable'))
                        id="is_aceptable">
                    <label class="form-check-label" for="flexSwitchCheckDefault">
                        <p class="fw-bolder">Es aceptable</p>
                    </label>
                </div>
                <!-- treatment_option_id -->
                <div class="form-group">
                    <label class="form-label">Opción de tratamiento</label>
                    <select class="form-control" aria-label="Default select example" name="treatment_option_id">
                        <option value="">-- Seleccione una opción de tratamiento --</option>
                        @foreach ($treatment_options as $treatment)
                            <option value="{{ $treatment->id }}" @selected(old('treatment_option_id') == $treatment->id)>{{ $treatment->strategy }}
                            </option>
                        @endforeach
                    </select>
                    @error('treatment_option_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- treatment_plan -->
                <div class="form-group">
                    <label class="form">Plan de tratamiento</label>
                    <textarea type="text" name="treatment_plan" class="form-control">{{ old('treatment_plan') }}</textarea>
                    @error('treatment_plan')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- responsable -->
                <div class="form-group">
                    <label class="form">Responsable</label>
                    <textarea type="text" name="responsable" class="form-control">{{ old('responsable') }}</textarea>
                    @error('responsable')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- resources -->
                <div class="form-group">
                    <label class="form">Recursos</label>
                    <textarea type="text" name="resources" class="form-control">{{ old('resources') }}</textarea>
                    @error('resources')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- start_date -->
                <div class="form-group">
                    {!! Form::label('start_date', 'Fecha de inicio') !!}
                    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                    @error('start_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- end_date -->
                <div class="form-group">
                    {!! Form::label('end_date', 'Fecha de fin') !!}
                    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                    @error('end_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- status_id -->
                <div class="form-group">
                    {!! Form::label('status_id', 'Estado de tratamiento') !!}
                    {!! Form::select('status_id', $status_risk, old('status_id'), ['class' => 'form-control']) !!}
                    @error('status_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('risks.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#bia_id').select2();
            $('#multipleselect').bootstrapDualListbox({
                infoText: false,
                infoTextEmpty: false,
                filterPlaceHolder: 'Buscar'
            });
            $('#select_multiple').bootstrapDualListbox({
                infoText: false,
                infoTextEmpty: false,
                filterPlaceHolder: 'Buscar'
            });

            let probabilidad = document.getElementById('probability')
            let impact = document.getElementById('impact')
            let riesgo = document.getElementById('risk_level')
            let es_aceptable = document.getElementById('is_aceptable')
            function calculo(){
                let valor_cal = null;
                if(!(probabilidad.value == '' || impact.value == ''))
                {
                    valor_cal = probabilidad.value * impact.value
                    if(valor_cal >= 6)
                    {
                        es_aceptable.checked = false
                    }else
                    {
                        es_aceptable.checked = true
                    }
                    riesgo.value = valor_cal
                }else{
                    riesgo.value = ''
                    es_aceptable.checked = true
                }
            }

            probabilidad.addEventListener('change', function() {
                calculo()
            });

            impact.addEventListener('change', function() {
                calculo()
            });

        });
    </script>
@stop
