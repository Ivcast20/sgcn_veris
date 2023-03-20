<div>
    <div class="card mt-2">
        <div class="card-header">
            <div class="input-group  mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Buscar" aria-label="Username"
                    aria-describedby="basic-addon1" wire:model.debounce.500ms="search">
            </div>
        </div>
        @if ($actividades->count())
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead class="table-primary theadc">
                            <tr class="text-center">
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Nombre') }}</th>
                                <th>Calificación total</th>
                                <th>Es crítico</th>
                                <th>{{ __('Fecha Creación') }}</th>
                                <th>{{ __('Fecha Actualización') }}</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="tbodyc">
                            @foreach ($actividades as $activity)
                                <tr class="text-center">
                                    <td>{{ $activity->id }}</td>
                                    <td>{{ $activity->name }}</td>
                                    <td>{{ $activity->total_score }}</td>
                                    <td>{{ $activity->is_critical == 1 ? 'Si' : 'No' }}</td>
                                    <td>{{ $activity->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $activity->updated_at->format('d-m-Y') }}</td>
                                    <td>{{ $activity->status ? 'Activa' : 'Inactiva' }}</td>
                                    @can('admin.activities.edit')
                                        <td>
                                            {{-- <button 
                                            class="btn btn-success"
                                            wire:click="$emit('cambiar',{{ $activity->id }})">
                                            Cambiar
                                        </button> --}}
                                            <a href="{{ route('activities.edit2', $activity->id) }}"
                                                class="btn btn-info">Editar</a>
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <b>Total: </b>{{ $actividades->total() }}
                <div class="pt-2">
                    {{ $actividades->links() }}
                </div>
            </div>
            {{-- <div class="card-footer">
                
            </div> --}}
        @else
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <i class="fa fa-search fa-4x py-2"></i>
                    <div class="align-self-center">
                        No se encontraron resultados
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@push('js')
    <script>
        Livewire.on('cambiar', (activity_id) => {
            Swal.fire({
                title: 'Confirmar Cambio Estado Crítico',
                text: "¿Está seguro que desea cambiar si esta actividad es crítica o no?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('activities.show-activities', 'cambia_estado', activity_id);
                    Swal.fire(
                        'Cambio Exitoso!',
                        'Se ha cambiado el estado crítico de esta actividad',
                        'success'
                    ).then(function() {
                        location.reload();
                    })
                }
            });
        });
    </script>
@endpush
