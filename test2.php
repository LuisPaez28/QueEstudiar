<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="icon" type="image/png" href="Iconos/MonotipoGrande.png">
</head>
<?php
include('nav.html');
?>

<?php
    //Estas variables van a ir aumentando dependiendo de las respuestas
    $industrial = 0;
    $informatica = 0;
    $mantenimiento = 0;
    $salud = 0;
    $social = 0;
    $artes = 0;
    $administracion = 0;
    $educacion = 0;
    $construccion = 0;
    $comunicacion = 0;
    $criminologia = 0;
?>

<body>
  <section class="jumbotron text-center">
    <h1>Responde nuestro test</h1>
    <hr>
    <form>
      <h3>¿Que clase en la prepa te pareció <b>mas</b> interesante?</h3>
      <h5>
        <input type="radio" name="pregunta1" id="pd11" value="español" 
        onclick="<?php 
        $educacion += 0.9; $administracion += 0.5; $salud += 0.7;$social+=1.1;$comunicacion+=1.2 ?>">
        Español<br>
        <input type="radio" name="pregunta1" id="pd12" value="logica" 
        onclick="<?php
        $social += 0.9; $informatica += 1.1;$criminologia+=0.92;$salud+=0.4
        ?>">
        lògica<br>
        <input type="radio" name="pregunta1" id="pd13" value="matematicas" 
        onclick="<?php
        $informatica += 0.6; $construccion += 1.1; $industrial += 0.4; $mantenimiento += 1.11; 
        ?>">
        Matematicas <br>
        <input type="radio" name="pregunta1" id="pd14" value="biologia"
         onclick="<?php $salud+=1.3 ?>">
        Biologia <br>
        <input type="radio" name="pregunta1" id="pd15" value="artes"
         onclick="<?php $artes+=2.001 ?>">
        Artes
      </h5>
      <hr>

      <h3>¿Que materia en la prepa te pareció <b>menos</b> interesante?</h3>
      <h5>
        <input type="radio" name="pregunta2" id="pd21" value="ingeles" 
        onclick="
        <?php
        $informatica -= 0.7;$comunicacion-=0.4
        ?>">
        Ingles<br>
        <input type="radio" name="pregunta2" id="pd22" value="quimica" 
        onclick="<?php
        $salud -= 0.5;$artes+=0.3
        ?>">
        Quimica<br>
        <input type="radio" name="pregunta2" id="pd23" value="fisica" 
        onclick="<?php
         $informatica -= .6; $construccion -= 1; $mantenimiento -= 1;
         ?>">
        Fisica <br>
        <input type="radio" name="pregunta2" id="pd24" value="Informatica" 
        onclick="<?php
        $informatica -= 1.2;$construccion-=0.3
        ?>">
        Informatica <br>
        <input type="radio" name="pregunta2" id="pd25" value="Etica"
         onclick="<?php
         $social -= 1.2;$educacion-=0.5;$administracion-=0.4;$salud-=0.6;$criminologia+=1.1
         ?>">
        Etica
      </h5>
      <hr>

      <h3>¿Cual de estas afirmaciónes es <b>cierta</b> de acuerdo a tu personalidad?</h3>
      <h5>
        <input type="radio" name="pregunta3" id="pd31" value="nato" 
        onclick="<?php
        $educacion += 0.99; $administracion += 1.53; $industrial += 0.33; $salud += 0.44; $social +=0.6
        ?>">
        Soy un lider nato<br>
        <input type="radio" name="pregunta3" id="pd32" value="necesario" 
        onclick="<?php
        $educacion += 0.8; $administracion += 0.94; $industrial += 0.19;$socail +=0.46;$criminologia+=0.85 
        ?>">
        Soy el ider si es necesario<br>
        <input type="radio" name="pregunta3" id="pd33" value="no" 
        onclick="<?php
        $infprmatica += .6; $construccion += 0.5; $mantenimiento += 1.111;
        ?>">
        No me gusta ser el lider <br>
        <input type="radio" name="pregunta3" id="pd34" value="nunca" 
        onclick="<?php
        $educacion -= 1; $administracion -= 1.5; $salud -= 0.016; $industrial -= 0.2;
        ?>">
        Nunca soy el lider
        <br>
      </h5>
      <hr>

      <h3>¿Cual de estas afirmaciónes es <b>correcta</b> de acuerdo a tu personalidad?</h3>
      <h5>
        <input type="radio" name="pregunta4" id="pd41" value="nato" 
        onclick="<?php
        $informatica += 0.221; $mantenimiento += 2.222;
        ?>">
        Me interesa la electricidad y la mecanica<br>
        <input type="radio" name="pregunta4" id="pd42" value="necesario" 
        onclick="<?php
        $educacion += 1.4;$social +=0.88; 
        ?>">
        Me gusta enseñar y guiar
        <br>
        <input type="radio" name="pregunta4" id="pd43" value="no" 
        onclick="<?php $construccion += 2.4;?>">
        Me interesa hacer maquetas y planos
        <br>
        <input type="radio" name="pregunta4" id="pd44" value="nunca" onclick="<?php $administracion += 1.5;?>">
        Me interesa como funcionan las empresas y las fluctuaciónes de dinero
        <br>
        <input type="radio" name="pregunta4" id="pd45" value="nunca" onclick="<?php $comunicacion += 2.33;?>">
        Me interesa como funciona la radio y la televición
        <br>
        <input type="radio" name="pregunta4" id="pd46" value="nunca" onclick="<?php $arte += 3.012;?>">
        Me gustaria vivir del arte
        <br>
        <input type="radio" name="pregunta4" id="pd47" value="nunca" onclick="<?php $criminologia += 3.034;?>">
        Tengo curiosidad de como se descubre a asesinos y criminales
      </h5>
      <hr>

      <h3>¿Cómo te visualisas a futuro?</h3>
      <h5>
        <input type="radio" name="pregunta5" id="pd51" value="nato" 
        onclick="<?php
        $informatica += 0.3; $administracion += 1.5; $industrial += 0.2;$social+=0.43
        ?>">
        Con mi propia empresa<br>
        <input type="radio" name="pregunta5" id="pd52" value="necesario" 
        onclick="<?php
        $educacion += 2.3;$comunicacion+=0.4
        ?>">
        Dando clases<br>
        <input type="radio" name="pregunta5" id="pd53" value="no" 
        onclick="<?php $informatica += 2.2;$mantenimiento+=0.8?>">
        Trabajando con computadoras <br>
        <input type="radio" name="pregunta5" id="pd54" value="nunca" 
        onclick="<?php $salud += 3;$administracion+=0.22?>">
        Trabajando en un hospital
        <br>
        <input type="radio" name="pregunta5" id="pd55" value="nunca" onclick="<?php $construccion += 3.4 ?>">
        Haciendo puentes, edificios, carreteras, casas,etc.
        <br>
        <input type="radio" name="pregunta5" id="pd56" value="nunca" onclick="<?php $arte += 3.4?>">
        Pintando cuadros y haciendo esculturas
        <br>
        <input type="radio" name="pregunta5" id="pd57" value="nunca" onclick="<?php $comunicacion += 3.4?>">
        Trabajando en la radio, la televición o el Periódico
        <br>
        <input type="radio" name="pregunta5" id="pd58" value="nunca" onclick="<?php $criminologia += 3.4?>">
        Descubrieno criminales
      </h5>
      <hr>

      <h3>¿te gusta trabajar mas con personas o con maquinas?</h3>
      <h5>
        <input type="radio" name="pregunta6" id="pd61" value="personas" 
        onclick="<?php 
        $industrial+=1.1;$salud+=1.12;$artes+=0.44;$administracion+=1.22;$educacion+=1.199;$comunicacion+=2.011;$criminologia+=1.034;
        ?>">
        Personas<br>
        <input type="radio" name="pregunta6" id="pd62" value="maquinas" 
        onclick="<?php 
        $informatica += 2.03; $mantenimiento += 2.11; $construccion += 1.002 
        ?>">
        Máquinas<br>
        <br>
      </h5>
      <hr>

      <button class="btn btn-primary" onclick="respuesta(industrial,informatica,mantenimiento,salud,social,artes,administracion,educacion,
    construccion,comunicacion,criminologia)">
        Ver resultados
      </button>
    </form>
  </section>

  <?php
  include('footer.html');
  ?>

<?php
    function respuesta($industrial, $informatica, $mantenimiento, $salud, $social, $artes, $administracion, $educacion,
      $construccion, $comunicacion, $criminologia) {
      if ($industrial != 0 || $informatica != 0 ||
        $mantenimiento != 0 || $salud != 0 || $social != 0 ||
        $artes != 0 || $administracion != 0 || $educacion != 0 ||
        $construccion != 0 || $comunicacion != 0 || $criminologia != 0) {

        if ($industrial >= $informatica && $industrial >= $mantenimiento &&
          $industrial >= $salud && $industrial >= $social && $industrial >= $artes &&
          $industrial >= $administracion && $industrial >= $educacion &&
          $industrial >= $construccion && $industrial >= $comunicacion && $industrial >= $criminologia) {
          ?> <script>
          alert('industrial');
          window.open('industrial.html', 'industrial');
          </script>
          <?php
        } else {

          if ($industrial <= $informatica && $informatica >= $mantenimiento &&
            $informatica >= $salud && $informatica >= $social && $informatica >= $artes &&
            $informatica >= $administracion && $informatica >= $educacion &&
            $informatica >= $construccion && $informatica >= $comunicacion && $informatica >= $criminologia) {
                ?><script>
            alert('informatica');
            window.open('informatica.html', 'informatica');
            // Despues de este se debe de abrir el php otra vez
            </script>
          } else {
            if (mantenimiento >= infomratica && industrial <= mantenimiento &&
              mantenimiento >= salud && mantenimiento >= social && mantenimiento >= artes &&
              mantenimiento >= administracion && mantenimiento >= educacion &&
              mantenimiento >= construccion && mantenimiento >= comunicacion && mantenimiento >= criminologia) {
              alert('mantenimiento');
              window.open('mantenimiento.html', 'mantenimiento');
            } else {
              if (salud >= infomratica && salud >= mantenimiento &&
                industrial <= salud && salud >= social && salud >= artes &&
                salud >= administracion && salud >= educacion &&
                salud >= construccion && salud >= comunicacion && salud >= criminologia) {
                alert('salud');
                window.open('salud.html', 'salud');
              } else {
                if (social >= infomratica && social >= mantenimiento &&
                  social >= salud && salud <= social && social >= artes &&
                  social >= administracion && social >= educacion &&
                  social >= construccion && social >= comunicacion && social >= criminologia) {
                  alert('socail');
                  window.open('social.html', 'social');
                } else {
                  if (artes >= infomratica && artes >= mantenimiento &&
                    artes >= salud && artes >= social && industrial <= artes &&
                    artes >= administracion && artes >= educacion &&
                    artes >= construccion && artes >= comunicacion && artes >= criminologia) {
                    alert('artes');
                    window.open('artes.html', 'artes');
                  } else {
                    if (administracion >= infomratica && administracion >= mantenimiento &&
                      administracion >= salud && administracion >= social && administracion >= artes &&
                      industrial <= administracion && administracion >= educacion &&
                      administracion >= construccion && administracion >= comunicacion && administracion >= criminologia) {
                      alert('administracion');
                      window.open('administracion.html', 'administracion');
                    } else {
                      if (educacion >= infomratica && educacion >= mantenimiento &&
                        educacion >= salud && educacion >= social && educacion >= artes &&
                        educacion >= administracion && industrial <= educacion &&
                        educacion >= construccion && educacion >= comunicacion && educacion >= criminologia) {
                        alert('educacion');
                        window.open('educacion.html', 'educacion');
                      } else {
                        if (construccion >= infomratica && construccion >= mantenimiento &&
                          construccion >= salud && construccion >= social && construccion >= artes &&
                          construccion >= administracion && construccion >= educacion &&
                          industrial <= construccion && construccion >= comunicacion && construccion >= criminologia) {
                          alert('construccion');
                          window.open('construccion.html', 'construccion');
                        } else {
                          if (comunicacion >= infomratica && comunicacion >= mantenimiento &&
                            comunicacion >= salud && comunicacion >= social && comunicacion >= artes &&
                            comunicacion >= administracion && comunicacion >= educacion &&
                            comunicacion >= construccion && industrial <= comunicacion && comunicacion >= criminologia) {
                            alert('comunicacion');
                            window.open('comunicacion.html', 'comunicacion');
                          } else {
                            if (criminologia >= infomratica && criminologia >= mantenimiento &&
                              criminologia >= salud && criminologia >= social && criminologia >= artes &&
                              criminologia >= administracion && criminologia >= educacion &&
                              criminologia >= construccion && criminologia >= comunicacion && industrial <= criminologia) {
                              alert('criminologia');
                              window.open('criminologia.html', 'criminologia');
                            } else 
                            {alert('Necesitamos mas informaciòn')}
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      } else {
        echo "Debes contestar primero";
      }
    }

    ?>


  <script src="js/jquerty.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>