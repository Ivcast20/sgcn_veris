@extends('adminlte::page')

@section('title', 'Departamentos')

@section('content_header')
    <h1>{{ __('Departments') }}</h1>
@stop

@section('content')
    @can('admin.departments.create')    
        <div class="d-flex justify-content-end mb-2">
            <a class="btn btn-primary" href="{{ route('departments.create') }}">Nuevo Departamento</a>
        </div>
    @endcan

    <livewire:department-table />
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
