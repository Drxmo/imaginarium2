<?php include_once ('/Templates/Backend/head.php') ?>
<?php include_once ('/Templates/Frontend/header.php') ?>

<script>
//    Reemplazar '.contInicioX' 
//    por '.sitiosX' si es para Sitios
//    por '.eventosX' si es para Eventos

  $(document).ready(function () {
    console.log("document loaded");
    $('.contInicioX').addClass('active');
    $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
    $('parrafoX').addClass('limit');

  });

  $(window).load(function () {
    console.log("window loaded");
    $('.contInicioX').addClass('active');
    $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
    $('.parrafoX').addClass('limit');
  });

//-------------Div parallas height adaptable


  var biggestHeight = "0";
// Loop through elements children to find & set the biggest height
  $(".slideX2 *").each(function () {
    // If this elements height is bigger than the biggestHeight
    if ($(this).height() > biggestHeight) {
      // Set the biggestHeight to this Height
      biggestHeight = $(this).height();
    }
  });

// Set the container height
  $(".slideX2").height(biggestHeight);

  var biggestHeight = "0";
// Loop through elements children to find & set the biggest height
  $(".parallax1 *").each(function () {
    // If this elements height is bigger than the biggestHeight
    if ($(this).height() > biggestHeight) {
      // Set the biggestHeight to this Height
      biggestHeight = $(this).height();
    }
  });

// Set the container height
  $(".parallax1").height(biggestHeight);

//$(document).ready(function() {
//    $(.parallax1).css("height", $(child).attr("offsetHeight"));
//}

//----
//$.fn.equalHeight = function() {
//    var maxHeight = 0;
//    return this.each(function(index, box) {
//        var boxHeight = $(box).height();
//        maxHeight = Math.max(maxHeight, boxHeight);
//    }).height(maxHeight);
//};
//
//$(document).ready(function() {
//    $('.slidesjs-control .parallax1').equalHeight();
//});
//----
//$(window).resize(function() {
//
//$('.parallax1').css('height', window.innerHeight);
//
//});

//  ----------------Efecto scroll speed

  if (window.addEventListener)
    window.addEventListener('DOMMouseScroll', wheel, false);
  window.onmousewheel = document.onmousewheel = wheel;

  function wheel(event) {
    var delta = 0;
    if ($(this).scrollTop() > 220) {
      if (event.wheelDelta)
        delta = event.wheelDelta / 120;
      else if (event.detail)
        delta = -event.detail / 20;

    } else if ($(this).scrollTop() > 50) {
      if (event.wheelDelta)
        delta = event.wheelDelta / 220;
      else if (event.detail)
        delta = -event.detail / 20;

    }
    else if ($(this).scrollTop() > 49) {

      if (event.wheelDelta)
        delta = event.wheelDelta / 920;
      else if (event.detail)
        delta = -event.detail / 90;
    }
    else if ($(this).scrollTop() > 48) {

      if (event.wheelDelta)
        delta = event.wheelDelta / 820;
      else if (event.detail)
        delta = -event.detail / 80;
    } else {

      if (event.wheelDelta)
        delta = event.wheelDelta / 320;
      else if (event.detail)
        delta = -event.detail / 10;
    }
    handle(delta);
    if (event.preventDefault)
      event.preventDefault();
    event.returnValue = false;
  }

  function handle(delta) {
    var time = 200;
    var distance = 50;

    $('html, body').stop().animate({
      scrollTop: $(window).scrollTop() - (distance * delta)
    }, time);
  }


//Numero de caracteres en el thumb

  $(function () {
    $(".parrafoX").each(function (i) {
      len = $(this).text().length;
      if (len > 10)
      {
        $(this).text($(this).text().substr(0, 530) + '...');
      }
    });
  });

  $(function () {
    $(".titulo-eventoX").each(function (i) {
      len = $(this).text().length;
      if (len > 100)
      {
        $(this).text($(this).text().substr(0, 700) + '...');
      }
    });
  });








</script>
<!--<div id="headerR">
  <h1 style="padding:0;margin:0;">&lt; aboutcher /&gt;;</h1>
  Parallax Demo
</div>-->

<div class="parallax1 " >

  <!--      <div class="txt right">
          Haymarket<br/>
          Metro<br/>
          Station
        </div>-->
  <!--     <div class="back backX">-->
  <div style="clear:both;"></div>
  <div class="parallax  " >
    <div class="txt1 " >


      <div class="txt  left ">
        Auris feugiat diam sapien
      </div>
      <div style="clear:both;"></div>
      <div class="txt left sub">
        &middot; Integer at mi laoreet dolor rhoncus porttitor.<br/>
        &middot; Lorem ut sapien.
      </div>
    </div>

  </div>
  <ul onclick="return false" onclick class="slides slideX2 stickySlide" id="trans1">



    <li><img  src="<?php echo asset('img/i4.JPG') ?>" alt="Imagen"></li>
    <li><img  src="<?php echo asset('img/i5.JPG') ?>" alt="Imagen"></li>

    <li><img  src="<?php echo asset('img/d1.JPG') ?>" alt="Imagen"></li>

    <li ><img  src="<?php echo asset('img/i1.jpg') ?>"  alt="Imagen"></li>

  </ul>



  <!--                </div>-->
  <!--    <section class="container-fluid container-fluidX main">
  
      <div class="row">
          <div class="">
              <section class="absoluteX">  
              <a>                               
                  <div class="back backX">
                      <section class="slideuno slideX1">
                          <div class="slides slideX2">
                              <img class="slidejs" src="img/im1.jpg"  alt="Imagen">
                              <img src="<>img/im2.jpg" alt="Imagen">
                              <img src="img/im3.JPG" alt="Imagen">
                          </div>
                      </section>
                  </div>
              </a>
  
          </div>
      </div>
      <div class="spaceSlideBott"></div>
  </section>-->
  <div style="clear:both;"></div>
</div>

<!--<div class="parallax" id="trans1">
    
  <div class="txt right">
    Haymarket<br/>
    Metro<br/>
    Station
  </div>
  <div style="clear:both;"></div>
  <div class="txt right sub">
    Sexy New Station with some tiltshift filters!
  </div>
</div>-->

<div class="contentX2 contentX2x">
  <div class="divBar"><img  class="bar1" src="<?php echo asset('img/bar1s.png') ?>"/></div>
  <div >
    <a  href="#"><img class="contentImg" src="<?php echo asset('img/logo.png') ?>" alt="Buga Logo"/></a>
  </div>
  <h2>Bienvenidos a BugaTravels...</h2>
  <p>Vestibulum id magna nibh. Morbi suscipit vestibulum malesuada. Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
    nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
    Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
    neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
    lectus non imperdiet.<br>  sapien, consequat 
    molestie odio placerat eu. Vestibulum id magna nibh. Morbi
    suscipit vestibulum malesuada. Integer dictum tortor et quam
    porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
    Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
    est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
    congue at pellentesque quis, suscipit eget est.<br></p>
  <div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
<div class="parallax" id="trans2">
  <div class="txt2" >

    <div class="txt leftB">
      EcoRutas.
    </div>
    <div style="clear:both;"></div>
    <div class="txt leftB sub">
      Al ritmo de tu cuerpo!
      <br/>Deportes extremos&hellip;
    </div>
  </div>
</div>
<div style="clear:both;"></div>

<div class="contentX2 right">
  <a href=""><img class="contentImg2" src="<?php echo asset('img/logo.png') ?>" alt="Buga Logo"/></a>
  <h2>Maximus Tempor</h2>
  <p>Integer dictum tortor et quam
    porttitor rhoncus. Mauris feugiat diam sapien, consequat 
    molestie odio placerat eu. Integer at mi laoreet dolor rhoncus porttitor.
    Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
    est, sit amet auctor sapien lorem ut sapien.</p>
  <section class="col-md-12">
    <section class="container-fluid">
      <div class="columnaX">
        <article class="articuloX articulo">    
          <a>
            <img class="imgarticle" src="<?php echo asset('img/i800 b.jpg') ?>" alt="Imagen">
          </a>
          <h2 class="titulo-eventoX titulo-evento">
            <a href="#">Entretenimiento Nocturno</a>
          </h2>

<!--                    <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>-->

          <p class="parrafoX2 articulo-contenido parrafoX text-justify">
            Cras nibh felis, 
            congue at pellentesque quis, suscipit eget est. Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
            nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
            Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
            neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
            lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
            molestie odio placerat eu. Vestibulum id magna nibh. Morbi
            suscipit vestibulum malesuada. Integer dictum tortor et quam
            porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
            Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
            est, sit amet auctor sapien lorem ut sapien. 
          </p>
          <div class="contenedor-botones">
            <!--                        <a href="#" class="btn btn-primary">Ver Mas</a>-->
            <a href="#" class="vermas">Ver Mas</a>
          </div>
        </article>      
      </div> 
      <div class="columnaX">
        <article class="articuloX articulo">  
          <a>
            <img class="imgarticle" src="<?php echo asset('img/i800 b.jpg') ?>" alt="Imagen">
          </a>
          <h2 class="titulo-eventoX titulo-evento">
            <a href="#">El Mirador</a>
          </h2>

<!--<p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>-->

          <p class="parrafoX2 articulo-contenido parrafoX text-justify">
            nteger dictum tortor et quam
            porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
            Etiam laoreet, tellus non maximus tempor. Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
            nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
            Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
            neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
            lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
            molestie odio placerat eu. Vestibulum id magna nibh. Morbi
            suscipit vestibulum malesuada. I ipsum tellus condimentum 
            est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
            congue at pellentesque quis, suscipit eget est.
          </p>
          <div class="contenedor-botones">
            <a href="#" class="vermas">Ver Mas</a>
          </div>
        </article>
      </div>

      <div class="columnaX">
        <!--                    <div class="">-->
        <article class="articuloX articulo">    
          <a>
            <img class="imgarticle" src="<?php echo asset('img/i800 b.jpg') ?>" alt="Imagen">
          </a>
          <h2 class="titulo-eventoX titulo-evento">
            <a href="#">Ruta Religiosa</a>
          </h2>

<!--<p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>-->

          <p class="parrafoX2 articulo-contenido parrafoX text-justify">
            Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
            nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
            Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
            neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
            lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
            molestie odio placerat eu. Vestibulum id magna nibh. Morbi
            suscipit vestibulum malesuada. Integer dictum tortor et quam
            porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
            Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
            est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
            congue at pellentesque quis, suscipit eget est.
          </p>
          <div class="contenedor-botones">
            <a href="#" class="vermas">Ver Mas</a>
          </div></article>  
        <!--                    </div>-->
      </div> 
    </section>
  </section>
  <div style="clear:both;"></div>
</div>
<div class="parallax" id="trans3">
  <div class="txt left">
    auris feugiat diam sapien
  </div>
  <div style="clear:both;"></div>
  <div class="txt left sub">
    &middot; Integer at mi laoreet dolor rhoncus porttitor.<br/>
    &middot; Lorem ut sapien.
  </div>
</div>




<?php include_once ('/Templates/Frontend/footer.php') ?>
<?php include_once ('/Templates/Backend/foot.php') ?>
