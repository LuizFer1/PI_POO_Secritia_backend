<?php

namespace App\Controllers;
use App\Controllers\PublicacaoController;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [];
        $publicacao = (new PublicacaoController())->list();
        $users = (new UsuarioController())->listUsers();
        $leaders = [];
        foreach($users as $user){
            if($user->is_leader == 1){
                array_push($leaders, $user);
            }
        }
        $data = [
            "publicacoes"=> $publicacao,
            "leaders"=> $leaders
        ];
        return view('home', $data);
    }
}
