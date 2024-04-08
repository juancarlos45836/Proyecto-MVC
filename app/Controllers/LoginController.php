<?php 
namespace App\Controllers;
use App\Models\User;

class LoginController extends Controller{
    public function index(){
        return $this->view('login',['emailIncorrect'=>'']);
    }  
    public function login(){
        
        $data = $_POST;
        $users = new User();
        $user = $users->where('email', $data['email'])->first();
        if($user == null){
            return $this->view('login',['emailIncorrect' => 'Este email no esta registrado']);
        }else{
            if($user['contrasena'] == $data['password']){
                header('Location: /dashboard');
            }else{
                return $this->view('login',[
                    'emailIncorrect'=>'',
                    'passwordIncorrect'=>'La contraseña es incorrecta']);
            }
        }
        

    }
}