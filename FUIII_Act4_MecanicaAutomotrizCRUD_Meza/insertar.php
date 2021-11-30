<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Nombredelcliente=$_POST['Nombre del cliente'];
$Apellidodelcliente=$_POST['Apellido del cliente'];
$Numerodecliente=$_POST['Numero de cliente'];
$Numerodeltelefonodelcliente=$_POST['Numero del telefono del cliente'];
$Serviciorequerido=$_POST['Servicio requerido'];

$sql="INSERT INTO `cliente`(`Nombre del cliente`, `Apellido del cliente`, `Numero de cliente`, `Numero del telefono del cliente`, `Servicio requerido`) VALUES ('[$Nombredelcliente]','[$Apellidodelcliente]','[$Numerodecliente]','[$Numerodeltelefonodelcliente]','[$Serviciorequerido]')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleados.php");
    
}else {
}
?>