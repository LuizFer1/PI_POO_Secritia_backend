<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GrupoModel;
use CodeIgniter\RESTful\ResourceController;

class GrupoController extends ResourceController
{
    private $grupo;
    public function __construct(){
        $this->grupo = new GrupoModel();
    }

    public function list(){
        $data = $this->grupo->list();
        return json_encode($data);
    }
    public function createGroup(){
        $response =[];
        $userModel = '';
        try{
            $newGroup = [
                'nome_grupo'=> $this->request->getPost('nome_grupo'),
                'id_departamento'=> $this->request->getPost('id_departamento'),
            ];
            $this->grupo->create($newGroup);
            $response= [
                'status'=> 'success',
                'message'=> 'Grupo Criado com sucesso!'
            ];
        }catch(\Exception $e){
            $response =[
                'status'=> 'error',
                'message'=> $e->getMessage()
            ];
        }
        return json_encode($response);
    }

}
