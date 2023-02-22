<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="guardardescription">
                <div class="form-group">
                    <label>Proceso BIA</label>
                    <select wire:model="bia_id" class="form-control">
                        <option value="" selected> -- Seleccione -- </option>
                        @foreach ($bia_processes as $bia)
                            <option value="{{ $bia->id }}">{{ $bia->name }}</option>
                        @endforeach
                    </select>
                </div>
                @if ($bia_id != '')
                    <div class="form-group">
                        <label>Parámetro</label>
                        <select name="parameter_id" wire:model="parameter_id" class="form-control">
                            <option value="" selected> -- Seleccione -- </option>
                            @foreach ($parameters as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nivel</label>
                        <select name="level_id" wire:model="level_id" class="form-control">
                            <option value="" selected> -- Seleccione -- </option>
                            @foreach ($levels as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                <div class="form-group">
                    <label>Criterio</label>
                    <textarea cols="30" rows="10" class="form-control" wire:model="description"></textarea>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="pt-2">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('criterias.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
