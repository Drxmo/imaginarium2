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

  function getCrear() {

    return view('Modulos.Eventos.eventos.crear', compact("nombre"));
  }

  function postCrear() {
    $nombre = $_POST['nombre'];
    
            $eveId->setId($evento->nextId());
            $catId($eventos['catId']);
            $estId->setEstadoId($eventos['estadoId']);
            $usuId->setUsuarioId($eventos['usuId']);
            $nombreEve->setNombre($eventos['nombre']);
            $fechaHora->setFecha($eventos['fecha_hora']);
            $descripcionEve->setDescripcion($eventos['descripcion']);
            $direccionEve->setDireccion($eventos['direccion']);
            $telefonoEve->setTelefono($eventos['telefono']);
            $latitudEve->setLatitud($eventos['latitud']);
            $LongitudEve->setLongitud($eventos['longitud']);
            $faceEve->setFacebook($eventos['facebook']);
            $twiEve->setLatitud($eventos['twitter']);
            $gooEve->setLatitud($eventos['google_plus']);
            $cre->setLatitud($eventos['created_at']);
            $evento->setLatitud($eventos['updated_at']);
            $evento->setLatitud($eventos['deleted_at']);
            
            $evento->save();

    DB::insert("INSERT INTO `bdp_evento`(`eve_id`, `usu_id`, `cat_id`, `eve_nombre`, `eve_fecha_hora`, `eve_direccion`, `eve_nombre_contacto`, `eve_correo_contacto`, `eve_telefono_contacto`, `eve_valor_boleta`, `eve_latitud`, `eve_longitud`, `fecha_inicio_publicacion`, `fecha_fin_publicacion`, `est_id`, `eve_created_at`, `eve_updated_at`, `eve_deleted_at`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)", array($nombre, $apellido));
  }

  function getEvento() {

    return view('Modulos.Eventos.evento');
  }

  function getEventoIntegro() {

    return view('Modulos.Eventos.eventoIntegro');
  }

}
