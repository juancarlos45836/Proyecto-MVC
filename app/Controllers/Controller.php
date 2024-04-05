<?php 
namespace App\Controllers;

class Controller{
    //
    public function view($view,$data){
        extract($data);
        if(file_exists("../resources/views/{$view}.php")){
            ob_start();
            include("../resources/views/{$view}.php");
            $content = ob_get_clean();
            return $content;
        }else{
            echo 'el archivo no existe';
        }
    }
}