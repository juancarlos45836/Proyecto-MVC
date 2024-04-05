<?php 
use App\Controllers\HomeController;
use Lib\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/login/:slug/:curso', function ($slug, $curso) {
    return 'el slug es: '.$slug .'el curso es :  '.$curso;
});


Route::dispatch();