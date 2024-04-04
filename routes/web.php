<?php 

use Lib\Route;

Route::get('/', function () {
    return [
        'nombre' => 'apellidos',
        'apellidos' => 'apellidos'
    ];
});

Route::get('/login/:slug/:curso', function ($slug, $curso) {
    return 'el slug es: '.$slug .'el curso es :  '.$curso;
});


Route::dispatch();