<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
  return view('index');
});

Route::controllers([
    'usuarios/usuarios' => "Modulos\Usuarios\UsuariosController",
    'usuarios/roles' => "Modulos\Usuarios\RolesController",
    'eventos/eventos' => "Modulos\Eventos\EventosController",
    'eventos/evento' => "Modulos\Eventos\EventoController",
    'eventos/crear' => "Modulos\Eventos\CrearController"
]);
/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
  //
});
