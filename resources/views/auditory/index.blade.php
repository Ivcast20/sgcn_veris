@extends('adminlte::page')

@section('title', 'Cambios en Modelo')

@section('content_header')
    <h1>{{ __('Cambios en Modelos') }}</h1>
@stop

@section('content')
@livewire('log-table')
@stop

@section('css')
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
@stop
