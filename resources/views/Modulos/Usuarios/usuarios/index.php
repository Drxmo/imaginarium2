<?php include("/../../../Templates/Backend/header.php") ?>

<div class="container container-fluid ">
  <a href="<?php echo url("usuarios/usuarios/crear") ?>">Crear usuario </a>
  <table class="table-responsive">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Editar</th>
        <th>Elimiar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $count = 1;
      foreach ($usuarios as $usuario) {
        ?>
        <tr>
          <td><?php echo $count++ ?></td>
          <td><?php echo $usuario->nombre ?></td>
          <td><?php echo $usuario->apellido ?></td>
          <td><a href="<?php echo url("usuarios/usuarios/editar/" . $usuario->id) ?>" >Editar</a></td>
          <td><a href="<?php echo url("usuarios/usuarios/eliminar/" . $usuario->id) ?>" >Eliminar</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</div>
<?php include("/../../../Templates/Backend/footer.php") ?>