@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <canvas id="goodCanvas1" width="400" height="100" aria-label="Hello ARIA World" role="img">
        <p>Error</p>
    </canvas>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $.ajax({
                type: 'GET',
                url: "{{ route('usuario.x.rol') }}",
                success: function(data) {
                    console.log(typeof(data));
                    let roles = JSON.parse(data);
                    let nombre_roles = roles.map(rol => rol.name);
                    let numero_users = roles.map(rol => rol.users_count);
                    const chart_usuarios_x_roles = new Chart(document.getElementById('goodCanvas1'), {
                        type: 'bar',
                        options: {
                            aspectRatio: 1,
                            scales: {
                                x: {
                                    max: 100,
                                },
                                y: {
                                    max: 100,
                                }
                            }
                        },
                        data: {
                            labels: nombre_roles,
                            datasets: [{
                                label: 'Número de Usuarios por Rol',
                                data: numero_users,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 205, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(201, 203, 207, 0.2)'
                                ],
                                borderColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 205, 86)',
                                    'rgb(75, 192, 192)',
                                    'rgb(54, 162, 235)',
                                    'rgb(153, 102, 255)',
                                    'rgb(201, 203, 207)'
                                ],
                                borderWidth: 1,

                            }]
                        }
                    });
                }
            });
        });
    </script>
@stop
