<?php 
// este cdoigo conecta a la base de datos
include'conexion.php';

$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$grado=$_POST['grado'];
$grupo=$_POST['grupo'];
 // se crearon las variables $ (]los nonbre de los input en el formulario
  // md5 es para encriptar la clave

$guardar=$conectarbd->query("INSERT INTO usuarios (identificacion, nombre, apellido, telefono, email, grado, grupo)
	VALUES ('$identificacion' , '$nombre' , '$apellido' , '$telefono' , '$email' , '$grado' , '$grupo')");
     // guardar datos en la tabla persona.

if ($guardar){ 
echo '<script type="text/javascript">alert("Registro Exitoso");</script>'; 
header( "refresh:0; url=./registrarse.php" );
}

 else{
      echo '<script type="text/javascript">alert("Error al guardar");</script>';
 }
 echo "prueba";
 ?>
