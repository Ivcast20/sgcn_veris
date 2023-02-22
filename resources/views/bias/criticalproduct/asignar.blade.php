@extends('adminlte::page')

@section('title', 'Asignar Producto')

@section('content_header')
    <h1>{{ __('Asignar Producto') }}</h1>
@stop

@section('plugins.Select2', true)

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item"><a href="{{ route('promedios.index', $productoCritico->bia_process_id) }}">Calificaciones
                de Productos</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('Asignar Producto') }}</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productcritical.storeasign', $productoCritico->id) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre del Producto/Servicio</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $productoCritico->product->name }}" readonly>
                </div>
                <!-- Categoría -->
                <div class="form-group">
                    <label for="name" class="form">Categoría del Producto/Servicio</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $productoCritico->product->category->name }}" readonly>
                </div>
                <!-- Calificiación total -->
                <div class="form-group">
                    <label for="name" class="form">Calificiación total</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $productoCritico->total_score }}" readonly>
                </div>
                <!-- Persona Asignada -->
                <div class="form-group">
                    <label for="user_asigned">Persona Responsable</label>
                    <select class="form-control" id="user_asigned" name="user_asigned">
                        <option value="">-- Seleccione --</option>
                        @foreach ($usuarios_responsables as $persona)
                            <option value="{{ $persona->id }}" @selected(old('user_asigned') == $persona->id)>{{ $persona->name . ' ' . $persona->name }}</option>
                        @endforeach
                    </select>
                    @error('user_asigned')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Fin -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('promedios.index', $productoCritico->bia_process_id) }}"
                        class="btn btn-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Asignar</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
        // var selectDual = $('#multipleselect').bootstrapDualListbox({
        //     infoText: false,
        //     infoTextEmpty: false,
        //     filterPlaceHolder: 'Buscar'
        // });
        $(document).ready(function() {
            $('#user_asigned').select2();
        });
    </script>
@stop
