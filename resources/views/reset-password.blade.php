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
    @else
        <nav class="navbar navbar-expand-xxl fixed-top -lg">
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
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Resetar Senha') }}</div>

                        <div class="card-body">
                            <!-- Adicione aqui a lógica para verificar o email e as perguntas -->
                            <!-- e permitir a alteração de senha se as respostas estiverem corretas -->
                            <!-- Utilize um formulário para enviar as respostas e a nova senha -->
                            <form method="POST"
                                @csrf

                                <!-- Adicione os campos necessários para as perguntas e a nova senha -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <!-- Adicione os campos para as perguntas -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <!-- Adicione os campos para as perguntas -->
                                <div class="mb-3">
                                    <label for="resposta_1" class="form-label"></label>
                                    <input type="text" class="form-control" id="resposta_1" name="resposta_1" required>
                                </div>

                                <div class="mb-3">
                                    <label for="resposta_2" class="form-label"></label>
                                    <input type="text" class="form-control" id="resposta_2" name="resposta_2" required>
                                </div>

                                <div class="mb-3">
                                    <label for="resposta_3" class="form-label">{</label>
                                    <input type="text" class="form-control" id="resposta_3" name="resposta_3" required>
                                </div>

                                <!-- Adicione o campo para a nova senha -->
                                <div class="mb-3">
                                    <label for="nova_senha" class="form-label">Nova Senha</label>
                                    <input type="password" class="form-control" id="nova_senha" name="nova_senha" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Resetar Senha</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>






















    @endauth





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
