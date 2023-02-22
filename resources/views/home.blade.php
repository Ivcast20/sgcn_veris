@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">BIAs</span>
                    <span class="info-box-number">{{ $bias }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de usuarios activos</span>
                    <span class="info-box-number">{{ $users }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de productos activos</span>
                    <span class="info-box-number">{{ $products }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title pt-1">
                <i class="fas fa-hashtag"></i>
                Número de Usuarios
            </h3>
            <div class="card-tools">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#x_rol" data-toggle="tab">Por Rol</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#x_dep" data-toggle="tab">Por departamento</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">
                <div class="chart tab-pane active" id="x_rol">
                    <canvas id="user_por_rol" role="img" width="700px" height="250px"></canvas>
                </div>
                <div class="chart tab-pane" id="x_dep">
                    <canvas id="user_por_dept" role="img" width="700px" height="250px"></canvas>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
        let usr_x_rol_lb = {{ Js::from($usr_x_rol_lb) }}
        let usr_x_rol_data = {{ Js::from($usr_x_rol_data) }}
        let usr_x_dept_lb = {{ Js::from($usr_x_dept_lb) }}
        let usr_x_dept_data = {{ Js::from($usr_x_dept_data) }}

        const chart_usuarios_x_roles = new Chart(document.getElementById('user_por_rol'), {
            type: 'bar',
            options: {
                responsive: true,
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
                labels: usr_x_rol_lb,
                datasets: [{
                    label: 'Número de Usuarios por Rol',
                    data: usr_x_rol_data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(99, 10, 16, 0.2)',
                        'rgba(142, 50, 0, 0.2)',
                        'rgba(96, 150, 180, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)',
                        'rgb(99, 10, 16)',
                        'rgb(142, 50, 0)',
                        'rgb(96, 150, 180, 0.2)'
                    ],
                    borderWidth: 1,

                }]
            }
        });

        const chart_usuarios_x_depart = new Chart(document.getElementById('user_por_dept'), {
            type: 'pie',
            options: {
                responsive: true,
                aspectRatio: 1,
                title: {
                    display: true,
                    text: 'Número de Usuarios por Departamento',
                }
            },
            data: {
                labels: usr_x_dept_lb,
                datasets: [{
                    label: 'Número de Usuarios por Rol',
                    data: usr_x_dept_data,
                    //backgroundColor: Object.values(Utils.CHART_COLORS),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(62, 84, 172, 0.2)',
                        'rgba(15, 98, 146, 0.2)',
                        'rgba(22, 255, 0, 0.2)',
                        'rgb(215, 233, 185, 0.2)',
                        'rgba(166, 31, 105, 0.2)',
                        'rgba(99, 10, 16, 0.2)',
                        'rgba(142, 50, 0, 0.2)',
                        'rgba(96, 150, 180, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)',
                        'rgb(62, 84, 172)',
                        'rgb(15, 98, 146)',
                        'rgb(22, 255, 0)',
                        'rgb(215, 233, 185)',
                        'rgb(166, 31, 105)',
                        'rgb(99, 10, 16)',
                        'rgb(142, 50, 0)',
                        'rgb(96, 150, 180, 0.2)'
                    ],
                    borderWidth: 1,

                }]
            }
        });

        
    </script>
@stop
