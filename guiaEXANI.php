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
    <?php include('nav.html'); ?>
    <!--Aqui va el nombre del producto-->
    <hr>
    <h2 class="text-center">Guía EXANI-II</h2>
    <h3 class="text-center">Para la mayoría de las universidades</h3>
    <hr>
    <!--Aqui va la descripción del producto-->
    <div class="row">
        <div class="card col">
            <img src="Imagenes/GuiaExani.jpg" alt="Guia UNAM" class="card-img-top">
            <div class="card-body text-center">
                Por solo <b>$50</b> tendras la guía EXANI-II de forma descargable. <br>
                Al dar click en comprar tendrás un poco mas de ayuda para entrar a la universidad:

                <div class="card-body">
                    No dejes de estudiar, cada dia es mas dificil entrar a una buena universidad <br>
                    tanto dentro de la ciudad, como afuera de ella.
                    <!--Este es el botón para comprar este articulo en paypal, se le va a cambiar a este el link de cuando 
ya realizo la compra. tambien tengo que cambiar que solo pueda comprar una.-->
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="5WFNMWJJNXD3S">
                        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!--Aqui va el footer-->
    <?php include('footer.html'); ?>

    </div>
    <script src="js/jquerty.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>