<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\PublicacaoModel;

class PublicacaoController extends ResourceController
{
    private $publicacaoModel;
    protected $format = 'json';

    public function __construct(){
        $this->publicacaoModel = new PublicacaoModel();
    }
    public function list(){
        $publicacoes = $this->publicacaoModel->list();
        return $this->respond($publicacoes);
    }
    public function createPublicacao(){
        $response =[];
        try{
            $newPublicacao = [
                'id_usuario'=> $this->request->getPost('id_usuario'),
                'titulo'=> $this->request->getPost('titulo'),
                'descricao'=> $this->request->getPost('descricao'),
                'conteudo'=> $this->request->getPost('conteudo')
            ];
            $publicacao_criada = $this->publicacaoModel->create($newPublicacao);

            if($publicacao_criada == 0){
                $response= [
                    'status'=> 'success',
                    'message'=> 'Publicacao Criada com sucesso!'
                ];
            }
        }catch(\Exception $e){
            $response =[
                'status'=> 'error',
                'message'=> 'A publicacao não foi criada, cheque os dados!',
                'error' => $e->getMessage()
            ];
        }
        $publicacaoModel = $this->publicacaoModel->list();
        return $this->respond($publicacaoModel);
    }
}

?>
