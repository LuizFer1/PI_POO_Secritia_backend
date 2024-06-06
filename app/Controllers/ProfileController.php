<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class ProfileController extends BaseController {
    public function index() {
        $session = session();
        $id_usuario = $session->get('id_usuario');
        
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->find($id_usuario);
        
        return view('usuario', ['usuario' => $usuario]);
    }
}