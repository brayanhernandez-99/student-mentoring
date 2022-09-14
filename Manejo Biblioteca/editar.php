<?php 
include 'conexion.php';
$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$grado=$_POST['grado'];
$grupo=$_POST['grupo'];

$editar=$conectarbd->query("UPDATE usuarios set nombre='$nombre', apellido='$apellido', telefono='$telefono', email='$email' where identificacion='$identificacion', grado='$grado', grupo='$grupo'");

if ($editar){
    echo '<script type="text/javascript">alert("Actualizado");</script>'; 
     header( "refresh:0; url=master.php" );
}




?>