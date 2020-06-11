<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="Iconos/MonotipoGrande.png">
</head>

<body>
<!--Aqui va la barra de navegación-->
<?php include('nav.html');?>
<!--Aqui va el nombre del producto-->
    <hr>
    <h2 class="text-center">Guía UNAM</h2>
    <h3 class="text-center">Para todas las áreas </h3>
    <hr>
<!--Aqui va la descripción del producto-->
    <div class="row">
        <div class="card col">
            <img src="Imagenes/GuiaUNAMpeque.jpg" alt="Guia UNAM" class="card-img-top">
            <div class="card-body text-center">
                Por solo <b>$100</b> tendras las guias de forma descargable. <br>
                Al dar click en comprar tendrás las guias de las 4 áreas de la UNAM:
                <dl>
                    <dt>Guía UNAM área I – Ciencias Físico Matemáticas y de las Ingenierías.</dt>
                    <dt>Guía UNAM área II – Ciencias Biológicas, Químicas y de la Salud.</dt>
                    <dt>Guía UNAM área III – Ciencias Sociales</dt>
                    <dt>Guía UNAM área IV – Humanidades y de las Artes</dt>
                </dl>
                <div class="card-body">
                    No dejes de estudiar, cada dia es mas dificil entrar a universidades como esta <br>
                    la que apesar de esta fuera la la ciudad es una excelente opción.
                    <!--Este es el botón para comprar este articulo en paypal, se le va a cambiar a este el link de cuando 
ya realizo la compra. tambien tengo que cambiar que solo pueda comprar una.-->
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="2M68W28MP7MWQ">
                        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif"
                            border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1"
                            height="1">
                    </form>
                </div>
            </div>
        </div>
    </div>

<!--Aqui va el footer-->
<?php include('footer.html');?>

    </div>
    <script src="js/jquerty.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>