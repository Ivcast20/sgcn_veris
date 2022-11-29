@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>{{ __('Roles') }}</h1>
@stop

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a class="btn btn-primary" href="{{ route('roles.create') }}">Nuevo Rol</a>
    </div>

    <livewire:role-table />
@stop

@section('css')
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
@stop
