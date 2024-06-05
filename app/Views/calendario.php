<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css')?>">

    <title>Calendário</title>

</head>

<body>

    <h2 class="mb-3">Calendário</h2>

    <span id="msg"></span>

    <div id="calendar"></div>

    <!-- Modal visualizar-->
    <div class="modal fade" id="visualizarModal" tabindex="-1" aria-labelledby="visualizarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="visualizarModalLabel">Visualizar evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-3">ID: </dt>
                        <dd class="col-sm-9" id="visualizar_id"></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-3">Titulo: </dt>
                        <dd class="col-sm-9" id="visualizar_title"></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-3">Inicio: </dt>
                        <dd class="col-sm-9" id="visualizar_start"></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-3">Fim: </dt>
                        <dd class="col-sm-9" id="visualizar_end"></dd>
                    </dl>
                </div>

            </div>
        </div>
    </div>

    <!-- Cadastrar modal -->
    <div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cadastrarModalLabel">Cadastrar evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="msgCadEvento"> </span>

                    <form method="post" id="formCadEvento">
                        <div class="row mb-3">
                            <label for="cad_title" class="col-sm-2 col-form-label">Titulo:</label>
                            <div class="col-sm-10">
                                <input type="text" name="cad_title" class="form-control" id="cad_title"
                                    placeholder="Titulo do evento">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cad_start" class="col-sm-2 col-form-label">Início:</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" name="cad_start" class="form-control" id="cad_start">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cad_end" class="col-sm-2 col-form-label">Fim:</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" name="cad_end" class="form-control" id="cad_end">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cad_color" class="col-sm-2 col-form-label">Cor:</label>
                            <div class="col-sm-2">
                                <input type="color" name="cad_color" class="form-control" id="cad_color">
                            </div>
                        </div>
                        <button type="submit" name="btnCadEvento" id="btnCadEvento"
                            class="btn btn-success">Cadastrar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assets/js/index.global.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap5/index.global.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/locales-all.global.min.js') ?>"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // Calendário com id calendar do html
        var calendarEl = document.getElementById('calendar');

        // Modal de cadastrar evento
        const cadastrarModal = new bootstrap.Modal(document.getElementById('cadastrarModal'));

        // Instancia o full claendar
        var calendar = new FullCalendar.Calendar(calendarEl, {

            themeSystem: 'bootstrap5',

            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            locale: 'pt-br',
            // initialDate: '2023-01-12',
            navLinks: true, // can click day/week names to navigate views

            selectable: true,

            selectMirror: true,

            editable: true,

            dayMaxEvents: true, // allow "more" link when too many events

            events: <?= json_encode($eventos) ?>,

            // Evento para cadastrar um evento
            eventClick: function(info) {

                // Abre o modal de visualizar evento
                const visualizarModal = new bootstrap.Modal(document.getElementById(
                    'visualizarModal'));

                // Preenche o id do evento no modal
                document.getElementById('visualizar_id').innerText = info.event.id;

                // Preenche o titulo do evento no modal
                document.getElementById('visualizar_title').innerText = info.event.title;

                // Preenche o inicio do evento no modal
                document.getElementById('visualizar_start').innerText = info.event.start
                    .toLocaleString();

                // Preenche o fim do evento no modal
                document.getElementById('visualizar_end').innerText = info.event.end != null ? info
                    .event.end.toLocaleString() : info.event.start.toLocaleString();

                // Mostra o modal
                visualizarModal.show();
            },

            select: function(info) {


                // Converte a data para o formato yyyy-mm-ddThh:mm
                document.getElementById('cad_start').value = converterData(info.start);

                // Converte a data para o formato yyyy-mm-ddThh:mm
                document.getElementById('cad_end').value = converterData(info.start);


                cadastrarModal.show();
            }

        });

        // Renderiza o calendário
        calendar.render();


        // Função para converter a data para o formato yyyy-mm-ddThh:mm
        function converterData(data) {

            // Converte a data para o objeto Date
            const dataObj = new Date(data);

            // Pega o ano
            const ano = dataObj.getFullYear();

            // Pega o mês e adiciona o zero na frente
            const mes = String(dataObj.getMonth() + 1).padStart(2, '0');

            // Pega o dia e adiciona o zero na frente
            const dia = String(dataObj.getDate()).padStart(2, '0');

            // Pega a hora e adiciona o zero na frente
            const hora = String(dataObj.getHours()).padStart(2, '0');

            // Pega o minuto e adiciona o zero na frente
            const minuto = String(dataObj.getMinutes()).padStart(2, '0');

            // Retorna a data no formato yyyy-mm-ddThh:mm
            return `${ano}-${mes}-${dia}T${hora}:${minuto}`;

        }

        // Pega o formulário de cadastrar evento
        const formCadEvento = document.getElementById('formCadEvento');

        // Pega o span de msg
        const msg = document.getElementById("msg");

        // Pega o botão btnCadEvento pelo id
        const btnCadEvento = document.getElementById("btnCadEvento");

        // Pega a msgCadEvento
        const msgCadEvento = document.getElementById("msgCadEvento");

        // Verifica se o formulário existe
        if (formCadEvento) {

            // Adiciona o evento de submit no formulário
            formCadEvento.addEventListener("submit", async (e) => {

                // Previne o comportamento padrão do formulário
                e.preventDefault();

                // Mostra o texto Salvando
                btnCadEvento.value = "Salvando...";

                // Pega os dados do formulário
                const dadosForm = new FormData(formCadEvento);

                // Envia os dados para o arquivo cadastrar_evento.php
                const dados = await fetch("<?= base_url('/calendario') ?>", {
                    method: "POST",
                    body: dadosForm
                });
                location.reload();

                const resposta = await dados.json();

                if (!resposta['status']) {
                    msgCadEvento.innerHTML = `<div class="alert alert-danger" role="alert">
${resposta['msg']}
</div>`;
                } else {
                    msg.innerHTML = `<div class="alert alert-success" role="alert">
${resposta['msg']}</div>`;

                    msgCadEvento.innerHTML = "";

                    // Reseta o formulario de cadastro de evento
                    formCadEvento.reset();

                    // Cria um novo objeto com os dados do evento
                    const novoEvento = {
                        id: resposta['id'],
                        title: resposta['title'],
                        color: resposta['color'],
                        start: resposta['start'],
                        end: resposta['end']
                    }

                    // Adiciona o evento ao calendário
                    calendar.addEvent(novoEvento);

                    // Chama a função de remover mensagem
                    removerMsg();

                    // Fechar a janela modal
                    cadastrarModal.hide();

                }

                // Mostra o texto Cadastrar
                btnCadEvento.value = "Cadastrar";


            });
        }

        // Função para remover a mensagem após 3 segundos
        function removerMsg() {
            setTimeout(() => {
                document.getElementById('msg').innerHTML = "";
            }, 3000);
        }
    });
    </script>
</body>

</html>