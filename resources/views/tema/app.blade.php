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
    <div class="row min-vh-100 m-0 p-5 align-items-center justify-content-center body__container">
        <div class="col-sm-12 back__register">
            <div class="landing__container">
                <div class="col-sm-12">
                    @yield('header')
                </div>
                <div class="content__container">
                    @yield('content')
                </div>
                <div class="row">
                    <div class="col-sm-4 ">
                        @yield('empresa')
                    </div>
                    <div class="col-sm-4 ">
                        @yield('sucursal')
                    </div>
                    <div class="col-sm-4 ">
                        @yield('empleado')
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 contact__container">
            <button type="button" class="button__options" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="https://cdn-icons-png.flaticon.com/512/2343/2343694.png" alt="info contact" class="link__icon"></button>
            <a href="https://github.com/Ferclemens" target="_blank" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/512/3291/3291695.png" alt="GitHub link" class="link__icon"></a>
            <a href="https://www.linkedin.com/in/foclemens/" target="_blank" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/512/3536/3536505.png" alt="LinkedIn link" class="link__icon"></a>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info de Contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <p>Email: foclemens@gmail.com</p>
                <p>Teléfono: 3624 685267</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn button__general" data-bs-dismiss="modal">Anotado!</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>