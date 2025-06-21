<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ejemplo de ruta GET: responde cuando se accede a la URL /saludo
Route::get('/saludo', function () {
    return 'Hola desde una ruta GET';
})->name('saludo');

// Ruta POST: puede usarse para enviar datos a través de un formulario
Route::post('/enviar', function () {
    return 'Formulario recibido desde una ruta POST';
})->name('enviar');

// Ruta PUT: se usa para actualizar información 
Route::put('/actualizar', function () {
    return 'Datos actualizados desde una ruta PUT';
})->name('actualizar');

// Ruta DELETE: se usa para eliminar información
Route::delete('/eliminar', function () {
    return 'Recurso eliminado desde una ruta DELETE';
})->name('eliminar');

