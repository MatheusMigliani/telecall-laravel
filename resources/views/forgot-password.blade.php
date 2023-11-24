<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Telecall</title>
    <link rel="shortcut icon" href="./assets/telecall assets/telecall-logo.svg" type="image/x-icon" />
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <!--sweet alert-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
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

        <section class="">
            <div class="container py-5 h-100">
                <div class="row justify-content-center py-5 h-100">
                    <div class="col-md-6 container-md">
                        <div class="card card-body">
                            <div class="card-header card-body">{{ __('Redefinir Senha') }}</div>

                            <div class="card-body">
                                <form method="post" action="{{ route('password.reset') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">{{ __('E-mail') }}</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email Cadastrado"required value="{{ auth()->user()->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">{{ __('Usúario Cadastrado') }}</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Usúario Cadastrado"required value="{{ auth()->user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">{{ __('Telefone Celular') }}</label>
                                        <input type="tel" name="TelCelular" class="form-control"
                                            placeholder="Telefone Fixo"required value="{{ auth()->user()->TelCelular }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">{{ __('Telefone Fixo') }}</label>
                                        <input type="tel" name="TelFixo" class="form-control"
                                            placeholder="Telefone Fixo"required value="{{ auth()->user()->TelFixo }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">{{ __('Cep') }}</label>
                                        <input type="text" name="Cep" class="form-control" placeholder="Cep"
                                            required value="{{ auth()->user()->Cep }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">{{ __('Numero') }}</label>
                                        <input type="text" name="Numero" class="form-control"
                                            placeholder="Numero"required value="{{ auth()->user()->Numero }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">{{ __('Bairro') }}</label>
                                        <input type="text" name="Bairro" class="form-control"
                                            placeholder="Bairro"required value="{{ auth()->user()->Bairro }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">{{ __('Cidade') }}</label>
                                        <input type="text" name="Cidade" class="form-control"
                                            placeholder="Cidade"required value="{{ auth()->user()->Cidade }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">{{ __('Estado') }}</label>
                                        <input type="text" name="Estado" class="form-control"
                                            placeholder="Estado"required value="{{ auth()->user()->Estado }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="answer">{{ __('Nome de um Animal Doméstico') }}</label>
                                        <input type="text" name="answer" class="form-control"
                                            placeholder="Sua pergunta de segurança" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">{{ __('Nova Senha') }}</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">{{ __('Confirme a Nova Senha') }}</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            required>
                                    </div>

                                    <button type="submit" class="btn btn-success botaoadd botaoredef ">
                                        {{ __('Redefinir Senha') }}<i class="fa fa-check-square" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
















        <!---FOOTER-->
        <footer class="text-center text-lg-start footermeu" id="footer">
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
            <div class="text-center text-white p-3" style="opacity: 1.7 m">
                © 2023 Copyright: Matheus Migliani
            </div>
        </footer>
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
        <section class="">
            <div class="container py-5 h-100">
                <div class="row justify-content-center py-5 h-100">
                    <div class="col-md-6 container-md">
                        <div class="card card-body">
                            <div class="card-header card-body">{{ __('Redefinir Senha') }}</div>

                            <div class="card-body">
                                <form method="post" action="{{ route('password.reset') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">{{ __('E-mail') }}</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email Cadastrado"required>
                                    </div>

                                    <div class="form-group">
                                        <label for="answer">{{ __('Nome de um Animal Doméstico') }}</label>
                                        <input type="text" name="answer" class="form-control"
                                            placeholder="Sua pergunta de segurança" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">{{ __('Nova Senha') }}</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">{{ __('Confirme a Nova Senha') }}</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            required>
                                    </div>

                                    <button type="submit" class="btn btn-success botaoadd botaoredef ">
                                        {{ __('Redefinir Senha') }}<i class="fa fa-check-square" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
















        <!---FOOTER-->
        <footer class="text-center text-lg-start footermeu" id="footer">
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
            <div class="text-center text-white p-3" style="opacity: 1.7 m">
                © 2023 Copyright: Matheus Migliani
            </div>
        </footer>
    @endauth

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    <script src="./scripts/localstoragelogin.js"></script>
    <script src="./scripts/logado.js"></script>
    <script src="./scripts/darkmode.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
