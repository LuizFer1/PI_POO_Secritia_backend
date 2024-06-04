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
        $data = [];
        foreach ($publicacoes as $publicacao){
            array_push($data, $publicacao);
        }
        return $data;
    }
    public function createPublicacao(){
        helper(['form', 'url']);
        $response =[];
        try{
            
            if($image = $this->request->getFile('input-file')){
                $imageContent = file_get_contents($image->getTempName());
                $base64Image = base64_encode($imageContent);
            } else {
                $base64Image = null;
            }
            // Lê o conteúdo da imagem

            // Converte para base64
            $newPublicacao = [
                'id_usuario'=> session()->id_usuario,
                'titulo'=> $this->request->getPost('titulo'),
                'descricao'=> $this->request->getPost('texto'),
                'conteudo'=> $base64Image,
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
    }
}

?>