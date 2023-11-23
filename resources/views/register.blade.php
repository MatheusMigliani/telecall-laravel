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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!--css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
    <!---sweet alert-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css"
    />
  </head>
  <body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-xxl fixed-top -lg">
      <div class="container-xxl">
        <a class="navbar-brand" href="index">
          <img
            src="./assets/telecall assets/telecall-logo-white-1.png"
            alt=""
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Banco de dados
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="cpaas"
                    >Modelo do Banco de Dados</a
                  >
                </li>
                <li><a class="dropdown-item" href="#">Banda Larga</a></li>
                <li>
                  <a class="dropdown-item" href="#">Wi-Fi</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
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
                  <a class="dropdown-item" href="cpaas"
                    >Google Verified Calls</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="cpaas">SMS Programável</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
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
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
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
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
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
            <a
              href="login"
              class="btn btn-warning shadow-sm d-sm-block d-block fa fa-user fa-2x"
            >
              Área do Cliente</a
            >
          </div>
          <div>
            <button
              id="dark-mode-toggle"
              class="btn btndarkmode fa fa-solid fa-moon-o"
            ></button>
          </div>
        </div>
      </div>
    </nav>

    <!---login-->
    <section class="gradient-form form3">
      <div class="container py-5 h-20">
        <div class="row">
          <div class="form-row">
            <div class="card rounded-3 text-black">
              <div class="row g-5">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center img-login">
                      <img
                        src="./assets/telecall assets/telecall-logo.svg"
                        style="width: 185px"
                        alt="logo"
                      />
                    </div>

                    <form id="cadastro-form" class="form-row" action="/registrar" method="POST">
                        @csrf
                      <p>Faça seu Registro</p>

                      <div class="form-outline mb-4">
                        <input
                          type="text"
                          id="user"
                          name="name"
                          minlength="6"
                          class="form-control email"
                          maxlength="6"
                          placeholder="Usuário"

                        />
                        <label class="form-label" for="user"></label>
                        <span id="user-error" class="invalid-feedback"></span>
                        <span id="user-success" class="valid-feedback"></span>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="email"
                          id="email"
                          name="email"
                          class="form-control email"
                          placeholder="E-mail"

                        />
                        <label class="form-label" for="email"></label>
                        <span id="email-error" class="invalid-feedback"></span>
                        <span id="email-success" class="valid-feedback"></span>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="password"
                          id="senha"
                          class="form-control senha"
                          placeholder="Senha"
                          name="password"
                          minlength="8"
                          maxlength="8"

                        />
                        <label class="form-label" for="form2Example22"></label>
                        <span id="senha-error" class="invalid-feedback"></span>
                        <span id="senha-success" class="valid-feedback"></span>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="password"
                          name="password2"
                          id="senha2"
                          class="form-control senha2"
                          placeholder="Confirme a Senha"
                          minlength="8"

                        />
                        <label class="form-label" for="form2Example22"></label>
                        <span id="senha2-error" class="invalid-feedback"></span>
                        <span id="senha2-success" class="valid-feedback"></span>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="text"
                          id="nomecompleto"
                          class="form-control nomecompleto"
                          name="NomeCompleto"
                          placeholder="Nome Completo"

                        />
                        <label class="form-label" for="nomecompleto"></label>
                        <span
                          id="nomecompleto-error"
                          class="invalid-feedback"
                        ></span>
                        <span
                          id="nomecompleto-success"
                          class="valid-feedback"
                        ></span>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="text"
                          id="nomemae"
                          name="NomeMaterno"
                          class="form-control nomemae"
                          placeholder="Nome Materno"

                        />
                        <label class="form-label" for="form2Example22"></label>
                        <span
                          id="nomemae-error"
                          class="invalid-feedback"
                        ></span>
                        <span
                          id="nomemae-success"
                          class="valid-feedback"
                        ></span>
                      </div>

                      <div class="form-outline mb-4">
                        CPF (Apenas Dígitos)
                        <input
                          type="text"
                          id="cpfInput"
                          name="cpf"
                          class="form-control cpfInput"
                          placeholder="CPF"
                          maxlength="14"
                          minlength="14"


                        />
                        <label class="form-label" for="cpfInput"></label>
                        <span id="cpf-error" class="invalid-feedback"></span>
                        <span id="cpf-success" class="valid-feedback"></span>
                      </div>

                      <div class="form-outline mb-4">
                        Data de Nascimento
                        <input
                          type="date"
                          id="Nascimento"
                          name="nascimento"
                          class="form-control nascimento"
                          placeholder="Data de Nascimento"

                        />
                        <label class="form-label" for="Nascimento"></label>
                        <span
                          id="nascimento-error"
                          class="invalid-feedback"
                        ></span>
                        <span
                          id="nascimento-success"
                          class="valid-feedback"
                        ></span>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="tel"
                          maxlength="19"
                          id="phone"
                          class="form-control celular"
                          oninput="applyPhoneNumberMask(this)"
                          placeholder="Telefone Celular"
                          name="TelCelular"
                        />
                        <label class="form-label" for="celular"></label>
                        <span
                          id="celular-error"
                          class="invalid-feedback"
                        ></span>
                        <span
                          id="celular-error2"
                          class="invalid-feedback"
                        ></span>
                        <span
                          id="celular-success"
                          class="valid-feedback"
                        ></span>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="tel"
                          id="telfixo"
                          name="TelFixo"
                          maxlength="18"
                          class="form-control telfixo"
                          placeholder="Telefone Fixo"
                          oninput="applyTelefoneFixoNumberMask(this)"

                        />
                        <label class="form-label" for="telfixo"></label>
                        <span
                          id="telfixo-error"
                          class="invalid-feedback"
                        ></span>
                        <span
                          id="telfixo-success"
                          class="valid-feedback"
                        ></span>
                      </div>

                      <div class="form-outline mb-4" >
                        Gênero

                        <select
                          class="form-outline mb-4 form-control genderform form-select"
                          name="Genero"
                          id="sexo"

                        >
                          <option value="1" disabled>Gênero</option>
                          <option value="2">Feminino</option>
                          <option value="3">Masculino</option>
                          <option value="4">Outro</option>
                        </select>
                      </div>
                      <br />

                      <div class="form-outline mb-4" id="cep">
                        <input
                          type="text"
                          id="TxtCep"
                          name="Cep"
                          value=""
                          size="10"
                          class="form-control cep"
                          placeholder="CEP"

                        />
                        <label class="form-label" for="cep"></label>
                        <span
                          id="cepvalido-error"
                          class="invalid-feedback"
                        ></span>
                        <span
                          id="cepvalido-success"
                          class="valid-feedback"
                        ></span>
                      </div>

                      <div class="form-outline mb-4" id="bairro">
                        <input
                          type="text"
                          id="TxtBairro"
                          name="Bairro"
                          class="form-control bairro"
                          placeholder="Bairro"
                          maxlength="9"
                          onblur="pesquisacep(this.value);"

                        />
                        <label class="form-label" for="bairro"></label>
                        <span id="bairro-error" class="invalid-feedback"></span>
                        <span id="bairro-success" class="valid-feedback"></span>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="text"
                          id="TxtRua"
                          name="Rua"
                          class="form-control"
                          placeholder="Rua"

                        />
                        <label class="form-label" for="bairro"></label>
                        <span id="rua-error" class="invalid-feedback"></span>
                        <span id="rua-success" class="valid-feedback"></span>
                      </div>
                      <div class="form-outline mb-4">
                        <input
                          type="text"
                          id="numero"
                          name="Numero"
                          class="form-control bairro"
                          placeholder="N°"

                        />
                        <label class="form-label" for="bairro"></label>
                      </div>

                      <div class="form-outline mb-4">
                        <input
                          type="text"
                          id="TxtCidade"
                          name="Cidade"
                          class="form-control endereço"
                          placeholder="Cidade"

                        />
                        <label class="form-label" for="endereço"></label>
                        <span id="cidade-error" class="invalid-feedback"></span>
                        <span id="cidade-success" class="valid-feedback"></span>
                      </div>
                      <div class="form-outline mb-4">
                        <input
                          type="text"
                          id="TxtEstado"
                          name="Estado"
                          class="form-control endereço"
                          placeholder="Estado"

                        />
                        <label class="form-label" for="endereço"></label>
                        <span id="estado-error" class="invalid-feedback"></span>
                        <span id="estado-success" class="valid-feedback"></span>
                      </div>
                      <h2>Pergunta Secreta</h2>
                      <h7 style="color: red">Esta pergunta sera usada pra recuperar sua senha caso necessario.</h7>

                      <div class="form-group">
                        <label  name="question_1" for="pergunta1">Nome de um Animal Doméstico:</label>
                        <input type="text" name="answer_1" id="pergunta1" class="form-control" required>
                    </div>



                      <div class="form-outline mb-4">
                        <input
                          type="hidden"
                          id="permissao"
                          name="Permissao"
                          class="form-control permissao"
                          value="Cliente"


                        />
                        <label class="form-label" for="endereço"></label>
                      </div>





                      <div class="text-center pt-1 mb-5 pb-1">
                        <button
                          class="btn btn-danger btn-block fa-lg gradient-custom-2 mb-3 btn-login"
                          type="submit"
                        >
                          Criar Conta
                        </button>
                        <a class="esqsenha" href="#!">Esqueceu a senha?</a>
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <p class="mb-0 me-2">Já tem uma conta?</p>
                        <a href="login"
                          ><button
                            type="button"
                            href="login"
                            class="btn btn-danger btn-login"
                          >
                            Fazer Login
                          </button></a
                        >
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 d-flex gradient-custom-2 card-gradiente">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <img
                      src="./assets/telecall assets/telecall-logo-white-1.png"
                      alt=""
                      class="imgcardtelecall"
                    />

                    <h4 class="mb-4 textocard">Faça Já Seu Registro !</h4>
                    <p class="small mb-4 textocard2">
                      O Melhor da Telefonia Móvel para a sua Empresa.
                    </p>
                    <p class="small mb-4 textocard3">
                      PLANOS A PARTIR DE R$ 29,90 Planos pré-pagos de 1 a 30GB
                      com valores que cabem no orçamento da sua empresa.
                    </p>
                    <img
                      src="./assets/telecall assets/telecall-logo-white-1.png"
                      alt=""
                      class="imgcardtelecall2"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---FOOTER-->
    <footer class="text-center text-lg-start footermeu" id="footer">
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

    <!--booostrap js-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <!--meu js-->
    <script src="./scripts/register.js"></script>
    <script src="./scripts/login.js"></script>
    <script src="./scripts/cep.js"></script>
    <script src="./scripts/localstorageregister.js"></script>
    <script src="./scripts/darkmode.js"></script>
    <!--sweet alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
@include('sweetalert::alert')
  </body>
</html>
