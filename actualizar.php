<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM estudiante WHERE cod_es='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_es" value="<?php echo $row['cod_es']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="iden_es" placeholder="Identificacion" value="<?php echo $row['iden_es']  ?>">
                                <input type="text" class="form-control mb-3" name="nom_es" placeholder="Nombres" value="<?php echo $row['nom_es']  ?>">
                                <input type="text" class="form-control mb-3" name="ape_es" placeholder="Apellidos" value="<?php echo $row['ape_es']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>