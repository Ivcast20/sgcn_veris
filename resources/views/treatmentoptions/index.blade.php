@extends('adminlte::page')

@section('title', 'Opciones de Tratamiento')

@section('content_header')
    <h1>{{ __('Opciones de Tratamiento') }}</h1>
@stop

@section('content')
    @can('admin.treatment_options.create')
        <div class="d-flex justify-content-end mb-2">
            <a class="btn btn-primary" href="{{ route('treatmentoptions.create') }}">Nueva opción de tratamiento</a>
        </div>
    @endcan
    @livewire('treatment-option-table')
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
