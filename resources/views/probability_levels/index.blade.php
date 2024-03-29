@extends('adminlte::page')

@section('title', 'Niveles de Probabilidad')

@section('content_header')
    <h1>Lista de Niveles de Probabilidad</h1>
@stop

@section('content')
    @can('admin.probability_levels.create')
        <div class="d-flex justify-content-end mb-2">
            <a class="btn btn-primary" href="{{ route('probability_levels.create') }}">Nuevo Nivel</a>
        </div>
    @endcan
    @livewire('probability-level-table')
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
