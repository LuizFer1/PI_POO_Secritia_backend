<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;
use App\Models\Usuario;
use PHPUnit\Framework\Constraint\IsEmpty;

class UsuarioController extends ResourceController
{
    private $usuario;
    private $token = "secritia147963";

    public function __construct()
    {
        $this->usuario = new Usuario();
    }
    private function _verificarToken(){
        // Checa se o token existe
        return $this->token = $this->request->getHeaderLine("token");
    }
    private function _verificarUsuario($email){
        // checa se o email ja está em uso
        $usuario = $this->usuario->getUserByEmail($email);
        if(empty($usuario)){
            return true;
    }else{
        return false;
    }}
    public function createUser(){
        $response = [];
        $token = $this->_verificarToken();
        $email = (string) $this->request->getPost("email");
        $verify = $this->_verificarUsuario($email);
        if($token){
            if($verify){
                try{
                    $newUser = [
                        'nome_usuario' => $this->request->getPost('nome'),
                        'email_usuario' => (string) $this->request->getPost('email'),
                        'senha_usuario' => $this->request->getPost('senha'),
                        'cargo_usuario' => $this->request->getPost('cargo'),
                        'id_grupo' => $this->request->getPost('grupo'),
                        'is_admin' => $this->request->getPost('is_admin'),
                        'is_leader'=> $this->request->getPost('is_leader'),
                        'is_ceo'=> $this->request->getPost('is_ceo')
                    ];

                    $user_criado = $this->usuario->create($newUser);

                    if($user_criado == 0){
                        $response = [
                            "status"=> "success",
                            "message"=> "O usuario foi criado com sucesso!"
                        ];
                    }
                }catch(\Exception $e){
                    $response = [
                        "status"=> "error",
                        "message"=> "O usuario não foi criado, cheque os dados!",
                        "error" => $e->getMessage()
                    ];
                }
            }else{
                $response = [
                    "status"=> 'error',
                    'message'=> 'Usuario com email ja existe!'
                ];
            }
        }else{
            $response = [
                "status"=> "error",
                "message"=> "Token Incorreto"
            ];
        }
        return json_encode($response);
    }
    public function index()
    {
        $users = $this->usuario->findAll();
        return json_encode( $users );
    }
}
