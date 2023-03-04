@extends('adminlte::page')

@section('title', 'Estados de Tratamiento de Riesgos')

@section('content_header')
    <h1>{{ __('Estados de Tratamiento de Riesgos') }}</h1>
@stop

@section('content')
    @can('admin.risk_treatment_status.create')
        <div class="d-flex justify-content-end mb-2">
            <a class="btn btn-primary" href="{{ route('status_risks.create') }}">Nuevo estado</a>
        </div>
    @endcan
    @livewire('status-risk-table')
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
