<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombredelcliente=$_POST['Nombre del cliente'];
$Apellidodelcliente=$_POST['Apellido del cliente'];
$Numerodecliente=$_POST['Numero de cliente'];
$Numerodeltelefonodelcliente=$_POST['Numero del telefono del cliente'];
$Serviciorequerido=$_POST['Servicio requerido'];

$sql="UPDATE `cliente` SET =,`Nombre del cliente`='[$Nombredelcliente]',`Apellido del cliente`='[$Apellidodelcliente]',`Numero de cliente`='[$Numerodecliente]',`Numero del telefono del cliente`='[$Numerodeltelefonodelcliente]',`Servicio requerido`='[$Serviciorequerido]' WHERE ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>