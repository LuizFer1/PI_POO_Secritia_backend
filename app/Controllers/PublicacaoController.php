<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\PublicacaoModel;

class PublicacaoController extends ResourceController
{
    private $publicacaoModel;
    public function __construct(){
        $this->publicacaoModel = new PublicacaoModel();
    }
    public function list(){
        $publicacoes = $this->publicacaoModel->list();
        return json_encode($publicacoes);
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
            $this->publicacaoModel->create($newPublicacao);
            $response= [
                'status'=> 'success',
                'message'=> 'Publicacao Criada com sucesso!'
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

?>
