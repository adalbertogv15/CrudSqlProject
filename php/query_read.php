<?php

error_reporting(0);

$buscar_id = $_GET['buscar_id'];

include 'conexion.php';

$conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);

if(mysqli_connect_errno()){
    echo "Error al conectar con la base de datos";
    exit();
}

mysqli_set_charset($conexion, "utf8");

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

$query = "SELECT * FROM sqlcrud WHERE ID='$buscar_id'";

$resultado = mysqli_query($conexion, $query);

if($resultado==false){
    echo "Error en la consulta";
}else{
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        
        echo 'ID: ' . $fila['ID'] . "<br/>" . "";
        echo 'Nota 1: ' . $fila['Nota1'] . "<br/>" . "";
        echo 'Nota 2: ' . $fila['Nota2'] . "<br/>" . "";
        echo 'Nota 3: ' . $fila['Nota3'] . "<br/>" . "";
        echo 'Nota 4: ' . $fila['Nota4'] . "<br/>" . "";
        
    }
}



?>
