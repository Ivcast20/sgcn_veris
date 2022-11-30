@extends('adminlte::page')

@section('title', 'Agregar Rol')

@section('content_header')
    <h1>{{ __('Agregar Rol') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Rol</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-bold">
                    Permisos
                </div>
                <select name="permisos[]" id="multipleselect" multiple class="form-control">
                    @foreach ($permisos as $key => $permiso)
                        <option value="{{ $permiso->id }}" 
                            @selected(collect(old('permisos'))->contains($permiso->id))
                            >{{ $permiso->description }}
                        </option>
                    @endforeach
                </select>
                @error('permissions')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar cambios</button>
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
            infoText : false,
            infoTextEmpty : false,
            filterPlaceHolder : 'Buscar'
        });
    </script>
@stop
