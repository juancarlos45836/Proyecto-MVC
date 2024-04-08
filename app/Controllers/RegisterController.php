<?php 
namespace App\Controllers;
use App\Models\User;

class RegisterController extends Controller{
    public function index(){
    
        return $this->view('register',[]);
    }  
    public function newUser(){
        $data = $_POST;
        $user = new User();
        $user->create($data);
        return $this->view('dashboard',[]);
    }
}