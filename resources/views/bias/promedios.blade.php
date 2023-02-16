@extends('adminlte::page')

@section('title', 'Productos/Servicios del BIA' . $bia->name)

@section('content_header')
    <h1>Listado de productos/servicios <strong>"{{ $bia->name }}"</strong> </h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ 'Calificaciones de Productos del BIA ' . $bia->name }}</li>
    </ol>
    <div class="card">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Title"> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Nombre del producto</th>
                            <th scope="col">Categoría del producto</th>
                            <th scope="col">Calificación total</th>
                            <th scope="col">Crítico</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos_promediados as $product_avg)
                            <tr class="text-center">
                                <td>{{ $product_avg->id }}</td>
                                <td>{{ $product_avg->product->name }}</td>
                                <td>{{ $product_avg->product->category->name }}</td>
                                <td>{{ $product_avg->total_score }}</td>
                                <td>{{ $product_avg->is_critical ? 'Si' : 'No' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pt-2">
                {{ $productos_promediados->links() }}
            </div>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Nombre del producto</th>
                            <th scope="col">Categoría del producto</th>
                            <th scope="col">Calificación total</th>
                            <th scope="col">Crítico</th>
                            <th scope="col">Persona Asignada</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos_criticos as $product_critical)
                            <tr class="text-center">
                                <td>{{ $product_critical->id }}</td>
                                <td>{{ $product_critical->product->name }}</td>
                                <td>{{ $product_critical->product->category->name }}</td>
                                <td>{{ $product_critical->total_score }}</td>
                                <td>{{ $product_critical->is_critical ? 'Si' : 'No' }}</td>
                                <td>{{ $product_critical->user == null ? 'Sin asignar' : $product_critical->user->name . ' ' . $product_critical->user->name . ' : ' . $product_critical->user->cargo}}</td>
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
