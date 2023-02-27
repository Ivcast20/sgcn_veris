<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reporte de productos/servicios</title>
    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        body {
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: 'Times New Roman', Times, serif;
            font-size: 14px;
            font-family: 'Times New Roman', Times, serif;
        }

        header {
            padding: 20px 0px;
            margin-bottom: 30px;
        }

        #logo {
            margin: right;
        }

        #logo img {
            width: 200px;
        }

        h1 {
            color: #5D6975;
            font-size: 2.4em;
            font-weight: bolt;
            text-align: right;
            margin: 0 0 5px 0;
        }

        h2 {
            border-bottom: 1px solid #0087C3;
            color: #5D6975;
            font-size: 1.4em;
            line-height: 1em;
            font-weight: normal;
            text-align: right;
            margin: 0 0 5px 0;
        }

        #TotalR {
            text-align: right;
            font-weight: bold;
        }

        #datosR {
            float: left;
            font-weight: normal;
        }

        #datosR span {
            color: black;
            width: 52px;
            font-weight: bolder;
            padding-left: 6px;
            border-left: 6px solid #0087C3;
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        table,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px
        }

        table {
            width: 100%;
            table-layout: fixed;
        }

        table th,
        table td {
            text-align: justify;
            vertical-align: baseline;
        }

        table th {
            font-weight: bold;
            background-color: #018bc2;
        }

        table td {
            padding: 20px 10px;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #0087C3;
            padding: 8px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="clearfix">
        <div id="logo">
            <img
                src="https://bn1305files.storage.live.com/y4mbW5izh9Iaulp4_z_buxFABEm1ZOPX9iWaYpp_km5aQUqcn1EikH-0igcEaYyMzZ-cYGfR2QoStz9eiVZf6iiDy0DyM7Z7YolaksJ-LMUz8SoKAXmqkr_Rh8GqVxfpNQJA1-IoFld_xLPP31kSX_HfNP3OBS9u7CDlvvg-U2G1YRkzR3cr_IEFySigEyBIYrW?width=595&height=283&cropmode=none" />
        </div>
        <div>
            <h1>Módulo</h1>
            <h2>Productos/Servicios</h2>
        </div>

        <div id="datosR">
            <div><span>Nombre:</span>{{ $nombreCompleto }}</div>
            <div><span>Fecha:</span>{{ $fecha }}</div>
            <div><span>Hora:</span> {{ $hora }}</div>
        </div>

        <div id="TotalR">
            <div><span>Total de registros: </span>{{ $productos->count() }}</div>
        </div>

    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Creación</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->created_at_r }}</td>
                        <td>{{ $product->status == 1 ? 'Activo' : 'Inactivo' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <footer>
            Copyright&copy; {{ \Carbon\Carbon::now()->year }} Veris
        </footer>

</html>
