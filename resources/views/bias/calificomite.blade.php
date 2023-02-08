@extends('adminlte::page')

@section('title', 'Listado de Productos Calificados')

@section('content_header')
    <h1>Listado de Productos Calificados</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item active" aria-current="page">Calificaciones de Productos/Servicios</li>
    </ol>
    @if ($bia->estado_id == 2)
        <div class="d-flex justify-content-end mb-2">
            <a class="btn btn-primary" href="{{ route('calificar', $bia->id) }}">Calificar Producto/Servicio</a>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <strong>Total Productos/Servicios calificados:</strong> 1
                </div>
                <div>
                    <strong>Total Productos/Servicios por calificar:</strong> 2
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-warning" role="alert">
            <strong>NO</strong> pruede calificar productos debido a que está en un estado diferente al de calificar
            productos/servicios
        </div>
    @endif
@stop

@section('css')
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <script>
        let mensaje = '{{ Session::has('message') }}';
        if (mensaje) {
            Swal.fire({
                title: '{{ Session::get('message') }}',
                toast: true,
                icon: 'success',
                position: 'top-end',
                timer: 3000,
                showConfirmButton: false,
            });
        }
    </script>
@stop
