<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\ReacaoModel;

class ReacaoController extends ResourceController
{
    private $reacaoModel;
    protected $format = 'json';

    public function __construct(){
        $this->reacaoModel = new ReacaoModel();
    }
    public function list(){
        $reacoes = $this->reacaoModel->list();
        return $this->respond($reacoes);
    }
    public function createReacao(){
        $response =[];
        try{
            $newReacao = [
                'tipo'=> $this->request->getPost('tipo'),
                'id_usuario'=> $this->request->getPost('id_usuario'),
                'id_publicacao'=> $this->request->getPost('id_publicacao')
            ];
            $reacao_criada = $this->reacaoModel->create($newReacao);

            if($reacao_criada == 0){
                $response= [
                    'status'=> 'success',
                    'message'=> 'Reacao Criada com sucesso!'
                ];
            }
        }catch(\Exception $e){
            $response =[
                'status'=> 'error',
                'message'=> 'A reacao não foi criada, cheque os dados!',
                'error' => $e->getMessage()
            ];
        }
        $reacaoModel = $this->reacaoModel->list();
        return $this->respond($reacaoModel);
    }
}

?>
