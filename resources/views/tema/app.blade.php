<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body class='bg-ligth'>
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                @yield('header')
            </div>
            <div class="col-sm-12">
                @yield('content')
            </div>
            <div class="col-sm-4 my-4">
                @yield('empresa')
            </div>
            <div class="col-sm-4 my-4">
                @yield('sucursal')
            </div>
            <div class="col-sm-4 my-4">
                @yield('empleado')
            </div>
        </div>
    </div>
</body>
</html>