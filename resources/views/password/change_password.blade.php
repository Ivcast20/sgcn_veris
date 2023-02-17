@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="">
        <div class="card mt-4">
            <div class="card-header text-center">
                <h4>Cambiar contraseña</h4>
            </div>
            <form action="{{ route('update_password') }}" method="POST">
                <div class="card-body">

                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="oldPassword" class="form-label">Contraseña Actual</label>
                        <input type="password" class="form-control" name="old_password" id="old_password"
                            aria-describedby="helpId" placeholder="Ingrese la contraseña actual" value="{{ old('old_password') }}">
                        @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Nueva Contraseña</label>
                        <input type="password" class="form-control" name="new_password" id="new_password"
                            aria-describedby="helpId" placeholder="Ingrese la nueva contraseña" value="{{ old('new_password') }}">
                        @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="confirmNewPassword" class="form-label">Confirmación de nueva contraseña</label>
                        <input name="new_password_confirmation" type="password" class="form-control"
                            id="new_password_confirmation" placeholder="Vuelva a ingresar la nueva contraseña">
                    </div>


                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Cambiar</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
