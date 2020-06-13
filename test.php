<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="icon" type="image/png" href="Iconos/MonotipoGrande.png">
  <script>
    //Estas variables van a ir aumentando dependiendo de las respuestas
var industrial = 0;
var informatica = 0;
var mantenimiento = 0;
var salud = 0;
var social = 0;
var artes = 0;
var administracion = 0;
var educacion = 0;
var construccion = 0;
var comunicacion = 0;
var criminologia = 0;
  </script>
  <script>
          //window.open('carreras.html', "nuevo"); este se utiliza para paginas en otra pestaña
    function respuesta(industrial,informatica,mantenimiento,salud,social,artes,administracion,educacion,
    construccion,comunicacion,criminologia) {
      if(industrial!=0 || infomratica!=0 ||
      mantenimiento!=0 || salud!=0 || social!=0 ||
      artes!=0 ||administracion !=0 || educacion!=0 ||
      construccion!=0 || comunicacion != 0 || criminologia!=0){

        if(industrial>infomratica && industrial>mantenimiento &&
        industrial>=salud && industrial>=social && industrial>=artes &&
        industrial>=administracion && industrial>=educacion &&
        industrial>=construccion && industrial>=comunicacion && industrial>=criminologia){
          window.open='industrial.html';
        }

      }else
      {
        alert('Debes contestar primero el examen')
      }
    }

  </script>
</head>
<?php
include('nav.html');
?>

<body>
  <section class="jumbotron text-center">
    <h1>Responde nuestro test</h1>
    <hr>
    <form>
      <h3>¿Que clase en la prepa te pareció <b>mas</b> interesante?</h3>
      <h5>
        <input type="radio" name="pregunta1" id="pd11" value="español" onclick="ed += 1; ad += 0.5; sa += 0.7;">
        Español<br>
        <input type="radio" name="pregunta1" id="pd12" value="logica" onclick="ps += 1; inf += 1;"> lògica<br>
        <input type="radio" name="pregunta1" id="pd13" value="matematicas" onclick="co += 1; inf += .6; construc += 1; ind += 0.4; el += 1; "> Matematicas <br>
        <input type="radio" name="pregunta1" id="pd14" value="biologia" onclick="sa += 1.2; "> Biologia
      </h5>
      <hr>
      <h3>¿Que clase en la prepa te pareció <b>menos</b> interesante?</h3>
      <h5>
        <input type="radio" name="pregunta2" id="pd21" value="ingels" onclick="ed += 1; ad += 0.5; inf -= 0.7">
        Ingles<br>
        <input type="radio" name="pregunta2" id="pd22" value="quimica" onclick="sa -= 0.5;"> Quimica<br>
        <input type="radio" name="pregunta2" id="pd23" value="fisica" onclick=" inf -= .6; construc -= 1; el -= 1; ">
        Fisica <br>
        <input type="radio" name="pregunta2" id="pd24" value="Informatica" onclick="inf -= 1.2;"> Informatica
      </h5>
      <hr>

      <h3>¿Cual de estas afirmaciónes es <b>cierta</b> de acuerdo a ti?</h3>
      <h5>
        <input type="radio" name="pregunta3" id="pd31" value="nato" onclick="ed += 1; ad += 1.5; co += 0.5; ind += 0.2; sa += 0.4; ps +=0.5"> Soy un lider nato<br>
        <input type="radio" name="pregunta3" id="pd32" value="necesario" onclick="ed += 0.8; ad += 1; co += 0.3; ind += 0.1;ps +=0.3 "> Soy el ider si es necesario<br>
        <input type="radio" name="pregunta3" id="pd33" value="no" onclick="inf += .6; construc += 0.5; el += 1;"> No me
        gusta ser el lider <br>
        <input type="radio" name="pregunta3" id="pd34" value="nunca" onclick="ed -= 1; ad -= 1.5; co -= 0.5; ind -= 0.2;"> Nunca soy el lider
        <br>
      </h5>
      <hr>

      <h3>¿Cual de estas afirmaciónes es <b>correcta</b> de acuerdo a ti?</h3>
      <h5>
        <input type="radio" name="pregunta4" id="pd41" value="nato" onclick="inf += 0.2; el += 2; ">
        Me interesa la electricidad<br>
        <input type="radio" name="pregunta4" id="pd42" value="necesario" onclick="ed += 1;ps +=0.8; ">
        Me gusta enseñar y guiar
        <br>
        <input type="radio" name="pregunta4" id="pd43" value="no" onclick="construc += 2;">
        Me interesa hacer maquetas y planos
        <br>
        <input type="radio" name="pregunta4" id="pd44" value="nunca" onclick=" ad += 1.5; co += 1.5;">
        Me interesa como funcionan las empresas y las fluctuaciónes de dinero
        <br>
      </h5>
      <hr>

      <h3>¿en un futuro como te visualisas?</h3>
      <h5>
        <input type="radio" name="pregunta5" id="pd51" value="nato" onclick="inf += 0.3; ad += 1.5; co += 1; ind += 0.2"> Con mi propia empresa<br>
        <input type="radio" name="pregunta5" id="pd52" value="necesario" onclick="ed += 2;"> Dando clases<br>
        <input type="radio" name="pregunta5" id="pd53" value="no" onclick="inf += 2;">
        Trabajando con computadoras <br>
        <input type="radio" name="pregunta5" id="pd54" value="nunca" onclick="sa += 3"> Trabajando en un hospital
        <br>
        <input type="radio" name="pregunta5" id="pd54" value="nunca" onclick="construc += 3"> Haciendo puentes, edificios o casas.
        <br>
      </h5>
      <hr>

      <h3>¿te gusta trabajar mas con personas o con maquinas?</h3>
      <h5>
        <input type="radio" name="pregunta6" id="pd61" value="personas" onclick="industrial+=1">
        Personas<br>
        <input type="radio" name="pregunta6" id="pd62" value="maquinas" onclick="inf += 1.5; el += 1.45; construc += 0.2 ">
        Máquinas<br>
        <br>
      </h5>
      <hr>

      <button class="btn btn-primary" onclick="window.open('industrial.html', 'industrial');">
        Ver resultados
      </button>
    </form>
  </section>

  <?php
  include('footer.html');
  ?>


  <script src="js/jquerty.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>