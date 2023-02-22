@extends('adminlte::page')

@section('title', 'Crear Actividad')

@section('content_header')
    <h1>{{ __('Crear Actividad') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item"><a href="{{ route('promedios.index', $bia_id) }}">Promedios de calificaciones de productos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('activities.index', ['bia_id' => $bia_id, 'product_id' => $product]) }}">Actividades</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('Crear Actividad') }}</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('activities.store') }}" method="POST">
                @csrf
                <input type="text" class="d-none" name="bia_id" value={{ old('bia_id', $bia_id) }}>
                <input type="text" class="d-none" name="critic_product_id" value={{ old('critic_product_id', $product->id) }}>
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Parametros -->
                <div class="text-center">
                    <h5 class="">Calificación de Parámetros</h5>
                </div>
                @foreach ($parametros as $parametro)
                    <div class="form-group mb-3">
                        <label for="" class="form-label">{{ $parametro->name }}</label>
                        <select class="form-control calificacion" aria-label="Default select example"
                            name="parametros[{{ $parametro->id }}]">
                            <option value="">-- Seleccione una calificación --</option>
                            @foreach ($niveles as $nivel)
                                <option value="{{ $nivel->value }}" @selected(old('parametros.' . $parametro->id) == $nivel->value)>
                                    {{ $nivel->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('parametros.' . $parametro->id))
                            <span
                                class="help-block text-danger">{{ $errors->first('parametros.' . $parametro->id) }}</span>
                        @endif
                    </div>
                @endforeach
                <!--Total Score -->
                <div class="form-group">
                    <label for="total_score" class="form">Total</label>
                    <input type="text" name="total_score" id="total_score" class="form-control"
                        value="{{ old('total_score') }}" readonly>
                    @error('total_score')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Es crítica -->
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="is_critical" name="is_critical"
                        @checked(old('is_critical')) />
                    <label class="custom-control-label" for="is_critical">Es crítica</label>
                </div>
                @error('is_critical')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <!-- Justificación -->
                <div class="form-group pt-2">
                    <label for="justificacion">Justificación</label>
                    <textarea class="form-control" id="justificacion" name="justificacion" rows="3">{{ old('justificacion') }}</textarea>
                    @error('justificacion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
    <script>
        $(document).ready(function() {
            let calificaciones = document.querySelectorAll('.calificacion');
            for (i = 0; i < calificaciones.length; i++) {
                calificaciones[i].addEventListener('change', function() {
                    let valores = document.querySelectorAll('.calificacion')
                    let valores_array = Array.from(valores)
                    let filtrado = valores_array.filter(function(elemento) {
                        return elemento.value == ''
                    })
                    if (filtrado.length == 0) {
                        let total_score = 0
                        valores_array.forEach(element => {
                            total_score += parseInt(element.value)
                        });

                        document.getElementById('total_score').value = total_score
                        if (total_score >= 12) {
                            document.getElementById('is_critical').checked = true
                        } else {
                            document.getElementById('is_critical').checked = false
                        }
                    } else {
                        document.getElementById('total_score').value = ""
                        document.getElementById('is_critical').checked = false
                    }
                })
            }
        })
    </script>
@stop
