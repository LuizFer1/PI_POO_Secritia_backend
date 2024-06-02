<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;
use App\Models\UsuarioModel;


class UsuarioController extends ResourceController
{
    private $usuario;
    protected $format = 'json';

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
    }
    private function _verificarUsuario($email){
        // checa se o email ja está em uso
        $usuario = $this->usuario->getUserByEmail($email);
        if(empty($usuario)){
            return true;
    }else{
        return false;
    }}
    public function index(){
        return view('cadastro');
    }
    public function getLeaders(){
        $leaders = $this->usuario->getUsersLeaders();
        return $leaders;
    }

    /**
     * createUser
     * 
     * @method post
     * 
     * @return json
     */
    public function createUser(){
        $response = [];

        $email = (string) $this->request->getPost("email");
        $verify = $this->_verificarUsuario($email);

        if($verify){
            try{
                $newUser = [
                   'nome_usuario' => $this->request->getPost('nome'),
                    'email_usuario' => $this->request->getPost('email'),
                    'senha_usuario' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
                    'cargo_usuario' => empty($this->request->getPost('cargo')) ? null : $this->request->getPost('cargo'),
                    'id_grupo' => empty($this->request->getPost('grupo')) ? null : $this->request->getPost('grupo') ,
                    'is_admin' => empty($this->request->getPost('is_admin')) ? 0 : $this->request->getPost('is_admin'),
                    'is_leader'=> empty($this->request->getPost('is_leader')) ? 0 : $this->request->getPost('is_leader'),
                    'is_ceo'=> empty($this->request->getPost('is_ceo')) ? 0 : $this->request->getPost('is_leader')
                ];

                $user_criado = $this->usuario->create($newUser);

                if($user_criado == 0){
                    $response = [
                        "status"=> "success",
                        "message"=> "O usuario foi criado com sucesso!"
                    ];
                    $userFound = $this->usuario->where('email_usuario', $this->request->getPost('email'))->first();
                    unset( $userFound->senha_usuario );
                    session()->set('user', $userFound );
                    
                    return redirect()->route('home');
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

        echo json_encode($response);
        exit;
    }
     /**
     * createUser
     * 
     * @method post
     * 
     * @return json
     */
    public function createLeader(){
        $response = [];

        $email = (string) $this->request->getPost("email");
        $verify = $this->_verificarUsuario($email);
        $data = date("Y-m-d H:i:s");
        if($verify){
            try{
                $newUser = [
                   'nome_usuario' => $this->request->getPost('nome'),
                    'email_usuario' => $this->request->getPost('email'),
                    'senha_usuario' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
                    'cargo_usuario' => empty($this->request->getPost('cargo')) ? null : $this->request->getPost('cargo'),
                    'id_grupo' => empty($this->request->getPost('grupo')) ? null : $this->request->getPost('grupo') ,
                    'is_admin' => empty($this->request->getPost('is_admin')) ? 0 : $this->request->getPost('is_admin'),
                    'is_leader'=> empty($this->request->getPost('is_leader')) ? 1 : $this->request->getPost('is_leader'),
                    'is_ceo'=> empty($this->request->getPost('is_ceo')) ? 0 : $this->request->getPost('is_leader'),
                    'created_at' => $data
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

        echo json_encode($response);
        exit;
    }
     /**
     * createUser
     * 
     * @method post
     * 
     * @return json
     */
    public function createCeo(){
        $response = [];

        $email = (string) $this->request->getPost("email");
        $verify = $this->_verificarUsuario($email);
        $data = date("Y-m-d H:i:s");
        if($verify){
            try{
                $newUser = [
                   'nome_usuario' => $this->request->getPost('nome'),
                    'email_usuario' => $this->request->getPost('email'),
                    'senha_usuario' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
                    'cargo_usuario' => empty($this->request->getPost('cargo')) ? null : $this->request->getPost('cargo'),
                    'id_grupo' => empty($this->request->getPost('grupo')) ? null : $this->request->getPost('grupo') ,
                    'is_admin' => empty($this->request->getPost('is_admin')) ? 0 : $this->request->getPost('is_admin'),
                    'is_leader'=> empty($this->request->getPost('is_leader')) ? 0 : $this->request->getPost('is_leader'),
                    'is_ceo'=> empty($this->request->getPost('is_ceo')) ? 1 : $this->request->getPost('is_leader'),
                    'created_at' => $data
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

        echo json_encode($response);
        exit;

        echo json_encode($response);
        exit;
    }
    /**
     * createUser
     * 
     * @method post
     * 
     * @return json
     */
    /**
     * createUser
     * 
     * @method post
     * 
     * @return json
     */
    public function listUsers()
    {
        $users = $this->usuario->list();
        return json_encode($users);
    }
}
