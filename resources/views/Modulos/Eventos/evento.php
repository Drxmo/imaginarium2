<?php include_once ('/../../Templates/Frontend/header.php') ?>

<!--Activar Boton navbar-->
<script>
//    Reemplazar '.contInicioX' 
//    por '.sitiosX' si es para Sitios
//    por '.eventosX' si es para Eventos
  $(document).ready(function () {
    console.log("document loaded");
    $('.sitiosX').addClass('active');
    $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
    $('parrafoX').addClass('limit');

  });

  $(window).load(function () {
    console.log("window loaded");
    $('.sitiosX').addClass('active');
    $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
    $('.parrafoX').addClass('limit');
  });

  $(document).ready(function () {
  $(".mCustomScrollbar").mCustomScrollbar({axis: "x"})
          ;
      </script>

<div>
  <img class="imgarticleX" id="imgpeque" src="<?php echo asset('img/buguita2.jpg') ?>" alt="Imagen"/>
</div>

<section class="container container-fluid main">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <!--EVENTO DETALLE-->

      <div class="innerCDAP">
        <article class="descriptionCDAP">
          <div class="content descriptionCDAP">
            <h1 id="tituCDAP">GUADALAJARA DE BUGA TE INVITA A DISFRUTAR</h1>
            <img src="<?php echo asset('img/buguita.jpg') ?>"/>
            <hr class="lineaCDAP">
            <p class="texCDAP">Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue.
              Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
          </div>
        </article>
      </div>
      <div style="clear:both;"></div>
      <!--EVENTO DETALLE TERMINADO-->
    </div>
  </div>
</section>

<div id="baje">
  <?php include_once ('/../../Templates/Frontend/footer.php') ?>
</div>