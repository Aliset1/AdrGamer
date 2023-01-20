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

            <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Gamer Fest
          </h6>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            PRODUCTOS
          </h6>
          <p>
            <a href="#!" class="text-reset">Ctalogo Productos </a>
          </p>
          <p>
            <a href="#!" class="text-reset">Eventos anateriores </a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contactos </a>
          </p>
          <p>
            <a href="#!" class="text-reset">Juegos </a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">CONTACTOS</h6>
          <p><i class="fas fa-home me-3"></i> Latacunga , Belidario Quevedo</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            gamerfest@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i>Tomas Rios </p>
          <p><i class="fas fa-print me-3"></i>Adriana Vargas </p>
          <p><i class="fas fa-print me-3"></i>Alexander Quiñonez </p>
          <p><i class="fas fa-print me-3"></i>Erika Suntai </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Gamer Fest Grupo</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


    </body>
</html>
