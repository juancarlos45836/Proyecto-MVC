<?php 
namespace App\Controllers;

class LoginController extends Controller{
    public function index(){
        return $this->view('login',[]);
    }  
    public function login(){
      
        return $this->view('dashboard',[]);

    }
}