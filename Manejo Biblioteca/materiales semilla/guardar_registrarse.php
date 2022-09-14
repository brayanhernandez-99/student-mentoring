<?php 

include 'conexion.php';
// este cdoigo conecta a la base de datos
// $conectarbd= new mysqli('localhost', 'root', '', 'proyecto')
//  or die("Error al conectarse con la base de datos");

$ISBN=$_POST['ISBN'];
$editorial=$_POST['editorial'];
$edicion=$_POST['edicion'];
$dewey=$_POST['dewey'];
$titulo=$_POST['titulo'];
$subtitulo=$_POST['subtitulo'];
$autor=$_POST['autor'];
$serie=$_POST['serie'];
 // se crearon las variables $ (]los nonbre de los input en el formulario
  // md5 es para encriptar la clave

$guardar=$conectarbd->query("INSERT INTO libros (ISBN, editorial, edicion, dewey, titulo, subtitulo, autor, serie)
	VALUES ('$ISBN' , '$editorial' , '$edicion' , '$dewey' , '$titulo' , '$subtitulo' , '$autor' , '$serie')");
     // guardar datos en la tabla persona.

if ($guardar){ 
echo '<script type="text/javascript">alert("Registro Exitoso");</script>'; 
header( "refresh:1; url=registrarse.php" );
}

 else{
      echo '<script type="text/javascript">alert("Error al guardar");</script>';
 }
 ?>