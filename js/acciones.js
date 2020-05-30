//Esta funcion abre la pagina para ver universidades con el click en el boton
function abrirU(){
    //Este metodo abre la pagina
    window.open("universidades.html","Universidades",);
}


$(obtener_registros());
function obtener_registros(licenciaturas)
{
    $.ajax({
        url : 'consulta.php',
        type : 'POST',
        dataType :'html',
        data : {licenciaturas : licenciaturas},
    })
    .done(function(resultado){
        $("#lista_resultado").html(resultado);
    })
}

//cOMENZAR A BUSCAR CUANDO SE ESCRIBE
$(document).on('keyup','#busqueda', function(){
    var valorBusqueda = $(this).val();
    if(valorBusqueda != ""){
        obtener_registros(valorBusqueda)
    } else {
        obtener_registros();
    }
});

//Borar el contenido del txt
function borrarTxt(){
    $('input[type="text"]').val('');
}
