<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\ReacaoModel;

class ReacaoController extends ResourceController
{
    private $reacaoModel;

    public function __construct(){
        $this->reacaoModel = new ReacaoModel();
    }
    public function list(){
        $user = session()->get("user")->id_usuario;
        $reacoes = $this->reacaoModel->listUser($user);
        return $reacoes;
    }
    public function createReacao($id_publicacao){
        $response =[];
        try{
            $newReacao = [
                'id_usuario'=> session()->get("user")->id_usuario,
                'id_publicacao'=> $id_publicacao
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
        return redirect('home');
    }
    
    public function deleteRecord($id_publicacao){
        $deleteReacao = [
            'id_usuario'=> session()->get("user")->id_usuario,
            'id_publicacao'=> $id_publicacao
        ];
        $deleted = $this->reacaoModel->deleteRecord($deleteReacao);
        return redirect('home');
    }
}

?>
