

// document.addEventListener('DOMContentLoaded', () => {

//     $('#table').bootstrapTable({
//         locale: 'pt-BR',

//         iconsPrefix: 'bi',
//         icons: {
//             paginationSwitchDown: 'bi-caret-down-fill',
//             paginationSwitchUp: 'bi-caret-up-fill',
//             refresh: 'bi-arrow-clockwise',
//             toggleOff: 'bi-list-ul',
//             toggleOn: 'bi-grid-3x3-gap',
//             columns: 'bi-layout-three-columns',
//             detailOpen: 'bi-plus',
//             detailClose: 'bi-dash',
//             fullscreen: 'bi-arrows-fullscreen',
//             export: 'bi-download'
//         }
//     });

//     carregarAtendimentos();

// });



function carregarAtendimentos() {





    Swal.fire({
        title: 'Carregando...',
        text: 'Por favor, aguarde',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });






    $('#table').bootstrapTable({
        locale: 'pt-BR',

        iconsPrefix: 'bi',
        icons: {
            paginationSwitchDown: 'bi-caret-down-fill',
            paginationSwitchUp: 'bi-caret-up-fill',
            refresh: 'bi-arrow-clockwise',
            toggleOff: 'bi-list-ul',
            toggleOn: 'bi-grid-3x3-gap',
            columns: 'bi-layout-three-columns',
            detailOpen: 'bi-plus',
            detailClose: 'bi-dash',
            fullscreen: 'bi-arrows-fullscreen',
            export: 'bi-download'
        }
    });








    $.ajax({
        url: '../PHP/listar.php',
        type: 'GET',
        dataType: 'json',

        success: function (dados) {

            // Limpa a tabela
            $('#table').bootstrapTable('removeAll');

            // Adiciona os dados vindos do PHP
            $('#table').bootstrapTable('append', dados);

            Swal.close();

        },

        error: function (erro) {
            console.log(erro);
        }
    });
}









// PDF manual (coloque FORA do DOMContentLoaded)
window.exportarPDF = function () {
    $.ajax({
        url: '../PHP/listar.php',
        type: 'GET',
        dataType: 'json',

        success: function (dados) {



            Swal.fire({
                title: 'Carregando...',
                text: 'Por favor, aguarde',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });


            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            const logo = new Image();
            logo.src = '../assets/img/inclusao_conecta_separado.png';

            logo.onload = function () {

                doc.addImage(logo, 'PNG', 15, 15, 15, 15);

                doc.setFontSize(18);
                doc.text(
                    "Relatório de Atendimentos",
                    doc.internal.pageSize.getWidth() / 2,
                    25,
                    { align: 'center' }
                );

                const rows = dados.map(item => [
                    item.atendente,
                    item.atendido,
                    item.categoria,
                    item.servico,
                    item.duracao,
                    item.data_atendimento
                        ? item.data_atendimento.split('-').reverse().join('/')
                        : ''
                ]);

                doc.autoTable({
                    startY: 40,
                    head: [[
                        'Atendente',
                        'Atendido',
                        'Categoria',
                        'Serviço',
                        'Duração',
                        'Data'
                    ]],
                    body: rows
                });

                const pdfBlob = doc.output('blob');
                const pdfUrl = URL.createObjectURL(pdfBlob);

                window.open(pdfUrl, '_blank');
            };

            swal.close();
        },

        error: function (erro) {

            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Não foi possível carregar os dados.'
            });
        }
    });
};



function cadastrar_form() {


    Swal.fire({
        title: 'Carregando...',
        text: 'Por favor, aguarde',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });


    let atendente = $('#atendente').val().trim();
    let atendido = $('#Atendido').val().trim();
    let servico_executado = $('#servico_executado').val().trim();
    let duracao = $('#Duracao').val().trim();
    let categoria = $('#categoria').val();
    let data = $('#data').val();

    let valido = true;

    // Atendente
    if (atendente === '') {
        $('#atendente').removeClass('is-valid').addClass('is-invalid');
        valido = false;
    } else {
        $('#atendente').removeClass('is-invalid').addClass('is-valid');
    }

    // Atendido
    if (atendido === '') {
        $('#Atendido').removeClass('is-valid').addClass('is-invalid');
        valido = false;
    } else {
        $('#Atendido').removeClass('is-invalid').addClass('is-valid');
    }

    // Serviço
    if (servico_executado === '') {
        $('#servico_executado').removeClass('is-valid').addClass('is-invalid');
        valido = false;
    } else {
        $('#servico_executado').removeClass('is-invalid').addClass('is-valid');
    }

    // Duração
    if (duracao === '') {
        $('#Duracao').removeClass('is-valid').addClass('is-invalid');
        valido = false;
    } else {
        $('#Duracao').removeClass('is-invalid').addClass('is-valid');
    }

    // Categoria
    if (categoria === '') {
        $('#categoria').removeClass('is-valid').addClass('is-invalid');
        valido = false;
    } else {
        $('#categoria').removeClass('is-invalid').addClass('is-valid');
    }




    // Categoria
    if (data === '') {
        $('#data').removeClass('is-valid').addClass('is-invalid');
        valido = false;
    } else {
        $('#data').removeClass('is-invalid').addClass('is-valid');
    }








    // Se houver erro, para aqui
    if (!valido) {
        return;
    }

    $.ajax({
        url: '../PHP/form.php',
        type: 'POST',
        dataType: 'json',
        data: {
            atendente: atendente,
            atendido: atendido,
            servico_executado: servico_executado,
            duracao: duracao,
            categoria: categoria,
            data: data
        },

        success: function (retorno) {

            if (retorno.status) {

                Swal.fire({
                    title: 'Sucesso!',
                    text: 'Cadastrado com sucesso!',
                    icon: 'success'
                });

                // Limpa os campos
                $('#atendente').val('');
                $('#Atendido').val('');
                $('#servico_executado').val('');
                $('#Duracao').val('');
                $('#categoria').val('');
                $('#data').val('');

                // Remove validações
                $('.form-control, .form-select')
                    .removeClass('is-valid is-invalid');

                // Atualiza tabela
                // carregarTabela();

            } else {

                Swal.fire({
                    title: 'Erro',
                    text: retorno.erro || 'Erro ao cadastrar.',
                    icon: 'error'
                });


            }
        },

        error: function (xhr) {

            console.error(xhr.responseText);

            Swal.fire({
                title: 'Erro',
                text: 'Falha na comunicação com o servidor.',
                icon: 'error'
            });
        }
    });
}




function abrir_login() {

    let login = $('#login').val();
    let senha = $('#senha').val();

    Swal.fire({
        title: 'Carregando...',
        text: 'Por favor, aguarde',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    $.ajax({
        url: '../PHP/valida_login.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            senha: senha
        },

        success: function (retorno) {

            if (retorno.status) {

                window.location.href = "home.php";
                Swal.close();

            } else {

                Swal.fire({
                    title: 'Atenção!',
                    text: 'Login ou senha inválidos!',
                    icon: 'error'
                });

            }
        },

        error: function (xhr) {
            console.log(xhr.responseText);
        }
    });
}









function formata_data(dados) {
    console.log(dados);
    // Verifica se 'dados' existe e se 'criado_em' não é nulo ou indefinido
    if (dados != null && dados != undefined) {
        // pega o valor da data e hora e separa em dois
        const dt = dados.split(" ");

        // separa o valor da data para reordenar
        const dt_data = dt[0].split("-");

        return dt_data[2] + '/' + dt_data[1] + '/' + dt_data[0];
    } else {
        // Retorna '-' se 'dados' ou 'criado_em' forem nulos ou indefinidos
        return '-';
    }
}



