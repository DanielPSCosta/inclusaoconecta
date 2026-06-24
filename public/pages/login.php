<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faça uma doação para apoiar a inclusão digital de idosos com a Inclusão conecta.">
    <title>Doações | Inclusão conecta</title>

    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white bg-opacity-75 border-bottom shadow-sm">
        <div class="container fs-3">
            <a class="navbar-brand fw-bold d-inline-flex align-items-center gap-2 text-decoration-none"
                href="../index.php" aria-label="Página inicial Inclusão conecta">
                <img class="brand-logo" src="../assets/img/logo.png" alt="Logo Inclusão conecta">
                <span class="brand-text fs-3">
                    Inclusão conecta
                </span>
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2 ">
                    <li class="nav-item"><a class="nav-link  rounded-pill px-3 py-2 fw-semibold"
                            href="../index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link rounded-pill px-3 py-2 fw-semibold"
                            href="planos.php">Doações</a></li>
                    <li class="nav-item"><a class="nav-link rounded-pill px-3 py-2 fw-semibold"
                            href="sobre.php">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link rounded-pill px-3 py-2 fw-semibold"
                            href="formulario.php">Contato</a></li>
                    <li class="nav-item"><a class="nav-link active rounded-pill px-3 py-3 fw-semibold"
                            href="login.php">Login</a></li>



                    <li class="nav-item menu_letra">
                        <button class="btn btn-outline-secondary btn-sm" id="aumentar">A+</button>
                        <button class="btn btn-outline-secondary btn-sm" id="diminuir">A-</button>
                        <button class="btn btn-outline-primary btn-sm" id="resetar">A</button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <main>


        <section class="">
            <div class="container-fluid h-custom vh-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                            class="img-fluid" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form>
                            <div
                                class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mb-4">
                                <p class="lead fw-normal mb-0 me-3">Faça login</p>
                                <!-- <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-floating mx-1 mb-3">
                                    <i class="fab fa-facebook-f"></i>
                                </button> -->

                                <!-- <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </button> -->
                            </div>

                            <!-- <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">Ou</p>
                            </div> -->

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Email:</label>
                                <input type="email" id="login" class="form-control form-control-lg"
                                    placeholder="Digite seu email" />
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Senha:</label>
                                <input type="password" id="senha" class="form-control form-control-lg"
                                    placeholder="Digite a senha" />
                            </div>

                            <!-- <div class="d-flex justify-content-between align-items-center"> -->
                            <!-- Checkbox -->
                            <!-- <div class="form-check mb-0">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#!" class="text-body">Forgot password?</a>
                            </div> -->

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="button" class="btn btn-primary btn-lg"
                                    onclick="abrir_login()">Entrar</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Não tem uma conta?
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        onclick="const modal = new bootstrap.Modal(document.getElementById('modalRegistrar'));modal.show();">
                                        Registrar-se
                                    </button>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>





            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto">Notificação</strong>
                    <small>Agora</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Esta é a sua mensagem de notificação!
                </div>
            </div>







            <!-- modal -->
            <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalRegistrarLabel">
                                Cadastro de Usuário
                            </h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar">
                            </button>
                        </div>

                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    placeholder="Digite seu nome">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite seu e-mail">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha"
                                    placeholder="Digite sua senha">
                            </div>

                            <div class="mb-3">
                                <label for="confirmar_senha" class="form-label">Confirmar senha</label>
                                <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha"
                                    placeholder="Confirme sua senha">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancelar
                            </button>

                            <button type="button" class="btn btn-success" onclick="cadastrarUsuario()">
                                Cadastrar
                            </button>
                        </div>

                    </div>
                </div>
            </div>




        </section>


    </main>




    <script src="https://kit.fontawesome.com/775fd40529.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/dados.js"></script>
    <script src="../js/script.js"></script>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- XLSX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <!-- jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <!-- jsPDF AutoTable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>

    <!-- TableExport -->
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin/tableExport.min.js"></script>

    <!-- Bootstrap Table -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.25.0/dist/bootstrap-table.min.js"></script>

    <!-- PT-BR -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.25.0/dist/locale/bootstrap-table-pt-BR.min.js"></script>

    <!-- Export Extension -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.25.0/dist/extensions/export/bootstrap-table-export.min.js"></script>


    <script
        src="https://unpkg.com/bootstrap-table@1.22.6/dist/extensions/mobile/bootstrap-table-mobile.min.js"></script>

</body>

</html>