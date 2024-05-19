<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

Route::get('/student', [studentController::class, 'index']);

Route::get('/students', function (){
    return 'Obteniendo lista de estudiantes';
});

Route::get('/students/{id}', function (){
    return 'Obteniendo un estudiante ';
});

Route::post('/students', function (){
    return 'Creando Estudiantes';
});

Route::put('/students/{id}', function (){
    return 'Actualizando Estudiante';
});

Route::delete('/students/{id}', function (){
    return 'Eliminando Estudiante';
});
