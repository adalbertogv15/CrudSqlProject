<?php

error_reporting(0);

$borrar_id = $_GET['borrar_id'];

include 'conexion.php';

$conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);

if(mysqli_connect_errno()){
    echo "Error al conectar con la base de datos";
    exit();
}

mysqli_set_charset($conexion, "utf8");

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

$query = "DELETE FROM sqlcrud WHERE ID='$borrar_id' ";

$resultado = mysqli_query($conexion, $query);

if($resultado==false){
    echo "Error en la consulta";
}else{
    if(mysqli_affected_rows($conexion)==0){
        echo 'No hubieron cambios en la base de datos, compruebe que este id existe.';
    }else if(mysqli_affected_rows($conexion)==1){
        echo 'Registro borrado correctamente.';
    }else{
        echo 'Registros borrados correctamente.';
    }
}

?>