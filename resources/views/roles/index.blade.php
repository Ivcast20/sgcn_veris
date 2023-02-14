@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>{{ __('Roles') }}</h1>
@stop

@section('content')
    {{-- <livewire:role-table /> --}}
    @livewire('roles.show-roles')
@stop

@section('css')
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
@stop
