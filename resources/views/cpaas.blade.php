<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Telecall</title>
    <link
      rel="shortcut icon"
      href="./assets/telecall assets/telecall-logo.svg"
      type="image/x-icon"
    />
    <!--bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cpaas.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!--css-->
    <link rel="stylesheet" href="./style/index.css" />
    <!--sweet alert-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css"
    />
  </head>
  <body>
    @auth
    <nav class="navbar navbar-expand-xxl -lg">
        <div class="container-xxl">
            <a class="navbar-brand" href="index">
                <img src="./assets/telecall assets/telecall-logo-white-1.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Banco de dados
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="cpaas">Modelo do Banco de Dados</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Banda Larga</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Wi-Fi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CPaaS
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="cpaas">2FA</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cpaas">Número Máscara</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cpaas">Google Verified Calls</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cpaas">SMS Programável</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Telefonia
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PABX IP Virtual</a></li>
                            <li><a class="dropdown-item" href="#">E1 / SIP TRUNK</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Números 0800 e 40XX</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Rede e infraestrutura
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ponto-a-Ponto</a></li>
                            <li><a class="dropdown-item" href="#">MPLS</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Fibra apagada e Dutos</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Co-Locations</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mobilidade
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">Celular Empresarial</a>
                            </li>
                            <li><a class="dropdown-item" href="#">MVNA/E</a></li>
                        </ul>
                    </li>
                </div>
                <div>
                    <a href="dashboard" id="btn-login"
                        class="btn btn-warning shadow-sm d-sm-block d-block fa fa-user btnlogin">
                        Área do Cliente</a>
                </div>
                <div>
                    <form action="/logout" method="POST">
                        @csrf
                        <button href="#" id="btn-logout"
                            class="btn btn-warning shadow-sm d-sm-block d-block fa fa-sign-out  btnlogout">Logout</button>
                    </form>
                </div>
                <div>
                    <button id="dark-mode-toggle" class="btn btndarkmode fa fa-solid fa-moon-o"></button>
                </div>
            </div>
        </div>
    </nav>


@else
    <nav class="navbar navbar-expand-xxl fixed-top -lg">
        <div class="container-xxl">
            <a class="navbar-brand" href="index">
                <img src="./assets/telecall assets/telecall-logo-white-1.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Banco de dados
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="cpaas">Modelo do Banco de Dados</a>
                            </li>
                            <li><a class="dropdown-item" href="dashboard">Banda Larga</a></li>
                            <li>
                                <a class="dropdown-item" href="dashboard">Wi-Fi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            CPaaS
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="cpaas">2FA</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cpaas">Número Máscara</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cpaas">Google Verified Calls</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cpaas">SMS Programável</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Telefonia
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PABX IP Virtual</a></li>
                            <li><a class="dropdown-item" href="#">E1 / SIP TRUNK</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Números 0800 e 40XX</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Rede e infraestrutura
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ponto-a-Ponto</a></li>
                            <li><a class="dropdown-item" href="#">MPLS</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Fibra apagada e Dutos</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Co-Locations</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mobilidade
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">Celular Empresarial</a>
                            </li>
                            <li><a class="dropdown-item" href="#">MVNA/E</a></li>
                        </ul>
                    </li>
                </div>
                <div>
                    <a href="login" id="btn-login"
                        class="btn btn-warning shadow-sm d-sm-block d-block fa fa-user  btnlogin">
                        Área do Cliente</a>
                </div>
                <div>
                    <button id="dark-mode-toggle" class="btn btndarkmode fa fa-solid fa-moon-o"></button>
                </div>
            </div>
        </div>
    </nav>

@endauth
  <!--carousel-->
    <div class="container">

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators c-indicators">
          <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
          ></button>
          <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
          ></button>
          <button
          type="button"
          data-bs-target="#hero-carousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active c-item">
            <img
            src="./assets/telecall assets/CEL-EMPRESARIAL-2-1.png"
            class="d-block w-100 c-img"
            alt="..."
            />
          </div>
          <div class="carousel-item c-item">
            <img
            src="./assets/telecall assets/PABX2.png"
            class="d-block w-100 c-img"
            alt="..."
            />
          </div>
          <div class="carousel-item c-item">
            <img
            src="./assets/telecall assets/INTERNET-DEDICADA.png"
            class="d-block w-100 c-img"
            alt="..."
            />
          </div>
        </div>
        <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#hero-carousel"
        data-bs-slide="prev"
        >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#hero-carousel"
      data-bs-slide="next"
      >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Proximo</span>
    </button>
  </div>
  <div class="container TEXT text-center c-text">
    <div class="card-body" id="servicos">Modelagem do Banco de dados</div>
  </div>
</div>
  <!--cards-->
  <div class="container bordacont">

    <div id="myCarousel" class="carousel slide c2-main" data-bs-ride="carousel">

      <div class="carousel-inner ">

        <div class="carousel-item active c2">
          <img src="./assets/logico.png" class="c2-img" alt="Imagem 1">
        </div>
        <div class="carousel-item c2">
          <img src="./assets/conceitual.png"   class="c2-img" alt="Imagem 2">
        </div>


      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>

  </div>











  <div class="container TEXT text-center c-text">
    <div class="card-body" id="servicos">CPaaS</div>
  </div>
<div class="container bordacont">

  <div id="myCarousel" class="carousel slide c2-main" data-bs-ride="carousel">

    <div class="carousel-inner ">

      <div class="carousel-item active c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-02.png" class="c2-img" alt="Imagem 1">
      </div>
      <div class="carousel-item c2">
        <img src="assets/cpaas assets/Apresentação CPaaS-04.png"   class="c2-img" alt="Imagem 2">
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-03.png"  class="c2-img"  >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-05.png"  class="c2-img"   >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-07.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-09.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-11.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-18.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-19.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-23.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-25.png"  class="c2-img"   >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-26.png"  class="c2-img"   >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-27.png"  class="c2-img"   >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-28.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-32.png"  class="c2-img"   >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-33.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-34.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-35.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-36.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-37.png"  class="c2-img"    >
      </div>
      <div class="carousel-item hover-zoom c2">
        <img src="./assets/cpaas assets/Apresentação CPaaS-38.png"  class="c2-img">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>

</div>







    <!---FOOTER-->
    <footer class="text-center text-lg-start footermeu"
    id="footer">
      <div class="container d-flex justify-content-center py-5">
        <a
          href="https://github.com/MatheusMigliani"
          class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-secondary"
        >
          <i class="fa fa-github fafooter"></i>
        </a>
        <a
          href="https://www.instagram.com/telecallbr/"
          class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter instagrambg"
        >
          <i class="fa fa-instagram fafooter"></i>
        </a>
        <a
          href="https://www.facebook.com/TelecallBr"
          class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-primary"
        >
          <i class="fa fa-facebook fafooter"></i>
          <a
            href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial"
            class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-success"
          >
            <i class="fa fa-whatsapp fafooter"></i>
          </a>
          <a
            href="https://www.linkedin.com/in/matheus-migliani/"
            class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-primary"
          >
            <i class="fa fa-linkedin fafooter"></i>
          </a>
        </a>
      </div>
      <div class="text-center text-white p-3" style="opacity: 0.7">
        © 2023 Copyright: Matheus Migliani
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    <script src="owl.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./scripts/darkmode.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
@include('sweetalert::alert')
  </body>
</html>
