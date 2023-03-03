<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Reporte del BIA</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 3cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            text-align: center;
            line-height: 1.5cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 1.5cm;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <header>

        <img class="center-block img-responsive" style="width: 200px;"
            src="https://bn1305files.storage.live.com/y4mbW5izh9Iaulp4_z_buxFABEm1ZOPX9iWaYpp_km5aQUqcn1EikH-0igcEaYyMzZ-cYGfR2QoStz9eiVZf6iiDy0DyM7Z7YolaksJ-LMUz8SoKAXmqkr_Rh8GqVxfpNQJA1-IoFld_xLPP31kSX_HfNP3OBS9u7CDlvvg-U2G1YRkzR3cr_IEFySigEyBIYrW?width=595&height=283&cropmode=none" />

    </header>
    <footer>
        Copyright&copy; {{ \Carbon\Carbon::now()->year }} Veris
    </footer>
    <main>
        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
