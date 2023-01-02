<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GamerFest</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */body {
                background-color: #000000 !important;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
            <header class="header">
                @include('navbar.app')
                <div id="carouselExampleControls" class="carousel slide slider" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/slider1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/slider2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/slider3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </header>

            <div class="bg-light my-3 py-4">
                <div class="container">
                    <div class="row mx-auto gap-3">
                        <a href="#" class="nav-link col-3 d-flex justify-content-center plataform p-4 gap-4 align-items-center align-contents-center rounded mx-auto d-block">
                            <img src="img/pc.png" alt="pc" class="img-fluid text-light " width="40px">
                            <p class="text-center fs-3 m-0 ">
                                PC
                            </p>
                        </a>
                        <a href="#" class="nav-link  col-3 d-flex justify-content-center plataform p-4 gap-4 align-items-center align-contents-center rounded mx-auto d-block">
                            <img src="img/ps4.png" alt="pc" class="img-fluid text-light " width="40px">
                            <p class="text-center fs-3 m-0 ">
                                PS4
                            </p>
                        </a>
                        <a href="#" class="nav-link  col-3 d-flex justify-content-center plataform p-4 gap-4 align-items-center align-contents-center rounded mx-auto d-block">
                            <img src="img/movil.png" alt="pc" class="img-fluid text-light " width="40px">
                            <p class="text-center fs-3 m-0 ">
                                MOVIL
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-light my-2 py-4">
                <div class="container">
                    <div class="noticias">
                        <h2 class="text-center">Noticias</h2>
                    </div>
                    <div class="row mx-auto gap-3">
                        <a href="#" class="nav-link col-3  plataform rounded mx-auto d-block">
                            <img src="img/slider1.jpg" alt="pc" class="img-fluid text-light" width="100%">
                        </a>
                        <a href="#" class="nav-link col-3  plataform rounded mx-auto d-block">
                            <img src="img/slider2.jpg" alt="pc" class="img-fluid text-light" width="100%">
                        </a>
                        <a href="#" class="nav-link col-3  plataform rounded mx-auto d-block">
                            <img src="img/slider3.jpg" alt="pc" class="img-fluid text-light" width="100%">
                        </a>
                    </div>
            </div>
            </div>


    </body>
</html>
