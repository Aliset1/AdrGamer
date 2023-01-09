<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>


    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark barra">
                    <div class="container-fluid gap-5">
                    <a class="navbar-brand" href="#">
                        <img src="img/LOGO.png" alt="Bootstrap" width="50" height="50">
                    </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 opcionesNav">
                            <form class="" role="calendar">
                                <a class="btn text-white" href="/calendar">Calendario</a>
                            </form>
                            <li class="nav-item">
                             <a class="nav-link primary  text-white"  href="/calendar">Calendario</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link primary text-white" href="/posiciones">Posiciones</a>
                            </li>
                            <li class="nav-item " >
                            <a class="nav-link text-white" href="/juegos">Juegos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white " href="/normativas">Normativas</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/noticias">Noticias</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/contactos">Contactos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-white" href="/patrocinadores">Patrocinadores</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="login">
                            <a class="btn btn-outline-success" href="/login">Iniciar Sesion</a>
                        </form>
                        <form class="d-flex" role="register">
                            <a class="btn btn-outline-success" href="/register">Registro</a>
                        </form>
                        </div>
                    </div>
                </nav>
</body>
</html>
