<?php include("/../../../Templates/Backend/header.php") ?>

<div class="container container-fluid ">

  <form class="form-horizontal" action="<?php echo url("usuarios/usuarios/editar") ?>" method="post">

    <div class="row">
      <div class="form-group col-lg-6">
        <input type="text" class="form-control col-lg-6" placeholder="Digite nombre" name="nombre" value="<?php echo $usuario->nombre ?>" />
      </div>

      <div class="form-group col-lg-6">
        <input class="form-control col-lg-6" type="text" placeholder="Digite apellido" name="apellido" value="<?php echo $usuario->apellido ?>" />
      </div>
    </div>
    <input type="hidden" value="<?php echo $usuario->id ?>" name="id" />
    <input type="submit" value="Editar" />

  </form>
</div>
<?php include("/../../../Templates/Backend/footer.php") ?>