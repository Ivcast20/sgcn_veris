@extends('adminlte::page')

@section('title', 'Calificaciones de productos ' . $bia->name)

@section('content_header')
    <h1>Calificaciones de productos <strong>"{{ $bia->name }}"</strong> </h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ 'Calificaciones de Productos del BIA ' . $bia->name }}</li>
    </ol>
    <div class="card">
        <div class="card-header">
            <h4>Promedio de Calificaciones de Productos</h4>
            <div class="d-flex justify-content-end">
                <a href="{{ route('scoreaveragebia.excel', $bia->id) }}" class="btn btn-success mr-2">Excel</a>
            </div>
        </div>
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
                            @can('admin.prod_score_avg.edit')
                                <th scope="col">Acciones</th>
                            @endcan
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
                                @can('admin.prod_score_avg.edit')
                                    <td><a href="{{ route('averagescore.edit', $product_avg->id) }}"
                                            class="btn btn-success">Editar</a></td>
                                @endcan
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
        <div class="card-header">
            <h4>Productos Críticos</h4>
            <div class="d-flex justify-content-end">
                <a href="{{ route('criticalproducts.excel', $bia->id) }}" class="btn btn-success mr-2">Excel</a>
            </div>
        </div>
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
                            @can('admin.critic_product.asign')
                                <th scope="col">Asignar</th>
                            @endcan
                            @can('admin.activities.index')
                                <th scope="col">Ver Actividades</th>
                            @endcan
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
                                @if ($product_critical->user == null)
                                    <td>Sin asignar</td>
                                @else
                                    <td>
                                        {{ $product_critical->user->name . ' ' . $product_critical->user->last_name . ' : ' . $product_critical->user->cargo }}
                                    </td>
                                @endif
                                @can('admin.critic_product.asign')
                                    <td><a href="{{ route('productcritical.asign', $product_critical->id) }}"
                                            class="btn btn-success">Asignar</a></td>
                                @endcan
                                @can('admin.activities.index')
                                    <td><a href="{{ route('activities.index', ['bia_id' => $bia->id, 'product_id' => $product_critical->id]) }}"
                                            class="btn btn-primary">Actividades</a></td>
                                @endcan
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
