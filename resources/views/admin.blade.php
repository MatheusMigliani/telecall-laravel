<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- Adicione aqui seus links para folhas de estilo, scripts, etc. -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!--sweet alert-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css" />
</head>

<body>
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
    @auth
        <div class="container">

            <h1>Lista de Usuários</h1>
            <button type="button" class="btn btn-success botaoadd" data-bs-toggle="modal"
                data-bs-target="#adicionarUsuarioModal">
                <i class="fa-solid fa-user-plus"></i>
                Adicionar Usuário
            </button>

            <table class="table meudeus">
                <thead>
                    <tr>
                        <th class=> <i style="color:red;" class="fa-regular fa-user fa-1x "></i>ID</th>
                        <th><i class="fa-solid fa-right-to-bracket iconesadmin "></i>Nome</th>
                        <th><i class="fa-solid fa-envelope iconesadmin "></i><br>Email</th>
                        <th><i class="fa-solid fa-id-badge iconesadmin"></i><br>Nome Completo</th>
                        <th><i class="fa-solid fa-id-card iconesadmin"></i><br>CPF</th>
                        <th><i  class="fa-solid fa-mobile iconesadmin "></i><br>Telefone Celular</th>
                        <th><i  class="fa-solid fa-phone-volume iconesadmin"></i><br>Telefone Fixo</th>
                        <th><i  class="fa-solid fa-house iconesadmin"></i><br>Endereço</th>
                        <th><i  class="fa-solid fa-location-dot iconesadmin"></i>Numero</th>
                        <th><i  class="fa-solid fa-bars-staggered iconesadmin "></i> Ações <i style="color:red;"class="fa-solid fa-arrow-down"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->NomeCompleto }}</td>
                            <td>{{ $usuario->cpf }}</td>
                            <td>{{ $usuario->TelCelular }}</td>
                            <td>{{ $usuario->TelFixo }}</td>
                            <td>{{ $usuario->Rua }}</td>
                            <td>{{ $usuario->Numero }}</td>
                            <!-- Adicione mais colunas conforme necessário -->
                            <td>
                                <!-- Botão para abrir o modal de edição -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#editarUsuario{{ $usuario->id }}">
                                    Editar
                                </button>

                                <!-- Botão para abrir o modal de exclusão -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#excluirUsuario{{ $usuario->id }}">
                                    Excluir
                                </button>
                            </td>
                        </tr>

                        <!-- Conteúdo do Modal de Edição -->
                        <div class="modal fade" id="editarUsuario{{ $usuario->id }}" tabindex="-1"
                            aria-labelledby="editarUsuarioLabel{{ $usuario->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editarUsuarioLabel{{ $usuario->id }}">Editar Usuário
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Formulário de Edição -->
                                        <form action="{{ route('atualizarUsuario', ['id' => $usuario->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT') <!-- Adicione esta linha para indicar que é um método PUT -->

                                            <!-- Campos do Formulário -->
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nome</label>
                                                <input type="text" class="form-control" id="name" name="name" maxlength="6"
                                                    value="{{ $usuario->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="{{ $usuario->email }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="NomeCompleto" class="form-label">Nome Completo</label>
                                                <input type="text" class="form-control" id="NomeCompleto"
                                                    name="NomeCompleto" value="{{ $usuario->NomeCompleto }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="cpf" class="form-label">CPF</label>
                                                <input type="text" class="form-control" id="cpf" name="cpf"
                                                    value="{{ $usuario->cpf }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="TelCelular" class="form-label">Telefone Celular</label>
                                                <input type="text" class="form-control" id="TelCelular"
                                                    name="TelCelular" value="{{ $usuario->TelCelular }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="TelFixo" class="form-label">Telefone Fixo</label>
                                                <input type="text" class="form-control" id="TelFixo" name="TelFixo"
                                                    value="{{ $usuario->TelFixo }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="Rua" class="form-label">Rua</label>
                                                <input type="text" class="form-control" id="Rua" name="Rua"
                                                    value="{{ $usuario->Rua }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Rua" class="form-label">N°</label>
                                                <input type="text" class="form-control" id="Rua" name="Numero"
                                                    value="{{ $usuario->Numero }}">
                                            </div>

                                            <!-- Adicione outros campos conforme necessário -->

                                            <!-- Botão de Atualizar -->
                                            <button type="submit" class="btn btn-primary">Atualizar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Conteúdo do Modal de Exclusão -->
                        <div class="modal fade" id="excluirUsuario{{ $usuario->id }}" tabindex="-1"
                            aria-labelledby="excluirUsuarioLabel{{ $usuario->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="excluirUsuarioLabel{{ $usuario->id }}">Excluir
                                            Usuário
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Tem certeza que deseja excluir o usuário {{ $usuario->name }}?</p>
                                        <!-- Formulário de Exclusão -->
                                        <form action="{{ route('excluirUsuario', ['id' => $usuario->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <!-- Adiciona esta linha para indicar que é um método DELETE -->

                                            <!-- Botão de Excluir -->
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Modal de Adição de Usuário -->
        <div class="modal fade" id="adicionarUsuarioModal" tabindex="-1" aria-labelledby="adicionarUsuarioModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="adicionarUsuarioModalLabel">Adicionar Usuário</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulário de Adição de Usuário -->
                        <form action="{{ route('adicionarUsuario') }}" method="post">
                            @csrf

                            <!-- Campos do Formulário -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" required maxlength="6">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ $usuario->email }}">
                            </div>


                            <div class="mb-3">
                                <label for="NomeCompleto" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="NomeCompleto" name="NomeCompleto"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" required>
                            </div>

                            <div class="mb-3">
                                <label for="TelCelular" class="form-label">Telefone Celular</label>
                                <input type="text" class="form-control" id="TelCelular" name="TelCelular" required>
                            </div>

                            <div class="mb-3">
                                <label for="TelFixo" class="form-label">Telefone Fixo</label>
                                <input type="text" class="form-control" id="TelFixo" name="TelFixo" required>
                            </div>

                            <div class="mb-3">
                                <label for="Rua" class="form-label">Rua</label>
                                <input type="text" class="form-control" id="Rua" name="Rua" required>
                            </div>

                            <div class="mb-3">
                                <label for="Numero" class="form-label">N°</label>
                                <input type="text" class="form-control" id="Numero" name="Numero" required>
                            </div>

                            <!-- Adicione outros campos conforme necessário -->

                            <!-- Botão de Adicionar Usuário -->
                            <button type="submit" class="btn btn-success">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    @endauth
    <!-- Adicione aqui seus scripts, rodapé, etc. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
@include('sweetalert::alert')
</body>

</html>
