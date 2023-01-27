@extends('adminlte::page')

@section('title', 'Nuevo BIA')

@section('content_header')
    <h1>{{ __('Nuevo BIA') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('Nuevo BIA') }}</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('bias.store') }}" method="POST">
                @csrf
                <!-- Nombre -->
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Alcance -->
                <div class="form-group">
                    <label for="alcance" class="form">Alcance</label>
                    {{-- <input type="text" name="alcance" id="alcance" class="form-control" value="{{ old('name') }}"> --}}
                    <textarea name="alcance" id="" cols="30" rows="10" class="form-control">{{ old('alcance') }}</textarea>
                    @error('alcance')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Fecha de actualización -->
                <div class="form-group">
                    <label for="name" class="form">Fecha de Inicio</label>
                    <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control"
                        value="{{ old('fecha_inicio') }}">
                    @error('fecha_inicio')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Productos/Servicios -->
                <div class="text-bold mb-2">
                    Productos/Servicios
                </div>
                <label for=""></label>
                <select name="products[]" id="multipleselect" multiple class="form-control">
                    @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}" @selected(collect(old('products'))->contains($producto->id))>
                            {{ $producto->category->name . ' : ' . $producto->name }}
                        </option>
                    @endforeach
                </select>
                @error('products')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

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
        var selectDual = $('#multipleselect').bootstrapDualListbox({
            infoText: false,
            infoTextEmpty: false,
            filterPlaceHolder: 'Buscar'
        });
    </script>
@stop
