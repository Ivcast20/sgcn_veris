@extends('adminlte::page')

@section('title', 'Editar Resultado')

@section('content_header')
    <h1>{{ __('Editar Resultado') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item"><a href="{{ route('promedios.index', $productScoreAverage->bia_process_id) }}">Calificaciones
                de Productos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar resultado</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('averagescore.update', $productScoreAverage->id) }}" method="POST">
                @method('PUT')
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre del Producto/Servicio</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $productScoreAverage->product->name }}" readonly>
                </div>
                <!-- Categoría -->
                <div class="form-group">
                    <label for="name" class="form">Categoría del Producto/Servicio</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $productScoreAverage->product->category->name }}" readonly>
                </div>
                <!-- Calificiación total -->
                <div class="form-group">
                    <label for="name" class="form">Calificación total</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $productScoreAverage->total_score }}" readonly>
                </div>
                <!-- Status -->
                {{-- <div class="custom-control custom-switch">
                    <input 
                        type="checkbox"
                        class="custom-control-input"
                        id="is_critical"
                        value="1"
                        name="is_critical"
                        @checked(old('is_critical',$productScoreAverage->is_critical))/>
                    <label class="custom-control-label" for="status">Es crítico</label>
                </div> --}}
                <div class="form-check">
                    <input 
                    class="form-check-input" 
                    type="checkbox" 
                    value="1" id="flexCheckDefault" 
                    name="is_critical" @checked(old('is_critical',$productScoreAverage->is_critical))>
                    <label class="form-check-label" for="flexCheckDefault">
                      Es crítico
                    </label>
                  </div>
                <!-- Fin -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('promedios.index', $productScoreAverage->bia_process_id) }}"
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
@stop
