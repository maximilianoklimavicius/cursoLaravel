<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get( 'peticion', proceso );
Route::get( '/hola', function(){
    return 'Hola Mundo desde Laravel';
} );

Route::get('/inicio/{nombre}', function ($nombre){
    return view('inicio', [ 'nombre' => $nombre  ]);
});

#############################
### motor de plantillas blade
Route::view('/test', 'prueba');
Route::view('/form', 'formulario');
Route::post('/procesarDatos', function (){
    $nombre = $_POST['nombre']; // captura de dato desde form
    /*
        falta pasar dato a la view
        y haremos usando un array asuciativo
    */
    return view('procesarDatos', [ 'nombre' => $nombre ]);
});
