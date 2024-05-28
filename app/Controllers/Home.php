<?php

namespace App\Controllers;
use App\Models\PublicacaoModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [];
        $publicacao = (new PublicacaoModel)->list();
        return view('feed', $data);
    }
}
