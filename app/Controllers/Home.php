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
        $reactions = (new ReacaoController())->list();
        $leaders = [];
        // var_dump($publicacao[0]['id_publicacao']);
        // var_dump($reactions);
        // die;
        foreach($users as $user){
            if($user->is_leader == 1){
                array_push($leaders, $user);
            }
        }
        $data = [
            "publicacoes"=> $publicacao,
            "leaders"=> $leaders,
            "reactions" => $reactions
        ];
        return view('home', $data);
    }
}
