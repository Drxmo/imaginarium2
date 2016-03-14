<?php include_once ('/../../Templates/Frontend/header.php') ?>

<div class="container container-fluid ">
  <?php echo "Bienvenido" ?>


  <form class="form-horizontal" action="<?php echo url("eventos/eventos/crear") ?>" method="post">

    <div class="row">
      <div class="form-group col-lg-6">
        <input type="text" class="form-control col-lg-6" placeholder="Digite nombre del evento" name="nombreEvento" />
      </div>

      <div class="form-group col-lg-6">
        <input class="form-control col-lg-6" type="text" placeholder="Digite apellido" name="apellido" />
      </div>
    </div>

    <input type="submit" value="Guardar" />

  </form>
</div>

<section class="main container regcontainer">
    <div class="row">
        <div class="jumbotron boxuser boxuserX">
            <form class="form-horizontal" action="<?php echo url("eventos/eventos/crear") ?>" method="post">
                    <div class="form-group">
                        <label class="control-label col-xs-3">Nombre del Evento:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control col-lg-6" placeholder="Digite nombre del evento" name="nombreEvento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Fecha y Hora:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control col-lg-6" placeholder="Digite la fecha y la hora del evento" name="nombreEvento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Direccion del lugar:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control col-lg-6" placeholder="Digite nombre del evento" name="nombreEvento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_nombre_contacto:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_nombre_contacto" placeholder="nombre_contacto" name="eventos[nombre_contacto]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_correo_contacto:</label>
                        <div class="col-xs-9">
                            <input type="email" class="form-control" id="eve_correo_contacto" placeholder="email_contactp" name="eventos[evento_correo_contacto]">
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="control-label col-xs-3">Evento_telefono_contacto:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_telofono_contacto" placeholder="telefono_contacto" name="eventos[evento_telefono_contacto]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_valor_boleta:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_valor_boleta" placeholder="vallor_boleta" name="eventos[evento_valor_boelta]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_latitud:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_latitud" placeholder="latitud" name="eventos[evento_latitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Evento_longitud:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_longitud" placeholder="longitud" name="eventos[evento_longitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">fecha_inicio_publicacion</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="fec_inicio_publicacion" placeholder="inicio_publiccacion" name="eventos[fecha_inicio_publicacion]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">fecha_fin_publicacion:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="fec_fin_publicacion" placeholder="fin_publicacion" name="eventos[fecha_fin_publicacion]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Estado_id:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="est_id" placeholder="estado_id" name="eventos[estado_id]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">evento_created_at:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_created_at" placeholder="eve_created" name="eventos[evento_created_at]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">evento_updated_at:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_update_at" placeholder="eve_update" name="eventos[evento_updated_at]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">evento_deleted_at:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="eve_deleted_at" placeholder="eve_deleted" name="eventos[evento_deleted_at]">
                        </div>
                    </div>
                    
                    
                   
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <label class="checkbox-inline">
<!--                                <input type="checkbox" value="news">Desea recibir notificaciones.
                            </label>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <label class="checkbox-inline">
                                
<!--                                <input type="checkbox" value="agree">Acepta <a href="#">los terminos y condiciones</a>.-->
                                
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-default" value="Registrar">
                            <a href="<?php echo $fsConfig->getUrl() ?>index.php/home/index" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>


<?php include_once ('/../../Templates/Frontend/footer.php') ?>
