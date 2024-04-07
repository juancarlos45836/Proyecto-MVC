<?php 
namespace App\Controllers;

class RegisterController extends Controller{
    public function index(){
    
        return $this->view('register',[]);
    }  
}