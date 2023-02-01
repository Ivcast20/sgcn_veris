@extends('adminlte::page')

@section('title', 'Gestión del BIA')

@section('content_header')
    <h1>Gestión del BIA <strong>"{{ $bia->name }}"</strong></h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gestionar BIA</li>
    </ol>
    <div class="row my-3">
        <div class="col-lg-4">
            <div class="card text-center p-3 bg-success" id="cal_prod" style="height: 120px">
                <div class="card-img-top">
                    <h2>
                        <i class="fas fa-check"></i>
                    </h2>
                </div>
                <h4 class="card-title">Enviar Notificación de Calificación de productos/Servicios</h4>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card text-center p-3 bg-primary" id="gener_prod" style="height: 120px">
                <div class="card-img-top">
                    <h2>
                        <i class="fas fa-times"></i>
                    </h2>
                </div>
                <h4 class="card-title">Generar Productos/Servicios críticos</h4>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cal_prod').click(function(e) {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('calific', $bia->id) }}",
                    success: function() {
                        Swal.fire({
                            title: 'Listo',
                            text: 'Se habilitó para calificar los productos/servicios del BIA',
                            icon: 'success',
                            showConfirmButton: true,
                            confirmButtonText: 'Entendido'
                        });
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Advertencia',
                            text: 'Ya se puede calificar los productos/servicios del BIA',
                            icon: 'warning',
                            showConfirmButton: true,
                            confirmButtonText: 'Entendido'
                        });
                    },
                })
            });

            $('#gener_prod').click(function(e) {
                console.log('Chao');
            });
        });
    </script>
@stop
