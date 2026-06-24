<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faça uma doação para apoiar a inclusão digital de idosos com a Inclusão conecta.">
    <title>Doações | Inclusão conecta</title>

    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_home.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap Table -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.25.0/dist/bootstrap-table.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto bg-light sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                    <a href="../pages/home.php" class="d-block p-3 link-dark text-decoration-none" title=""
                        data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        <img class="brand-logo" src="../assets/img/logo.png"
                            alt="Logo inclusão conecta">
                    </a>
                    <ul
                        class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="../pages/home.php" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="Home">
                                <i class="bi-house fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="../pages/cadastro.php" class="nav-link py-3 px-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <i class="bi-clipboard2-data  fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="../pages/relatorio.php" class="nav-link py-3 px-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <i class="bi-table fs-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="../pages/login.php" class="nav-link py-3 px-2 logout" title=""
                                data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                                <i class="bi bi-box-arrow-left fs-1"></i>
                            </a>
                        </li>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <main class="">
                    <div class="container-fluid">
                        <section>

                            <div class="card">
                                <h5 class="card-header py-3">Cadastro de atendimentos</h5>
                                <div class="card-body">

                                    <form>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationServer01">Atendente</label>
                                                <input type="text" class="form-control  " id="atendente" value=""
                                                    required>
                                                <div class="invalid-feedback">
                                                    Favor preencher o campo Atendente!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationServer02">Atendido</label>
                                                <input type="text" class="form-control" id="Atendido" value="" required>
                                                <div class="invalid-feedback">
                                                    Favor preencher o campo Atendido!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationServerUsername">Serviço</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="servico_executado"
                                                        aria-describedby="inputGroupPrepend3" required>
                                                    <div class="invalid-feedback">
                                                        Favor preencher o campo Serviço!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationServer03">Duração</label>
                                                <input type="number" class="form-control " id="Duracao" required>
                                                <div class="invalid-feedback">
                                                    Favor preencher o campo Duração!
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationServer04">Categoria</label>
                                                <select class="form-control  " id="categoria" required>
                                                    <option value="">Selecione</option>
                                                    <option>Suporte Individual</option>
                                                    <option>Palestra</option>
                                                    <option>Suporte técnico</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Favor preencher o campo Categoria!
                                                </div>
                                            </div>


                                            <div class="col-md-3 mb-3">
                                                <label for="data">Data</label>
                                                <input type="date" class="form-control" id="data">
                                                <div class="invalid-feedback">
                                                    Favor preencher o campo Categoria!
                                                </div>
                                            </div>



                                        </div>

                                        <button class="btn btn-primary" type="button"
                                            onclick="cadastrar_form()">Cadastrar</button>
                                    </form>

                                </div>
                            </div>




                        </section>




                        <!-- 
                        <div vw class="enabled">
                            <div vw-access-button class="active"></div>
                            <div vw-plugin-wrapper>
                                <div class="vw-plugin-top-wrapper"></div>
                            </div>
                        </div>

                    </div>

                    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

                    <script>
                        new window.VLibras.Widget('https://vlibras.gov.br/app');
                    </script> -->




                </main>

            </div>
        </div>
    </div>



    <!-- <a class="whatsapp-btn"
        href=" https://wa.me//5511961194875?text=Tenho%20interesse%20em%20participar%20do%20projeto%20Olá%20Barbará"
        aria-label="Chamar no WhatsApp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> -->
    <script src="../js/dados.js"></script>

    <script src="https://kit.fontawesome.com/775fd40529.js" crossorigin="anonymous"></script>

    <!-- <script src="../js/bootstrap.bundle.min.js"></script> -->


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>