<?php 
include 'conexion.php';
$ISBN=$_POST['ISBN'];
$editorial=$_POST['editorial'];
$edicion=$_POST['edicion'];
$dewey=$_POST['dewey'];
$titulo=$_POST['titulo'];
$subtitulo=$_POST['subtitulo'];
$autor=$_POST['autor'];
$serie=$_POST['serie'];

$editar=$conectarbd->query("UPDATE libros set editorial='$editorial', edicion='$edicion', dewey='$dewey', titulo='$titulo', subtitulo='$subtitulo', autor='$autor', serie='$serie' where ISBN='$ISBN'");

if ($editar){
    echo '<script type="text/javascript">alert("Actualizado");</script>'; 
    header( "refresh:0; url=master.php" );
   }
 ?>