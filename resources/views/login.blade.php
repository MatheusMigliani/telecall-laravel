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
    <!--css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <!---sweet alert-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css" />
</head>

<body>
    <!--NAVBAR-->
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
                            class="btn btn-warning shadow-sm d-sm-block d-block fa fa-user fa-2x btnlogin">
                            Área do Cliente</a>
                    </div>
                    <div>
                        <button id="dark-mode-toggle" class="btn btndarkmode fa fa-solid fa-moon-o"></button>
                    </div>
                </div>
            </div>
        </nav>
        <section class="h-100 gradient-form form3">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="text-center img-login">
                                            <img src="./assets/telecall assets/telecall-logo.svg" style="width: 185px"
                                                alt="logo" />
                                        </div>

                                        <form id="login-form" action="/logar" method="POST">
                                            @csrf
                                            <p>Faça login</p>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="user-login" name="loginname"
                                                    class="form-control email userinput" placeholder="Usuário" />
                                                <label class="form-label" for="user"></label>
                                                <span id="user-error" class="invalid-feedback"></span>
                                                <span id="user-success" class="valid-feedback"></span>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="senha-login" minlength="8"
                                                maxlength="8"class="form-control senhainput"
                                                    placeholder="Senha" name="loginpassword" />
                                                <label class="form-label" for="form2Example22"></label>
                                                <span id="senha-error" class="invalid-feedback"></span>
                                                <span id="senha-success" class="valid-feedback"></span>
                                                <br>
                                                <a href="{{ url('/forgot-password') }}" class="h2 botaoadd botaosenha"
                                                    style="text-transform: None;">Esqueceu a senha?</a>
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button
                                                    class="btn btn-danger btn-block fa-lg gradient-custom-2 mb-3 btn-login"
                                                    type="submit">
                                                    Login
                                                </button>


                                            </div>

                                            <div class="d-flex">
                                                <h5 class="mb-0 me-2">Não tem<br>uma conta?

                                                </h5>
                                                <a href="register">
                                                    <button type="button" class="btn btn-danger btn-login">
                                                        Criar Agora!
                                                    </button></a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 gradient-custom-2 card-gradiente">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4 textocard">Faça seu Login Agora !</h4>
                                        <p class="small mb-4 textocard3">
                                            PLANOS A PARTIR DE R$ 29,90 Planos pré-pagos de 1 a 30GB
                                            com valores que cabem no orçamento da sua empresa.
                                        </p>
                                        <img src="./assets/telecall assets/telecall-logo-white-1.png" alt=""
                                            class="imgcardtelecall2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        @endauth

        <!---login-->

    </section>
    <!---FOOTER-->
    <footer class="text-center text-lg-start footermeu footer" id="footer">
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

    <!--booostrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!--meu js-->
    <script src="./scripts/login.js"></script>
    <script src="./scripts/localstoragelogin.js"></script>
    <script src="./scripts/logado.js"></script>
    <script src="./scripts/darkmode.js"></script>

    <!--sweet alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
