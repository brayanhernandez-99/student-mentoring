<?php 

include 'conexion.php';
// este cdoigo conecta a la base de datos
// $conectarbd= new mysqli('localhost', 'root', '', 'proyecto')
//  or die("Error al conectarse con la base de datos");

$ISBNISSN=$_POST['ISBNISSN'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$nombreinstitucion=$_POST['nombreinstitucion'];
$nombreconferencia=$_POST['nombreconferencia'];
$edicion=$_POST['edicion'];
$ciudad=$_POST['ciudad'];
$editorial=$_POST['editorial'];
$añopublicacion=$_POST['añopublicacion'];
$numeropagina=$_POST['numeropagina'];
$serie=$_POST['serie'];
$notageneral=$_POST['notageneral'];
$materia=$_POST['materia'];
$coautores=$_POST['coautores'];
$vol=$_POST['vol'];
$biblioteca=$_POST['biblioteca'];
$coleccion=$_POST['coleccion'];
$tipomaterial=$_POST['tipomaterial'];
$ubicacion=$_POST['ubicacion'];
$fila=$_POST['fila'];
$puesto=$_POST['puesto'];
$cantidad=$_POST['cantidad'];
$rotulo=$_POST['rotulo'];
 // se crearon las variables $ (]los nonbre de los input en el formulario
  // md5 es para encriptar la clave

$guardar=$conectarbd->query("INSERT INTO inventario (ISBNISSN, titulo, autor, nombreinstitucion, nombreconferencia, edicion, ciudad, editorial, añopublicacion, numeropagina, serie, notageneral, materia, coautores, vol, biblioteca, coleccion, tipomaterial, ubicacion, fila, puesto, cantidad, rotulo)
	VALUES ('$ISBNISSN' , '$titulo' , '$autor' , '$nombreinstitucion' , '$nombreconferencia' , '$edicion' , '$ciudad' , '$editorial' , '$añopublicacion' , '$numeropagina' , '$serie' , '$notageneral' , '$materia' , '$coautores' , '$vol' , '$biblioteca' , '$coleccion' , '$tipomaterial' , '$ubicacion' , '$fila' , '$puesto' , '$cantidad' , '$rotulo')");
     // guardar datos en la tabla persona.

if ($guardar){ 
echo '<script type="text/javascript">alert("Registro Exitoso");</script>'; 
header( "refresh:1; url=registrarse.php" );
}

 else{
      echo '<script type="text/javascript">alert("Error al guardar");</script>';
 }
 ?>