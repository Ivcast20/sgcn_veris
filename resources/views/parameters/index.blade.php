@extends('adminlte::page')

@section('title', 'Parámetros')

@section('content_header')
    <h1>Lista de parámetros</h1>
@stop

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a class="btn btn-primary" href="{{ route('parameters.create') }}">Nuevo Parámetro</a>
    </div>
    @livewire('parameter-table')
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
