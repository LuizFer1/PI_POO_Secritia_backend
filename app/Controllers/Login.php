<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index() {
        return view('login');
    }

    public function process()
    {
        $email = $this->request->getPost('email_usuario');
        $password = (string)$this->request->getPost('senha_usuario');

        $userModel = new \App\Models\UsuarioModel();
        $user = $userModel->where('email_usuario', $email)->first();

        if ($user) {
            if (password_verify($password, $user['senha_usuario'])) {
                // Login bem-sucedido, redirecione para uma página de sucesso
                return redirect()->to('success');
            } else {
                // Senha incorreta, redirecione de volta para o formulário de login com uma mensagem de erro
                return redirect()->to('login')->with('error', 'Senha incorreta. Por favor, tente novamente.');
            }
        } else {
            // Usuário não encontrado, redirecione de volta para o formulário de login com uma mensagem de erro
            return redirect()->to('login')->with('error', 'Usuário não encontrado. Por favor, verifique o seu e-mail e tente novamente.');
        }
    }
}
