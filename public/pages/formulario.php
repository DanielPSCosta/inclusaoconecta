<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Entre em contato com a inclusão conecta para suporte tecnológico, aulas simples e inclusão digital.">
    <title>Contato | Inclusão conecta</title>

    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white bg-opacity-75 border-bottom shadow-sm">
        <div class="container fs-3">
            <a class="navbar-brand fw-bold d-inline-flex align-items-center gap-2 text-decoration-none"
                href="../index.php" aria-label="Página inicial inclusão conecta">
                <img class="brand-logo" src="../assets/img/logo.png" alt="Logo inclusão conecta">
                <span class="brand-text fs-3">
                    Inclusão conecta
                </span>
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link rounded-pill px-3 py-2 fw-semibold"
                            href="../index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link rounded-pill px-3 py-2 fw-semibold"
                            href="planos.php">Doações</a></li>
                    <li class="nav-item"><a class="nav-link rounded-pill px-3 py-2 fw-semibold"
                            href="sobre.php">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link active rounded-pill px-3 py-2 fw-semibold"
                            href="formulario.php">Contato</a></li>
                    <li class="nav-item"><a class="nav-link rounded-pill px-3 py-3 fw-semibold"
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

    <main class="main-content">
        <section class="page-hero">
            <div class="container">
                <div class="page-hero-card card border-0 p-4 p-md-5">
                    <span class="eyebrow">Fale conosco</span>
                    <h1 class="page-title">Precisa de ajuda com tecnologia?</h1>
                    <p class="page-description">
                        Envie sua mensagem e conte qual é a dificuldade. Celular travando, aplicativo confuso,
                        configuração perdida, senha esquecida e etc.
                    </p>
                </div>
            </div>
        </section>

        <section class="form-section">
            <div class="container">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-5">
                        <aside class="contact-side card h-100 border-0 p-4 p-md-5">
                            <span class="eyebrow bg-white">Atendimento</span>
                            <h2>Suporte simples, rápido e humano.</h2>
                            <p>
                                A inclusão conecta atende dúvidas sobre celular, computador, internet, aplicativos,
                                acessibilidade e segurança digital.
                            </p>

                            <div class="contact-list">
                                <div class="contact-mini card border-0 p-3">
                                    <strong>WhatsApp</strong>
                                    <a href="https://wa.me/5511999999999">(11) 99999-9999</a>
                                </div>
                                <div class="contact-mini card border-0 p-3">
                                    <strong>E-mail</strong>
                                    <a href="mailto:contato@inclusaoconecta.com">contato@inclusaoconecta.com</a>
                                </div>
                                <div class="contact-mini card border-0 p-3">
                                    <strong>Local</strong>
                                    <span>São Paulo - SP</span>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-7">
                        <div class="form-card card v-card h-100 border-0 p-4 p-md-5">
                            <span class="eyebrow">Mensagem</span>
                            <h2 class="mb-3" style="font-weight:950; color:var(--vv-blue); letter-spacing:-.04em;">Conte
                                o que você precisa</h2>


                            <form id="formContato">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nome" class="form-label fw-bold">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome"
                                            placeholder="Seu nome" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="telefone" class="form-label fw-bold">Telefone</label>
                                        <input type="tel" class="form-control" id="telefone" name="telefone"
                                            placeholder="(11) 99999-9999">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label fw-bold">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="seuemail@email.com" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="assunto" class="form-label fw-bold">Assunto</label>
                                        <select class="form-select" id="assunto" name="assunto">
                                            <option value="Suporte tecnológico">Suporte tecnológico</option>
                                            <option value="Aula para idosos">Aula para idosos</option>
                                            <option value="Acessibilidade">Acessibilidade</option>
                                            <option value="Doação">Doação</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="mensagem" class="form-label fw-bold">Mensagem</label>
                                        <textarea class="form-control" id="mensagem" name="mensagem"
                                            placeholder="Descreva sua necessidade" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">Enviar
                                            mensagem</button>
                                    </div>
                                </div>
                            </form>

                            <div id="mensagemSucesso" class="alert alert-success mt-4 d-none" role="alert">
                                Mensagem enviada com sucesso.
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>










        <!-- VLibras -->
        <div vw class="enabled">
            <div vw-access-button class="active"></div>

            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>



            <!-- Botões de leitura lateral -->
            <div class="leitor-lateral mt-5">
                <div class="row mb-1">
                    <button type="button" class="btn btn-primary btn-sm" onclick="lerTexto()" title="Ler página">
                        <span class="icone">🔊</span>
                    </button>
                </div>

                <div class="row">
                    <button type="button" class="btn btn-danger btn-sm" onclick="pararLeitura()" title="Parar leitura">
                        <span class="icone">⏹</span>
                    </button>
                </div>
            </div>
        </div>



        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>


        <script>
            //  Botões de leitura lateral 
            function lerTexto() {
                const texto = document.body.innerText;
                const fala = new SpeechSynthesisUtterance(texto);

                fala.lang = 'pt-BR';
                fala.rate = 1;

                window.speechSynthesis.speak(fala);
            }

            function pararLeitura() {
                window.speechSynthesis.cancel();
            }
        </script>






    </main>

    <footer class="footer bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-md-6 d-flex align-items-center gap-3">
                    <img class="footer-logo" src="../assets/img/logo.png"
                        alt="Logo inclusão conecta">
                    <p>© 2026 inclusão conecta - Inclusão digital com humanidade.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a class="text-white-50 text-decoration-none" href="../index.php">Início</a>
                    <span class="mx-2 text-white-50">•</span>
                    <a class="text-white-50 text-decoration-none" href="planos.php">Doações</a>
                    <span class="mx-2 text-white-50">•</span>
                    <a class="text-white-50 text-decoration-none" href="sobre.php">Sobre</a>
                </div>
            </div>
        </div>
    </footer>




    <a class="whatsapp-btn"
        href="https://wa.me/5511961194875?text=Ol%C3%A1!%20%F0%9F%91%8B%0A%0AGostaria%20de%20receber%20suporte%20da%20Inclus%C3%A3o%20Conecta.%0A%0APoderiam%20me%20orientar%20e%20fornecer%20mais%20informa%C3%A7%C3%B5es%20sobre%20como%20posso%20obter%20ajuda%3F%0A%0AObrigado(a)!"
        target="_blank"
        aria-label="Chamar no WhatsApp">
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </a>

    <script src="https://kit.fontawesome.com/775fd40529.js" crossorigin="anonymous"></script>

    <script>
        document.getElementById('formContato').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('mensagemSucesso').classList.remove('d-none');
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>