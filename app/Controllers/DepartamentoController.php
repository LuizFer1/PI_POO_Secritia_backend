<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\DepartamentoModel;


class DepartamentoController extends ResourceController
{
    private $departamentoModel;
    public function __construct(){
        $this->departamentoModel = new DepartamentoModel();
    }
    public function list(){
        $departamentos = $this->departamentoModel->list();
        return json_encode($departamentos);
    }
    public function createDepartament(){
        $response =[];
        try{
            $newDepartament = [
                'nome_departamento'=> $this->request->getPost('nome_departamento'),
            ];
            $this-> departamentoModel->create($newDepartament);
            $response= [
                'status'=> 'success',
                'message'=> 'Departamento Criado com sucesso!'
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
