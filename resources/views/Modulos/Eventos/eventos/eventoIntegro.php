<?php include_once ('/../../Templates/Backend/head.php') ?>
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
          ;</script>

<div>
  <img class="imgarticleX" src="<?php echo asset('img/i3.jpg') ?>" alt="Imagen">
</div>

<section class="container container-fluid main">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <!--EVENTO INTEGRO-->

      <CENTER><h1 class="button alt">EVENTOS</h1></CENTER>



      <center><section id="about" class="three22">
          <div class="container22">

            <header>
              <h2>EVENTO INTEGRO</h2>
            </header>

            <img class="image22 featured" src="<?php echo asset('img/buguita3.jpg') ?>" />

            <p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
              ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
              laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
              parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
              dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
              ornare iaculis.</p>

          </div>
        </section></center>

      <!--EVENTO INTEGRO TERMINADO-->



    </div>
  </div>
</div>
</section>

<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Backend/foot.php') ?>
