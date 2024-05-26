<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index() {
        return view('login');
    }

    public function process()
    {
        $validate = $this->validate(
            [
                'email'=> 'required|valid_email',
                'password'=> 'required'
            ],
        );
        if(!$validate){
            return redirect()->route('login')->with('error',$this->validator->getErrors());
        }        
        $user = new UsuarioModel();
        $userFound = $user->where('email_usuario', $this->request->getPost('email'))->first();
        if(!$userFound){
            return redirect()->route('login')->with('error','Email or password incorrect!');
        }
        if(!password_verify($this->request->getPost('password'), $userFound->senha_usuario)){
            return redirect()->route('login')->with('error','Email or password gt incorrect!');
        }
        unset( $userFound->senha_usuario );
        session()->set('user', $userFound );
        
        return redirect()->route('home');
    }  
}
