<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Guias y Asesorias</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="Iconos/MonotipoGrande.png">
</head>

<body>
  <!--Barra de navegación-->
  <?php
  include('nav.html');
  ?>
  <!--Aqui van las guias para vender-->
  <h2 class="text-center">Compra tu Guía</h2>
  <hr>
  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="guiaUNAM.php"><img class="d-block w-100" src="Imagenes/GuiaUNAMpeque.jpg" alt="Guia UNAM"></a>
              <div class="carousel-caption d-none d-md-block">
                <h3 style="color: black;"><b>$100 mx</b></h3>
                <h5 style="color: black;"><b>Guía UNAM</b></h5>
              </div>
            </div>
            <div class="carousel-item">
              <a href="guiaEXANI.php"><img class="d-block w-100" src="Imagenes/GuiaExani.jpg" alt="Guia Exani II"></a>
              <div class="carousel-caption d-none d-md-block">
                <h3><b>$50 mx</b></h3>
                <h5><b>Guía EXANI-II</b></h5>
              </div>
            </div>
            <div class="carousel-item">
              <a href="guiaIPN.php"><img class="d-block w-100" src="Imagenes/GuiasIPN.jpg" alt="Guia IPN"></a>
              <div class="carousel-caption d-none d-md-block">
                <h3 style="color: black;"><b>$100 mx</b></h3>
                <h5 style="color: black;"><b>Guía IPN</b></h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <!--Aqui van las tutorias, las cuales mandan a enlaces de wp preguntando por las mismas. Se ofrecera esto en las 
  universidades tambien (para los estudiantes o maestros que se uiqeran ganar un dinero extra)
se cobrará una subscripcción y ellos cobraran como gusten-->
  <hr>
  <h2 class="text-center" id="tutorias">Tutorias</h2>
  <hr>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="Imagenes/CursoCalculo.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso de Cálculo</h5>
            <p class="card-text">
              Si necesitas un poco de ayuda en cálculo
            </p>
            <a href="
              https://wa.me/16271433092?text=Hola,%20necesito%20información%20del%20curso%20de%20cálculo
              " class="btn btn-primary">Contactar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="Imagenes/CursoRedaccionyLectura.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso de redacción y lectura</h5>
            <p class="card-text">
              Si necesitas un poco de ayuda en redacción y lectura.
            </p>
            <a href="
              https://wa.me/16271433092?text=Hola,%20necesito%20información%20del%20curso%20de%20redacción%20y%20lectura
              " class="btn btn-primary">Contactar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="Imagenes/CursoExaniII.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso EXANI II</h5>
            <p class="card-text">
              Si necesitas ayuda para el examen de adminisión...
            </p>
            <!--Aqui es donde se mensiona que es otro servicio que se va a ofrecer-->
            <a href="
              https://wa.me/16271433092?text=Hola,%20necesito%20información%20del%20curso%20EXANI%20II
              " class="btn btn-primary">Contactar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center mt-4">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="Imagenes/CursoIngles.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso de Ingles</h5>
            <p class="card-text">
              Si necesitas un poco de ayuda con el Ingles
            </p>
            <a href="
              https://wa.me/16271433092?text=Hola,%20necesito%20información%20del%20curso%20de%20ingles
              " class="btn btn-primary">Contactar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="Imagenes/CursoAlgebraYGeometria.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso Algebra y Geometria</h5>
            <p class="card-text">
              Si necesitas un poco de ayuda con algebra y geometria
            </p>
            <a href="
              https://wa.me/16271433092?text=Hola,%20necesito%20información%20del%20curso%20de%20algebra%20y%20geometria
              " class="btn btn-primary">Contactar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="Imagenes/CursoIntroducciónUniversidad.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso Introducción a universidades</h5>
            <p class="card-text">
              Sabemos que los inicios son dificiles, si necesitas ayuda para adaptarte y entender aqui es el lugar.
            </p>
            <a href="
              https://wa.me/16271433092?text=Hola,%20necesito%20información%20del%20curso%20introducción%20a%20universidad
              " class="btn btn-primary">Contactar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?PHP
  include('footer.html')
  ?>

  <!--Scripts y recursos-->
  <script src="js2/jquery-3.3.1.min.js"></script>
  <script src="js2/popper.min.js"></script>
  <script src="js2/bootstrap-4.3.1.js"></script>
</body>

</html>