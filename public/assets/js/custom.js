document.addEventListener('DOMContentLoaded', function () {

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

        // Evento para cadastrar um evento
        eventClick: function (info) {

            // Abre o modal de visualizar evento
            const visualizarModal = new bootstrap.Modal(document.getElementById('visualizarModal'));

            // Preenche o id do evento no modal
            document.getElementById('visualizar_id').innerText = info.event.id;

            // Preenche o titulo do evento no modal
            document.getElementById('visualizar_title').innerText = info.event.title;

            // Preenche o inicio do evento no modal
            document.getElementById('visualizar_start').innerText = info.event.start.toLocaleString();

            // Preenche o fim do evento no modal
            document.getElementById('visualizar_end').innerText = info.event.end != null ? info.event.end.toLocaleString() : info.event.start.toLocaleString();

            // Mostra o modal
            visualizarModal.show();
        },

        select: function (info) {


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
            const dados = await fetch("cadastrar_evento.php", {
                method: "POST",
                body: dadosForm
            });

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


