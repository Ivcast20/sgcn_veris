@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>{{ __('Users') }}</h1>
@stop

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a class="btn btn-primary" href="{{ route('users.create') }}">Nuevo Usuario</a>
    </div>
    <livewire:user-table />
@stop

@section('css')
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
@stop
