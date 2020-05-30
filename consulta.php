<?php
$host = "localhost";
$usuario = "root";
$contra = "";
$baseDatos = "queestudiar";
//Crear conección con la base de datos
$conn = mysqli_connect($host,$usuario,$contra,$baseDatos);
//Conexiòn base de datos perritos
$conexion = new mysqli($host,$usuario,$contra,$baseDatos);
if($conexion -> connect_errno){
    die("Fallo la conexiòn, homie");
}
//Valores iniciales para mostrar
$query = "SELECT nombreL FROM licenciaturas";
//Revisar si me esta llegando el post. Se utiliza el isset para revisar si si llegò o no
if(isset($_POST['licenciaturas'])){
    $p = $_POST['licenciaturas'];
} else 

$lista = "";

//Cuando teclea en el input texto
if(isset($_POST['licenciaturas'])){
    $q = $conexion -> real_escape_string($_POST['licenciaturas']);
    $query = "SELECT nombreL FROM licenciaturas WHERE nombreL LIKE '%".$q."%'";
}
//Hacer la query 
$buscar = $conexion -> query($query);
//Mostrar resultados en una barra
$lista = "";
$lista.='<select>';
while ($fila = $buscar -> fetch_assoc()){
    $lista.='<option>'.$fila['nombreL'].'</option>';
}
$lista.= '</select>';
echo $lista;












//Esto es para que se muestren todas las licenciaturas como parrafos
$consulta = mysqli_query($conn,$query);
if(mysqli_num_rows($consulta) > 0){
    $parrafo = "";
    $parrafo.="<p>";
while($mostrar = mysqli_fetch_array($consulta,MYSQLI_ASSOC)){
       $parrafo.= $mostrar['nombreL'];
       $parrafo.= "<br>";
} 
echo $parrafo;
}else {
    echo "Nada para mostrar";
}