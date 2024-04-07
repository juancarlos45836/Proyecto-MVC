<?php 
namespace App\Controllers;
use App\Models\User;

class HomeController extends Controller{
    public function index(){
        $users = new User();

        return $users->delete(1);
        
    }  
}