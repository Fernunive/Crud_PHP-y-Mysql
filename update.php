<?php

include("conexion.php");
$con=conectar();

$cod_es=$_POST['cod_es'];
$iden_es=$_POST['iden_es'];
$nom_es=$_POST['nom_es'];
$ape_es=$_POST['ape_es'];

$sql="UPDATE estudiante SET  iden_es='$iden_es',nom_es='$nom_es',ape_es='$ape_es' WHERE cod_es='$cod_es'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>