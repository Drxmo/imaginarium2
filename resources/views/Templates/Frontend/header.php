<?php include_once ('/../../Templates/Backend/head.php') ?>



<style>

  html, body, fieldset, pre, .h1X {	
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;}

  #darkbackground{
    /*    background-color: #000 !important;*/
    background-color: rgba(0, 0, 0,1.9);
    background: black;
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
  }
  #backrgb{
    background-color: rgba(10, 10, 10,.35) ;
  }
  .TitlesX{z-index: 99999 !important;}
  .headerX{
    position: relative;
    text-align: center;
    z-index: 99;
    font-size: 72px;
    line-height: 108px;
    height: 108px;
    background: transparent;
    color: #fff;
    font-family:BankGothic Md BT,ralewayBold,Impact, Arial,sans-serif;
    font-weight: bolder;

    text-shadow:0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #49ff18, 0 0 30px #49ff18, 0 0 40px #49ff18, 0 0 55px #49ff18, 0 0 75px #49ff18;
    /*text-shadow: -3px 1px 30px #49ff18;        */


    // set animation
    -webkit-transition: all 0.7s ease;
    transition: all 0.7s ease;
  }
  .backHead{

    position:absolute;
    width:100%;
    height:100%;
    top:0;
    z-index:-1;}
  .stickyX{position: fixed;}
  .sticky{position: fixed;}

  .stickyX2{position: fixed;
            top: 40px;
            width: 100%;
            z-index: 999}
  .stickyX3{position: fixed;
            top: 0px;
            width: 100%;
            z-index: 999}
  .noStickyX{position:relative !important;
             top:50px;
             -webkit-transition: all 1.7s ease;
             transition: all 1.7s ease;}
  .headerX.smallX, logoheadX {


    display: inline-block;
    font-size: 24px;
    line-height: 48px;
    height: 48px; 
    font-weight: bolder;
    margin-bottom: auto;
    /*        width: 100%;*/
    background: transparent;
    text-align: left;
    padding-left: 20px;
    -webkit-transition: all 0.9s ease;
    transition: all 0.9s ease;
    transition-delay:all 0.9s ease ;

    z-index: 9999;
    right: 0px;
    left: 0px;

  }

  .logohead {
    height: 100px; 
    float:right;
    margin-top:10px;
    margin-right:100px;     
  }

  .floatRightX ul li a{
    padding-right: 0px;
    height: 0px;
    top:0px}
  .iniciX{
    text-align: left;
    display: inline-block;
  }
  .containerX1{

    top: 100%;
    left: 0;
    right: 0;
    padding: 10px;
  }
  .veilX1{
    display: inline-block;
    margin: 0 auto;
    background-color: lavender;
  }

  .BackgroundHead{position: fixed;
                  top: 0px;
                  background-color: black;
                  z-index: -99999;
                  height: 900px;
                  width: 100%}

  .stickySlide{
    position:fixed !important;
    position:absolute;

    right:0;
    bottom:0;
    left:0;
    top: 92px; }

  .dropdown-menu li{
    height: auto !important;
  }
  .navbar-rightXM{margin-right: -15px !important;}
  /*----------- responsive-start-here -----------*/
  /*----------- responsive-start-here -----------*/
  /*----------- responsive-start-here -----------*/

  @media (max-width:768px){

    .navbar-collapse{ ;}
    .searchX{display:none
    }
    .btn-default {display:none            
    }
    /*        .navsub{display:none
            }*/
    .headerXc{
      display: inline-block;
      font-size: 24px;
      line-height: 48px;
      height: 48px; 
      margin-bottom: auto;
      width: 100%;
      background: transparent;
      text-align: left;

      -webkit-transition: all 0.9s ease;
      transition: all 0.9s ease;
      transition-delay:all 0.9s ease ;

      z-index: 9999;
    }
    .h1X{ padding-left: 20px;}
    /*        .BackgroundHead{display: none}*/
  }
  @media (max-width:838px){


    /*        .floatRightX ul li a{
                display: none}
        }*/


  </style>


  <div class="theHeader" >
    <header class="headerX" ><h1 class="h1X"><a style="color:blue" class="TitleX" href="#" title="Destino Travel" rel="home"><span class="TitleX"><span >B</span>uga<span >T</span>ravel<span >s</span><img class="logohead"  src="<?php echo asset('img/logo.png') ?>" alt="Buga Logo"/></span></a></h1>
      <div class="backHead"></div></header>
    <div class="BackgroundHead"></div>

    <div class='containerX1 invisibleX'><div class='veilX2'></div></div>



    <!-- importar jQuery -->

    <script src="<?php echo asset('js/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo asset('js/jquery/jstiloX.js') ?>"></script>


    <div style="clear:both;"></div>


    <div class="large-12-columns rowX "  style="position: relative">
      <nav class="navsub navmain navbar navbar-default" id="backrgb">
        <div class="container-fluid container-fluidX navcont heightX">


          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>


          <div class="collapse navbar-collapse fijoX" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav floatLeftX">

              <li class="contInicioX"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
              <li class="sitiosX"><a href=#">Sitios</a></li>
              <li class="eventosX"><a href="#">Eventos</a></li>
              <li class="eventosX"><a href="#">Categorias</a></li>

            </ul>
            <div class="floatRightX">

              <ul class="nav navbar-nav navbar-right navbar-rightX">

                <?php if (isset($_SESSION['user']) !== true): ?>

                  <li><a class="identificarse" style="display:none" href="#">Identificarse</a></li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                      <li><a href="#">Identificarse</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Crear cuenta</a></li>
                      <li role="separator" class="divider"></li>

                    </ul>
                  </li>

                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta<span class="caret"></span></a>
                    <ul class="dropdown-menu">

                      <li><a href="#">Todas</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Editar Datos</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Cambiar contraseña</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Eliminar cuenta</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Cerrar Sesión</a></li>
                      <li role="separator" class="divider"></li>
                    </ul>
                  </li>
                <?php endif ?>
                <form action="#" class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control searchX" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">
                    <span class="icon-magnifying-glass"></span>
                  </button>
                </form>
              </ul>

            </div>
          </div>

        </div>



      </nav>

    </div>

  </div>
  <div style="clear:both;"></div>
  <script src="<?php echo asset('js/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo asset('js/jquery/jstiloX.js') ?>"></script>



