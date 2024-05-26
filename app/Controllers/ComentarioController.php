<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\ComentarioModel;

class ComentarioController extends ResourceController
{
    private $comentarioModel;
    protected $format = 'json';

    public function __construct(){
        $this->comentarioModel = new ComentarioModel();
    }
    public function list(){
        $comentarios = $this->comentarioModel->list();
        return $this->respond($comentarios);
    }
    public function createComentario(){
        $response =[];
        try{
            $newComentario = [
                'id_publicacao'=> $this->request->getPost('id_publicacao'),
                'corpo'=> $this->request->getPost('corpo'),
                'id_usuario'=> $this->request->getPost('id_usuario'),
                'created_at'=> date('Y-m-d h:i:s')
            ];
            $comentario_criado = $this->comentarioModel->create($newComentario);

            if($comentario_criado == 0){
                $response= [
                    'status'=> 'success',
                    'message'=> 'Comentario Criado com sucesso!'
                ];
            }
        }catch(\Exception $e){
            $response =[
                'status'=> 'error',
                'message'=> 'O comentario não foi criado, cheque os dados!',
                'error' => $e->getMessage()
            ];
        }
        $comentarioModel = $this->comentarioModel->list();
        return $this->respond($comentarioModel);
    }
}

?>
