@extends('adminlte::page')

@section('title', 'Nuevo Usuario')

@section('content_header')
    <h1>{{ __('Nuevo usuario') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nuevo Usuario</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <!-- NOMBRE -->
                <div class="form-group">
                    <label for="name" class="form-label">Nombres</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- APELLIDO -->
                <div class="form-group">
                    <label for="last_name" class="form-label">Apellidos</label>
                    <input type="text" name="last_name" id="last_name" class="form-control"
                        value="{{ old('last_name') }}">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- E-MAIL -->
                <div class="form-group">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- DEPARTAMENTO -->
                <div class="form-group">
                    <label for="department_id">Departamento</label>
                    <select class="form-control" id="department_id" name="department_id">
                        @foreach ($departamentos as $depart)
                            <option value="{{ $depart->id }}" @selected(old('department_id') == $depart->id)>{{ $depart->name }}</option>
                        @endforeach
                    </select>
                    @error('department_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- CARGO -->
                <div class="form-group">
                    <label for="cargo" class="form-label">Cargo</label>
                    <input type="text" name="cargo" id="cargo" class="form-control"
                        value="{{ old('cargo') }}">
                    @error('cargo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- ROLES -->
                <div class="text-bold mb-2">
                    Roles
                </div>
                <select name="roles[]" id="multipleselect" multiple class="form-control">
                    @foreach ($roles as $key => $rol)
                        <option value="{{ $rol->id }}" @selected(collect(old('roles'))->contains($rol->id))>{{ $rol->name }}
                        </option>
                    @endforeach
                </select>
                @error('roles')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <!-- FIN -->
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
        var selectDual = $('#multipleselect').bootstrapDualListbox({
            infoText: false,
            infoTextEmpty: false,
            filterPlaceHolder: 'Buscar'
        });
    </script>
@stop
