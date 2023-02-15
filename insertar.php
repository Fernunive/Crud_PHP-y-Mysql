<?php
    include("conexion.php");
    $con=conectar();

$cod_es=$_POST['cod_es'];
$iden_es=$_POST['iden_es'];
$nom_es=$_POST['nom_es'];
$ape_es=$_POST['ape_es'];


$sql="INSERT INTO estudiante VALUES('$cod_es','$iden_es','$nom_es','$ape_es')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>