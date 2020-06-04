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
    var ed = 0;
    var inf = 0;
    var ad = 0;
    var co = 0;
    var sa = 0;
    var construc = 0;
    var ind = 0;
    var el = 0;
    var ps = 0;
  </script>
  <script src="test.js"></script>
</head>
<?php
include ('nav.html');
?>

<body>
  <section class="jumbotron text-center">
    <h1>Responde nuestro test</h1>
    <hr>
    <form>
      <h3>¿Que clase en la prepa te pareciò <b>mas</b> interesante?</h3>
      <h5>
        <input type="radio" name="pregunta1" id="pd11" value="español" onclick="ed += 1; ad += 0.5; sa += 0.7;">
        Español<br>
        <input type="radio" name="pregunta1" id="pd12" value="logica" onclick="ps += 1; inf += 1;"> lògica<br>
        <input type="radio" name="pregunta1" id="pd13" value="matematicas"
          onclick="co += 1; inf += .6; construc += 1; ind += 0.4; el += 1; "> Matematicas <br>
        <input type="radio" name="pregunta1" id="pd14" value="biologia" onclick="sa += 1.2; "> Biologia
      </h5>
      <hr>
      <h3>¿Que clase en la prepa te pareciò <b>menos</b> interesante?</h3>
      <h5>
        <input type="radio" name="pregunta2" id="pd21" value="ingels" onclick="ed += 1; ad += 0.5; inf -= 0.7">
        Ingles<br>
        <input type="radio" name="pregunta2" id="pd22" value="quimica" onclick="sa -= 0.5;"> Quimica<br>
        <input type="radio" name="pregunta2" id="pd23" value="fisica" onclick=" inf -= .6; construc -= 1; el -= 1; ">
        Fisica <br>
        <input type="radio" name="pregunta2" id="pd24" value="Informatica" onclick="inf -= 1.2;"> Informatica
      </h5>
      <hr>

      <h3>¿Cual de estas afirmaciònes es <b>cierta</b> de acuerdo a ti?</h3>
      <h5>
        <input type="radio" name="pregunta3" id="pd31" value="nato"
          onclick="ed += 1; ad += 1.5; co += 0.5; ind += 0.2; sa += 0.4"> Soy un lider nato<br>
        <input type="radio" name="pregunta3" id="pd32" value="necesario"
          onclick="ed += 0.8; ad += 1; co += 0.3; ind += 0.1; "> Soy el ider si es necesario<br>
        <input type="radio" name="pregunta3" id="pd33" value="no" onclick="inf += .6; construc += 0.5; el += 1;"> No me
        gusta ser el lider <br>
        <input type="radio" name="pregunta3" id="pd34" value="nunca"
          onclick="ed -= 1; ad -= 1.5; co -= 0.5; ind -= 0.2;"> Nunca soy el lider
        <br>
      </h5>
      <hr>

      <h3>¿Cual de estas afirmaciònes <b>no</b> es correcta de acuerdo a ti?</h3>
      <h5>
        <input type="radio" name="pregunta3" id="pd31" value="nato"
          onclick="ed += 1; ad += 1.5; co += 0.5; ind += 0.2; sa += 0.4"> Me interesan los ciruitos<br>
        <input type="radio" name="pregunta3" id="pd32" value="necesario"
          onclick="ed += 0.8; ad += 1; co += 0.3; ind += 0.1; "> Soy el ider si es necesario<br>
        <input type="radio" name="pregunta3" id="pd33" value="no" onclick="inf += .6; construc += 0.5; el += 1;"> No me
        gusta ser el lider <br>
        <input type="radio" name="pregunta3" id="pd34" value="nunca"
          onclick="ed -= 1; ad -= 1.5; co -= 0.5; ind -= 0.2;"> Nunca soy el lider
        <br>
      </h5>
      <hr>

      <button onclick="respuesta(ed, inf, ad, co, sa, construc, ind, el, ps)">Ver</button>
    </form>
  </section>

  <?php
include('footer.html');
?>


  <script src="js/jquerty.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>