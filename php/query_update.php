<?php

error_reporting(0);

$editar_id = $_GET['editar_id'];
$nota_uno = $_GET['nota_uno'];
$nota_dos = $_GET['nota_dos'];
$nota_tres = $_GET['nota_tres'];
$nota_cuatro = $_GET['nota_cuatro'];

include 'conexion.php';

$conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);

if(mysqli_connect_errno()){
    echo "Error al conectar con la base de datos";
    exit();
}

mysqli_set_charset($conexion, "utf8");

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

$query = "UPDATE sqlcrud SET Nota1=$nota_uno, Nota2=$nota_dos, Nota3=$nota_tres, Nota4=$nota_cuatro WHERE ID='$editar_id'";

$resultado = mysqli_query($conexion, $query);

if($resultado==false){
    echo "Error en la consulta";
}else{
    if(mysqli_affected_rows($conexion)==0){
        echo 'No hubieron cambios en la base de datos, compruebe que este id existe.';
    }else{
        echo 'Registro modificado correctamente.';
    }
}


?>