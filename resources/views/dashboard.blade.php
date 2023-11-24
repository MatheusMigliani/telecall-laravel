<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Telecall</title>
    <link rel="shortcut icon" href="./assets/telecall assets/telecall-logo.svg" type="image/x-icon" />
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!--css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <!--sweet alert-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css" />
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
                            class="btn btn-warning shadow-sm d-sm-block d-block fa fa-user fa-2x btnlogin">
                            Área do Cliente</a>
                    </div>
                    <div>
                        <form action="/logout" method="POST">
                            @csrf
                            <button href="#" id="btn-logout"
                                class="btn btn-warning shadow-sm d-sm-block d-block fa fa-sign-out fa-2x btnlogout">Logout</button>
                        </form>
                    </div>
                    <div>
                        <button id="dark-mode-toggle" class="btn btndarkmode fa fa-solid fa-moon-o"></button>
                    </div>
                </div>
            </div>
        </nav>




        <div class="container d-flex justify-content-center mt-5">
            <div class="card  text-center" style="width: 30rem;">
                <div class="card-body">
                    <div class="fa fa-user-circle"></div>
                    <h5 class="card-title mt-3">Seja Bem-Vindo !</h5>
                    <p class="card-text">Nesta página você pode mudar todas suas informações pessoais.</p>
                    <div class="container">

                        <div class="user-info mt-4 container">
                            <div class="info-item">
                                <i class="fa-regular fa-user fa-1x iconesadmin"></i>
                                <span>Usuário <br>
                                    <div class="carddashboard">{{ auth()->user()->name }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-envelope fa-1x iconesadmin"></i>
                                <span>Email <br>
                                    <div class="carddashboard">{{ auth()->user()->email }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-id-badge iconesadmin"></i>
                                <span>CPF <br>
                                    <div class="carddashboard">{{ auth()->user()->cpf }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-id-badge iconesadmin"></i>
                                <span>Nome <br>
                                    <div class="carddashboard">{{ auth()->user()->NomeCompleto }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-id-badge iconesadmin"></i>
                                <span>Nome Materno <br>
                                    <div class="carddashboard">{{ auth()->user()->NomeMaterno }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-id-badge iconesadmin"></i>
                                <span>Nascimento <br>
                                    <div class="carddashboard">{{ auth()->user()->nascimento }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-id-badge iconesadmin"></i>
                                <span>TelCelular <br>
                                    <div class="carddashboard">{{ auth()->user()->TelCelular }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-id-badge iconesadmin"></i>
                                <span>TelFixo <br>
                                    <div class="carddashboard">{{ auth()->user()->TelFixo }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-house iconesadmin"></i>
                                <span>Cep <br>
                                    <div class="carddashboard">{{ auth()->user()->Cep }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-house iconesadmin"></i>
                                <span>Bairro <br>
                                    <div class="carddashboard">{{ auth()->user()->Bairro }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-house iconesadmin"></i>
                                <span>Rua <br>
                                    <div class="carddashboard">{{ auth()->user()->Bairro }}
                                        N°{{ auth()->user()->Numero }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-house iconesadmin"></i>
                                <span>Cidade <br>
                                    <div class="carddashboard">{{ auth()->user()->Cidade }}</div>
                                </span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-house iconesadmin"></i>
                                <span>Estado <br>
                                    <div class="carddashboard">{{ auth()->user()->Estado }}</div>
                                </span>
                            </div>



                            <!-- Add other user data fields here -->

                            <div class="mt-3">
                                <a href="{{ url('/forgot-password') }}" class="btn btn-secondary botaoadd">Alterar Senha</a>
                            </div>
                            <!-- Modal para editar dados -->








                        </div>
                    </div>
                </div>
            </div>
        </div>









        <footer class="text-center text-lg-start footermeu " id="footer">
            <div class="container d-flex justify-content-center py-5">
                <a href="https://github.com/MatheusMigliani"
                    class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-secondary">
                    <i class="fa fa-github fafooter"></i>
                </a>
                <a href="https://www.instagram.com/telecallbr/"
                    class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter instagrambg">
                    <i class="fa fa-instagram fafooter"></i>
                </a>
                <a href="https://www.facebook.com/TelecallBr"
                    class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-primary">
                    <i class="fa fa-facebook fafooter"></i>
                    <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial"
                        class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-success">
                        <i class="fa fa-whatsapp fafooter"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/matheus-migliani/"
                        class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-primary">
                        <i class="fa fa-linkedin fafooter"></i>
                    </a>
                </a>
            </div>
            <div class="text-center text-white p-3" style="opacity: 0.7">
                © 2023 Copyright: Matheus Migliani
            </div>
        </footer>
    @else
        <nav class="navbar navbar-expand-xxl -lg">
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
                        <a href="login" id="btn-login"
                            class="btn btn-warning shadow-sm d-sm-block d-block fa fa-user fa-2x btnlogin">
                            Área do Cliente</a>
                    </div>
                    <div>
                        <button id="dark-mode-toggle" class="btn btndarkmode fa fa-solid fa-moon-o"></button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row gap-5">

            <footer class="text-center text-lg-start footermeu " id="footer">
                <div class="container d-flex justify-content-center py-5">
                    <a href="https://github.com/MatheusMigliani"
                        class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-secondary">
                        <i class="fa fa-github fafooter"></i>
                    </a>
                    <a href="https://www.instagram.com/telecallbr/"
                        class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter instagrambg">
                        <i class="fa fa-instagram fafooter"></i>
                    </a>
                    <a href="https://www.facebook.com/TelecallBr"
                        class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-primary">
                        <i class="fa fa-facebook fafooter"></i>
                        <a href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial"
                            class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-success">
                            <i class="fa fa-whatsapp fafooter"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/matheus-migliani/"
                            class="btn btn-outline-light btn-lg btn-floating mx-2 btnfooter bg-primary">
                            <i class="fa fa-linkedin fafooter"></i>
                        </a>
                    </a>
                </div>
                <div class="text-center text-white p-3" style="opacity: 0.7">
                    © 2023 Copyright: Matheus Migliani
                </div>
            </footer>

        @endauth




        <!---FOOTER-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
        <script src="owl.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="./scripts/darkmode.js"></script>
        <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
        @include('sweetalert::alert')
</body>

</html>
