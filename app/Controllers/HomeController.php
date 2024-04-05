<?php 
namespace App\Controllers;

class HomeController extends Controller{
    public function index(){
        return $this->view('home',[
            'title'=>"home",
            'description'=>'este es la descripcion'
        ]);
    }  
}