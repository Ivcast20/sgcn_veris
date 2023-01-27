@extends('adminlte::page')

@section('title', 'Productos/Servicios del BIA' . $nombreBia)

@section('content_header')
    <h1>Listado de productos/servicios <strong>"{{ $nombreBia }}"</strong> </h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ 'Productos ' . $nombreBia }}</li>
    </ol>
    <div class="table-responsive">
        <table class="table table-striped">
            <caption>Total de productos/servicios: {{ $productos->count() }}</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $product)
                    <tr class="text-center">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
