@extends('layouts.app_reporte')

@section('content')
    <h3 class="text-center">Reporte General de "{{ $bia->name }}"</h3>
    <p><strong>Usuario:</strong> {{ $nombreCompleto }}</p>
    <p><strong>Fecha:</strong> {{ $fecha }}</p>
    <p><strong>Hora: </strong> {{ $hora }}</p>
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Alcance</th>
                <td>{{ $bia->alcance }}</td>
            </tr>
            <tr>
                <th scope="row">Fecha de inicio</th>
                <td>{{ $bia->fecha_inicio_r }}</td>
            </tr>
        </tbody>
    </table>
    <div class="card">
        <div class="card-header">
            <h5>
                Productos calificados del BIA
            </h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bia->products as $product)
                        <tr>
                            <td>
                                {{ $product->id }}
                            </td>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->category->name }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="page-break"></div>
    <div>
        <div class="card">
            <div class="card-header bg-danger text-light">
                <h5>Productos Críticos</h5>
            </div>
            <div class="card-body">
                @foreach ($bia->critical_products as $c_product)
                    <p><strong>Nombre: </strong>{{ $c_product->product->name }}</p>
                    <p><strong>Categoría: </strong> {{ $c_product->product->category->name }}</p>
                    <p><strong>Calificación total: </strong>{{ $c_product->total_score }}</p>
                    @if ($c_product->critic_activities->count())
                        <h5 class="text-center">Actividades críticas</h5>
                        <table class="table">
                            <thead>
                                <tr class="table-success">
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>MTPD</th>
                                    <th>RTO</th>
                                    <th>RPO</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($c_product->critic_activities as $c_activity)
                                    <tr>
                                        <td>
                                            {{ $c_activity->id }}
                                        </td>
                                        <td>
                                            {{ $c_activity->name }}
                                        </td>
                                        <td>
                                            {{ $c_activity->mtpd }}
                                        </td>
                                        <td>
                                            {{ $c_activity->rto }}
                                        </td>
                                        <td>
                                            {{ $c_activity->rpo }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-warning" role="alert">
                            Este producto no tiene actividades críticas
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="page-break"></div>
    <div>
        <div class="card">
            <div class="card-header bg-warning">
                <h4>Matriz de riesgos</h4>
            </div>
            <div class="card-body">
                @foreach ($bia->risks as $key => $risk)
                <h5>Riesgo #{{ $key + 1 }}</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Código
                                </th>
                                <th>
                                    Descripción del riesgo
                                </th>
                                <th>
                                    Fuentes
                                </th>
                                <th>
                                    Opción de tratamiento
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{ $risk->id }}
                                </td>
                                <td>
                                    {{ $risk->code }}
                                </td>
                                <td>
                                    {{ $risk->description }}
                                </td>
                                <td>
                                    {{ $risk->source->name }}
                                </td>
                                <td>
                                    {{ $risk->treatment_option->strategy }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @if ($risk->treatment_option_id == 3)
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Responsable</th>
                                <td>{{ $risk->responsable }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Recursos</th>
                                <td>{{ $risk->resources }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@stop
