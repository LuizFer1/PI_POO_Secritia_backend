<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        echo view('login_form');
    }

    public function process()
    {
        $email = $this->request->getPost('email_usuario');
        $password = (string)$this->request->getPost('senha_usuario');

        $userModel = (new \App\Models\UsuarioModel)->login($email, $password);

        if ($userModel) {
                return redirect()->to('login')->with('success','Usuario logado');
        }else {
            // Usuário não encontrado, redirecione de volta para o formulário de login com uma mensagem de erro
            return redirect()->to('login')->with('error', 'Usuário não encontrado. Por favor, verifique o seu e-mail e tente novamente.');
        }
    }
}
