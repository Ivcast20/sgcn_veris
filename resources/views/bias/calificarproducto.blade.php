@extends('adminlte::page')

@section('title', 'Calificar Producto')

@section('content_header')
    <h1>Calificar producto</h1>
@stop

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('bias.index') }}">Listado de BIA</a></li>
        <li class="breadcrumb-item"><a href="{{ route('calificaciones.comite', $id) }}">Listado de Calificaciones de Productos/Servicios</a></li>
        <li class="breadcrumb-item active" aria-current="page">Calificar Producto</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('bias.store.product', $id) }}" method="POST">
                @csrf
                <input type="text" class="d-none" name="bia_id" value="{{ $id }}">
                <!-- producto -->
                <div class="mb-3">
                    <label for="" class="form-label">Producto</label>
                    <select class="form-control" aria-label="Default select example" name="product_id">
                        <option value="">-- Seleccione un Producto --</option>
                        @foreach ($productos as $product)
                            <option value="{{ $product->id }}" @selected(old('product_id') == $product->id)>
                                {{ $product->category->name . ' / ' . $product->name }}</option>
                        @endforeach
                    </select>
                    <small id="helpId" class="form-text text-muted">Seleccione el producto a calificar</small>
                    @error('product_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-center">
                    <h5 class="">Parámetros</h5>
                </div>
                <!--<div name='parametros[]'> -->
                @foreach ($parametros as $parametro)
                    <div class="form-group mb-3">  <!--{-{ $errors->has('parametros.' . $parametro->id) }-} -->
                        <label for="" class="form-label">{{ $parametro->name }}</label>
                        <select class="form-control" aria-label="Default select example"
                            name="parametros[{{ $parametro->id }}]">
                            <option value="">-- Seleccione una calificación --</option>
                            @foreach ($niveles as $nivel)
                                <option value="{{ $nivel->value }}" @selected(old('parametros.' . $parametro->id) == $nivel->value)>
                                    {{ $nivel->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('parametros.' . $parametro->id))
                            <span class="help-block text-danger">{{ $errors->first('parametros.' . $parametro->id) }}</span>
                        @endif
                    </div>
                @endforeach
                <!-- </div> -->

                <div class="d-flex justify-content-center mt-2">
                    <a href="{{ route('calificaciones.comite', $id) }}" class="btn btn-secondary mr-2">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
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
