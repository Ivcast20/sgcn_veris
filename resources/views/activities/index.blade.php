@extends('adminlte::page')

@section('title', 'Actividades')

@section('content_header')
    <h1>{{ __('Actividades') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item"><a href="{{ route('promedios.index', $bia_id) }}">Calificaciones de Productos del BIA</a></li>
        <li class="breadcrumb-item active" aria-current="page">Listado de Actividades</li>
    </ol>
    {{-- @can('admin.roles.create') --}}
    <div class="d-flex justify-content-end">
        <a class="btn btn-success"
            href="{{ route('activities.create', ['bia_id' => $bia_id, 'product' => $product_id]) }}">Nueva Actividad</a>
    </div>
    {{-- @endcan --}}
    @livewire('activities.show-activities', ['product_id' => $product_id])

    <h4>Actividades críticas</h4>
    <div class="d-flex justify-content-end">
        <a class="btn btn-success"
            href="{{ route('actividadescriticas.excel', ['id_producto' => $product_id]) }}">Excel</a>
    </div>
    @livewire('activities.show-critical-activities', ['product_id' => $product_id, 'bia_id' => $bia_id])
@stop

@section('css')
{{-- <link rel="stylesheet" href="extensions/sticky-header/bootstrap-table-sticky-header.css">
<script src="extensions/sticky-header/bootstrap-table-sticky-header.js"></script> --}}
<style>
.tbodyc {
      display:block !important;
      max-height:500px !important;
      overflow-y:auto !important;
}
.theadc, .tbodyc tr {
  display:table !important;
  width:100% !important;
  table-layout:fixed !important;
}
.theadc {
  width: calc( 100% - 1em ) !important
}
</style>
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
@stop
