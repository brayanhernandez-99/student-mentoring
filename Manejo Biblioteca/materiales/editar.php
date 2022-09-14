<?php 
include 'conexion.php';
$ISBNISSN=$_POST['ISBNISSN'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$nombreinstitucion=$_POST['nombreinstitucion'];
$nombreconferencia=$_POST['nombreconferencia'];
$edicion=$_POST['edicion'];
$ciudad=$_POST['ciudad'];
$editorial=$_POST['editorial'];
$añopublicacion=$_POST['añopublicacion']
$numeropagina=$_POST['numeropagina']
$serie=$_POST['serie']
$notageneral=$_POST['notageneral']
$materia=$_POST['materia']
$coautores=$_POST['coautores']
$vol=$_POST['vol']
$biblioteca=$_POST['biblioteca']
$coleccion=$_POST['coleccion']
$tipomaterial=$_POST['tipomaterial']
$ubicacion=$_POST['ubicacion']
$fila=$_POST['fila']
$puesto=$_POST['puesto']
$cantidad=$_POST['cantidad']
$rotulo=$_POST['rotulo']

$editar=$conectarbd->query("UPDATE inventario set  titulo='$titulo', autor='$autor', nombreinstitucion='$nombreinstitucion', nombreconferencia='$nombreconferencia', edicion='$edicion', ciudad='$ciudad', editorial='$editorial', añopublicacion='$añopublicacion', numeropagina='$numeropagina', serie='$serie', notageneral='$notageneral', materia='$materia', coautores='$coautores', vol='$vol', biblioteca='$biblioteca', coleccion='$coleccion', tipomaterial='$tipomaterial', ubicacion='$ubicacion', fila='$fila', puesto='$puesto', cantidad='$cantidad', rotulo='$rotulo' where ISBNISSN='$ISBNISSN'");

if ($editar){
    echo '<script type="text/javascript">alert("Actualizado");</script>'; 
    header( "refresh:0; url=master.php" );
   }
 ?>