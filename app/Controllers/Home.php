<?php

namespace App\Controllers;
use App\Controllers\PublicacaoController;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [];
        $publicacao = (new PublicacaoController())->list();
        $data = [
            "publicacoes"=> $publicacao
        ];
        return view('home', $data);
    }
}
