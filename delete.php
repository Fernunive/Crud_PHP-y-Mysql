<?php

include("conexion.php");
$con=conectar();

$cod_es=$_GET['id'];

$sql="DELETE FROM estudiante  WHERE cod_es='$cod_es'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>