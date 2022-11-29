@extends('adminlte::page')

@section('title', 'Editar Rol')

@section('content_header')
    <h1>{{ __('Editar Rol') }}</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Rol</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('roles.update', $rol->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ old('name', $rol->name) }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <select name="permisos[]" id="multipleselect" multiple class="form-control">
                    @foreach ($permisos as $permiso)
                        <option value="{{ $permiso->id }}" 
                            @selected(old('permisos[]',$rol->permissions->contains($permiso->id)))
                            >{{ $permiso->description }}
                        </option>
                    @endforeach
                </select>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="status" name="status" value="1"
                        @checked(old('status', $rol->status)) />
                    <label class="custom-control-label" for="status">Activo</label>
                </div>
                @error('status')
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
        var selectDual = $('#multipleselect').bootstrapDualListbox();
    </script>
@stop
