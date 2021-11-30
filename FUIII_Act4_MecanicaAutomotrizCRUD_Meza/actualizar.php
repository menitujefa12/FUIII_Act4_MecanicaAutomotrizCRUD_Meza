<?php 
    include("conexion.php");
    $con=conectar();



$sql="SELECT * FROM `cliente` WHERE 1";
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
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre del cliente" placeholder="Nombre del cliente" value="<?php echo $row['Nombre del cliente']?>">
                                <input type="text" class="form-control mb-3" name="Apellido del cliente" placeholder="Apellido del cliente" value="<?php echo $row['Apellido del cliente']?>">
                                <input type="text" class="form-control mb-3" name="Numero de cliente" placeholder="Numero de cliente" value="<?php echo $row['Numero de cliente'] ?>">
                                <input type="text" class="form-control mb-3" name="Numero del telefono del cliente" placeholder="Numero telefono del cliente" value="<?php echo $row['Numero del telefono del cliente']?>">
                                <input type="text" class="form-control mb-3" name="Servicio requerido" placeholder="Servicio requerido" value="<?php echo $row['Servicio requerido']?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>