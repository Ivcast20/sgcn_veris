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
    @else
        <div class="alert alert-warning" role="alert">
            <strong>NO</strong> pruede calificar productos debido a que está en un estado diferente al de calificar
            productos/servicios
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div>
                <strong>Total Productos/Servicios calificados:</strong> {{ $productos_calificados->count() }}
            </div>
            <div class="pb-3">
                <strong>Total Productos/Servicios por calificar:</strong> {{ $num_products_bia - $productos_calificados->count() }}
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Nombre del producto</th>
                            <th>Fecha de calificación</th>
                            <th>Calificaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos_calificados as $producto_cal)
                            <tr>
                                <td class="text-center">{{ $producto_cal->id }}</td>
                                <td>{{ $producto_cal->product->name }}</td>
                                <td>{{ $producto_cal->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <ul>
                                        @foreach ($producto_cal->parameterScores as $parametro_score)
                                            <li>
                                                {{ $parametro_score->parameter->name . ': ' . $parametro_score->score }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
