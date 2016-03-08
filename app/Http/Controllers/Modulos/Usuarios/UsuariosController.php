<?php

namespace App\Http\Controllers\Modulos\Usuarios;

use App\Http\Controllers\Controller;
use DB;

/**
 * Description of usuariosController
 *
 * @author Harold
 */
class UsuariosController extends Controller {

  function getCrear() {

    $nombre = "David Barona";
    return view('Modulos.Usuarios.usuarios.crear', compact("nombre"));
  }

  function postCrear() {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));

    return redirect(url("usuarios/usuarios/index"));
  }

  function getListar() {
    die("Funcion Listar");
  }

  function getIndex() {

    $usuarios = DB::select("SELECT * FROM usuario");

    return view('Modulos.Usuarios.usuarios.index', compact("usuarios"));
  }

  function getEditar($id) {

    $usuario = DB::select("SELECT * FROM usuario WHERE id = ?", array($id));
    $usuario = $usuario[0];

    return view('Modulos.Usuarios.usuarios.editar', compact("usuario"));
  }

  function postEditar() {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    DB::update("UPDATE usuario SET nombre = ?, apellido = ? WHERE id = ?", array(
        $nombre,
        $apellido,
        $id
            )
    );

    return redirect(url("usuarios/usuarios/index"));
  }

}
