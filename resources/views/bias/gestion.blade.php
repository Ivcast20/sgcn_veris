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
                <!-- Estado 1 -->
                <h4 class="card-title">Enviar Notificación de Calificación de productos/Servicios</h4>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card text-center p-3 bg-primary" id="stop_prod" style="height: 120px">
                <div class="card-img-top">
                    <h2>
                        <i class="far fa-hand-paper"></i>
                    </h2>
                </div>
                <!-- Estado 2 -->
                <h4 class="card-title">Cerrar calificación Productos/Servicios críticos</h4>
            </div>
        </div>
    </div>
    @if ($bia->estado_id != 1)
        @if ($bia->estado_id === 2)
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                                <tr class="text-center">
                                    <th>Id</th>
                                    <th>Usuario</th>
                                    <th>Cantidad de Productos calificados</th>
                                    <th>Cantidad de Productos por calificar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($calific_personas as $persona)
                                    <tr>
                                        <td class="text-center">{{ $persona->user_id }}</td>
                                        <td>{{ $persona->name . ' ' . $persona->last_name }}</td>
                                        <td class="text-center">{{ $persona->num_products_cal }}</td>
                                        <td class="text-center">{{ $productos_totales - $persona->num_products_cal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    @endif
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
                        }).then(function(response){
                            if(response.isConfirmed)
                            {
                                location.reload();
                            }
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

            $('#stop_prod').click(function(e) {
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
                        }).then(function(response){
                            if(response.isConfirmed)
                            {
                                location.reload();
                            }
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
        });
    </script>
@stop