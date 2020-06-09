<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guias y Asesorias</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
  </head>
  <body>
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
                <a href="Compras/guiaUNAM.html"><img class="d-block w-100" src="Imagenes/GuiaUNAMpeque.jpg" alt="Guia UNAM"></a>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="Imagenes/GuiaExani.jpg" alt="Guia Exani II">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="Imagenes/GuiasIPN.jpg" alt="Guia IPN">
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
              <a href="#" class="btn btn-primary">Contactar</a>
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
              <a href="#" class="btn btn-primary">Contactar</a>
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
              <a href="#" class="btn btn-primary">Contactar</a>
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
              <a href="#" class="btn btn-primary">Contactar</a>
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
              <a href="#" class="btn btn-primary">Contactart</a>
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
              <a href="#" class="btn btn-primary">Contactar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?PHP
    include('footer.html')
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js2/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js2/popper.min.js"></script>
    <script src="js2/bootstrap-4.3.1.js"></script>
  </body>
</html>
