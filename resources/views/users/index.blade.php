@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>{{__('Users')}}</h1>
@stop

@section('content')
    <livewire:user-table/>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
@stop