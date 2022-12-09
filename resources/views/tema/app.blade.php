<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="../resources/js/app.js"></script>

    <title>@yield('title')</title>
</head>
<body>
    <div class="row min-vh-100 m-0 pt-4 pb-4 align-items-center justify-content-center body__container">
        <div class="col-sm-10">
            <div class="landing__container">
                <div class="col-sm-12">
                    @yield('header')
                </div>
                <div class="content__container">
                    @yield('content')
                </div>
                <div class="row">
                    <div class="col-sm-4 m-auto">
                        @yield('empresa')
                    </div>
                    <div class="col-sm-4 m-auto">
                        @yield('sucursal')
                    </div>
                    <div class="col-sm-4 m-auto">
                        @yield('empleado')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>