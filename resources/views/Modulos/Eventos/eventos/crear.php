<?php include_once ('/../../Templates/Backend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>

<div class="container container-fluid ">
  <?php echo "Bienvenido <code>" . $nombre . "</code>" ?>


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

<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Backend/foot.php') ?>
