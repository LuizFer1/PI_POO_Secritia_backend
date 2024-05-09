<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\ComentarioModel;


class ComentarioController extends ResourceController
{
    private $comentarioModel;
    public function __construct(){
        $this->comentarioModel = new ComentarioModel();
    }
    public function list(){
        $comentarios = $this->comentarioModel->list();
        return json_encode($comentarios);
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
            $this->comentarioModel->create($newComentario);
            $response= [
                'status'=> 'success',
                'message'=> 'Comentario Criado com sucesso!'
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