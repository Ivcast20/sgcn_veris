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
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr class="text-center">
                                <th>Acciones</th>
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Nombre') }}</th>
                                <th>MTPD</th>
                                <th>RTO</th>
                                <th>RPO</th>
                                <th>Mínimo nivel aceptable</th>
                                <th>Prioridad de recuperación</th>
                                <th>Dependencia de otros procesos</th>
                                <th>¿Qué procesos? ( en caso de aplicar)</th>
                                <th>Periodos críticos</th>
                                <th>Procedimientos Alternativo</th>
                                <th>Cantidad de personas en procedimientos normal</th>
                                <th>Cantidad de personas requeridas</th>
                                <th>Aplicaciones</th>
                                <th>Equipos</th>
                                <th>Servicio tecnológico</th>
                                <th>Espacio Físico</th>
                                <th>Personas</th>
                                <th>Competencias personales</th>
                                <th>Proveedores</th>
                                <th>Otros recursos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($actividades as $activity)
                                <tr class="text-center">
                                    <td><a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-success">Editar</a></td>
                                    <td>{{ $activity->id }}</td>
                                    <td>{{ $activity->name }}</td>
                                    <td>{{ $activity->mtpd }}</td>
                                    <td>{{ $activity->rto }}</td>
                                    <td>{{ $activity->rpo }}</td>
                                    <td>{{ $activity->aceptable_minimun }}</td>
                                    <td>{{ $activity->priority }}</td>
                                    <td>{{ $activity->other_proc_depen == 1 ? 'Si' : 'No'}}</td>
                                    <td>{{ $activity->processes }}</td>
                                    <td>{{ $activity->criticial_periods }}</td>
                                    <td>{{ $activity->procedure }}</td>
                                    <td>{{ $activity->normal_op_people }}</td>
                                    <td>{{ $activity->people_required }}</td>
                                    <td>{{ $activity->applications }}</td>
                                    <td>{{ $activity->equiptment }}</td>
                                    <td>{{ $activity->services }}</td>
                                    <td>{{ $activity->physical_space }}</td>
                                    <td>{{ $activity->people }}</td>
                                    <td>{{ $activity->skills }}</td>
                                    <td>{{ $activity->providers }}</td>
                                    <td>{{ $activity->other_resources }}</td>
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
        
    </script>
@endpush
