<?php

namespace App\Controllers;
use App\Models\CalendarioModel;


class CalendarioController extends BaseController
{
    public function index()
    {
        // Aqui você pode implementar a lógica para exibir o calendário
        // por exemplo, recuperar os eventos do modelo CalendarioModel

        $calendarioModel = new CalendarioModel();
        $eventos = $calendarioModel->list();

        // Faça algo com os eventos, como passá-los para a view

        return view('calendario', ['eventos' => $eventos]);
    }

    public function adicionarEvento()
{
    $calendarioModel = new CalendarioModel();
    
    // Verifica se as chaves 'cad_title', 'cad_start', 'cad_end' e 'cad_color' estão definidas no array $_POST
    if(isset($_POST['cad_title'], $_POST['cad_start'], $_POST['cad_end'], $_POST['cad_color'])) {
        // Sanitize e validar os dados recebidos do formulário
        $title = $_POST['cad_title'];
        $start = $_POST['cad_start'];
        $end = $_POST['cad_end'];
        $color = $_POST['cad_color'];

        // Crie um array associativo com os dados
        $attributes = [
            'title' => $title,
            'start' => $start,
            'end' => $end,
            'color' => $color
        ];

        // Insira os dados no banco de dados usando consultas preparadas para prevenir injeção de SQL
        try {
            $calendarioModel->create($attributes);
            // Redirecione para algum lugar após a inserção bem-sucedida, se necessário
            return redirect()->to('/calendario');
        } catch (\Exception $e) {
            // Trate o erro adequadamente (por exemplo, registre-o, exiba uma mensagem de erro para o usuário, etc.)
            // E redirecione de volta para a página do formulário com uma mensagem de erro, se necessário
            return redirect()->back()->with('error', 'Ocorreu um erro ao adicionar o evento. Por favor, tente novamente.');
        }
    } else {
        // Se alguma das chaves não estiver definida no $_POST, redirecione de volta para a página do formulário com uma mensagem de erro
        return redirect()->back()->with('error', 'Todos os campos são obrigatórios. Por favor, preencha todos os campos.');
    }
}



}