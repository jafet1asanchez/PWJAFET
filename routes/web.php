<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Carga la vista con el formulario y pruebas de rutas
Route::get('rutas', function () {
    return view('rutas');
});

// Ejemplo de ruta GET: responde cuando se accede a la URL /saludo
Route::get('/saludo', function () {
    return 'Hola desde una ruta GET';
})->name('saludo');

// Ruta POST: puede usarse para enviar datos a través de un formulario
Route::post('/saludo', function () {
    return 'Formulario recibido desde una ruta POST';
})->name('saludo.post');

// Ruta PUT: se usa para actualizar información 
Route::put('/saludo', function () {
    return 'Datos actualizados desde una ruta PUT';
})->name('saludo.put');

// Ruta DELETE: se usa para eliminar información
Route::delete('/saludo', function () {
    return 'Recurso eliminado desde una ruta DELETE';
})->name('saludo.delete');

