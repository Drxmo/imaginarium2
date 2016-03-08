<?php include("/../../../Templates/Backend/header.php") ?>

<div class="container container-fluid ">
  <?php echo "Bienvenido <code>" . $nombre . "</code>" ?>


  <form class="form-horizontal" action="<?php echo url("usuarios/usuarios/crear") ?>" method="post">

    <div class="row">
      <div class="form-group col-lg-6">
        <input type="text" class="form-control col-lg-6" placeholder="Digite nombre" name="nombre" />
      </div>

      <div class="form-group col-lg-6">
        <input class="form-control col-lg-6" type="text" placeholder="Digite apellido" name="apellido" />
      </div>
    </div>

    <input type="submit" value="Guardar" />

  </form>
</div>
<?php include("/../../../Templates/Backend/footer.php") ?>