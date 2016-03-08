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

      <!--CARRUSEL MEJORADO-->

      <CENTER><h1 class="button alt">EVENTOS</h1></CENTER>


      <center><div id="wowslider-containerCDAP">
          <div class="ws_imagesCDAP"><ul>
              <li><img src="<?php echo asset('img/buguita.jpg') ?>" alt="buguita" title="buga" id="wows2_0"/></li>
              <li><img src="<?php echo asset('img/buguita2.jpg') ?>" alt="buguita2" title="buga" id="wows2_1"/></li>
              <li><img src="<?php echo asset('img/buguita3.jpg') ?>" alt="buguita3" title="buga" id="wows2_2"/></a></li>
              <li><img src="<?php echo asset('img/buguita4.jpg') ?>" alt="buguita4" title="buga" id="wows2_3"/></li>
            </ul></div>
          <div class="ws_bulletsCDAP"><div>
              <a href="#" title="buguita"><span><img src="<?php echo asset('img/buguitaA.jpg') ?>" alt="Buguita"/>1</span></a>
              <a href="#" title="buguita2"><span><img src="<?php echo asset('img/buguitaB.jpg') ?>" alt="Buguita"/>2</span></a>
              <a href="#" title="buguita3"><span><img src="<?php echo asset('img/buguitaC.jpg') ?>" alt="Buguita"/>3</span></a>
              <a href="#" title="buguita4"><span><img src="<?php echo asset('img/buguitaD.jpg') ?>" alt="Buguita"/>4</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
          <div class="ws_shadow"></div>
        </div>	
        <script type="text/javascript" src="<?php echo asset('js/wowsliderCDAP.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/scriptCDAP.js') ?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/jqueryCDAP.js') ?>"></script>
        <section class="wrapper style">
          <div class="innerCDAP">
            <center><article class="feature left">
                <div class="content">
                  <h1>GUADALAJARA DE BUGA TE INVITA A DISFRUTAR</h1>
                  <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue.
                    Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
                  <ul class="actions">
                    <li>
                      <a href="#" class="button alt">Ver más</a>
                    </li>
                  </ul>
                </div>
              </article></center>
          </div>
        </section>
        <!--CARRUSEL TERMANIDO-->

        <!--IMÁGENES CON EFECTO HOVER-->


        <CENTER><h1 class="button alt">EVENTOS</h1></CENTER>

        <center><div id="allCDAP">
            <div class="viewCDAP view-first">
              <img src="<?php echo asset('img/buguita.jpg') ?>" />
              <div class="maskCDAP">
                <h2>Arte</h2>
                <p>Puedes ser parte de la naturaleza y de la arquitectura de Buga viendo su arte más vivo.</p>
                <a href="#" class="infoCDAP">Ver más</a>
              </div>
            </div>


            <div class="viewCDAP view-first">
              <img src="<?php echo asset('img/buguita2.jpg') ?>" />
              <div class="maskCDAP">
                <h2>Religión</h2>
                <p>Es fascinante como una ciudad puede reunir a tantas personas para demostrar que la fe mueve montañas .</p>
                <a href="#" class="infoCDAP">Ver más</a>
              </div>
            </div>


            <div class="viewCDAP view-first">
              <img src="<?php echo asset('img/buguita3.jpg') ?>" />
              <div class="maskCDAP">
                <h2>Deporte</h2>
                <p>Demuestra que eres capaz de resistir a lo que te depara la ciudad.</p>
                <a href="#" class="infoCDAP">Ver más</a>
              </div>
            </div>

            <div class="viewCDAP view-first">
              <img src="<?php echo asset('img/buguita4.jpg') ?>" />
              <div class="maskCDAP">
                <h2>El límite es el cielo</h2>
                <p>De Buga podrás aprovechar cada espacio que te brinda, hasta sentirte como en el paraiso.</p>
                <a href="#" class="infoCDAP">Ver más</a>
              </div>
            </div>

            <div class="viewCDAP view-first">
              <img src="<?php echo asset('img/buguita.jpg') ?>" />
              <div class="maskCDAP">
                <h2>Arte</h2>
                <p>Puedes ser parte de la naturaleza y de la arquitectura de Buga viendo su arte más vivo.</p>
                <a href="#" class="infoCDAP">Ver más</a>
              </div>
            </div>

            <div class="viewCDAP view-first">
              <img src="<?php echo asset('img/buguita3.jpg') ?>" />
              <div class="maskCDAP">
                <h2>Deporte</h2>
                <p>Demuestra que eres capaz de resistir a lo que te depara la ciudad.</p>
                <a href="#" class="infoCDAP">Ver más</a>
              </div>
            </div>

          </div></center>

        <!--IMÁGENES CON EFECTO HOVER TERMINADO-->


        <!--EVENTO INTEGRO-->



        <!--EVENTO INTEGRO TERMINADO-->


    </div>
  </div>
</div>
</section>

<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Backend/foot.php') ?>
