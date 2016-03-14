<?php

namespace App\Http\Controllers\Modulos\Eventos;

use App\Http\Controllers\Controller;
use DB;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eventosController
 *
 * @author Usuario
 */
class EventosController extends Controller {

  function getIndex() {

    return view('Modulos.Eventos.eventos');
  }

}

class EventoController extends Controller {

  function getIndex() {

    return view('Modulos.Eventos.evento');
  }

}

class CrearController extends Controller {

  function getIndex() {

    return view('Modulos.Eventos.crear');
  }

  function postCrear() {

    $nombreEve = $_POST['eve_nombre'];
    $descripcionEve = $_POST['eve_descipcion'];
    $fechaHoraEve = $_POST['eve_fecha_hora'];
    $direccionEve = $_POST['eve_direccion'];
    $nombreContactoEve = $_POST['eve_nombre_contacto'];
    $correoEve = $_POST['eve_correo_contacto'];
    $telefonoEve = $_POST['eve_telefono_contacto'];
    $valorBoletaEve = $_POST['eve_valor_boleta'];
    $latitudEve = $_POST['eve_latitud'];
    $LongitudEve = $_POST['eve_longitud'];
    $fechaIniEve = $_POST['fecha_inicio_publicacion'];
    $fechaFinEve = $_POST['fecha_fin_publicacion'];
    $estadoEve = $_POST['est_id'];

    DB::insert("INSERT INTO `bdp_evento`(`eve_id`, `usu_id`, `cat_id`, `eve_nombre`, `eve_descipcion`, `eve_fecha_hora`, `eve_direccion`, `eve_nombre_contacto`, `eve_correo_contacto`, `eve_telefono_contacto`, `eve_valor_boleta`, `eve_latitud`, `eve_longitud`, `fecha_inicio_publicacion`, `fecha_fin_publicacion`, `est_id`, `eve_created_at`, `eve_updated_at`, `eve_deleted_at`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array($nombreEve, $descripcionEve, $fechaHoraEve, $direccionEve, $nombreContactoEve, $correoEve, $telefonoEve, $valorBoletaEve, $latitudEve, $LongitudEve, $fechaIniEve, $fechaFinEve, $estadoEve));

    return redirect(url("eventos/eventos"));
  }

}
