<?php 
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\DashboardController;
use Lib\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/login', [LoginController::class,'index']);
Route::get('/register', [RegisterController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/home', [HomeController::class,'index']);

Route::get('/login/:slug/:curso', function ($slug, $curso) {
    return 'el slug es: '.$slug .'el curso es :  '.$curso;
});
Route::post('/login', [LoginController::class,'login']);
Route::post('/register', [RegisterController::class,'newUser']);


Route::dispatch();