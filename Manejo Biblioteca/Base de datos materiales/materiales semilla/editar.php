<?php 
include 'conexion.php';
$ISBNISSN=$_POST['ISBNISSN'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$edicion=$_POST['edicion'];
$ciudad=$_POST['ciudad'];
$añopublicacion=$_POST['añopublicacion'];
$numeropagina=$_POST['numeropagina'];
$serie=$_POST['serie'];
$notageneral=$_POST['notageneral'];
$materia=$_POST['materia'];
$coautores=$_POST['coautores'];
$vol=$_POST['vol'];
$biblioteca=$_POST['biblioteca'];
$coleccion=$_POST['coleccion'];
$verificar=$_POST['verificar'];
$ubicacion=$_POST['ubicacion'];
$unidades=$_POST['unidades'];

$editar=$conectarbd->query("UPDATE semilla set titulo='$titulo', autor='$autor', edicion='$edicion', ciudad='$ciudad', añopublicacion='$añopublicacion', numeropagina='$numeropagina', serie='$serie', notageneral='$notageneral', materia='$materia', coautores='$coautores', vol='$vol', biblioteca='$biblioteca', coleccion='$coleccion',  verificar='$verificar', ubicacion='$ubicacion',  unidades='$unidades'  where ISBNISSN='$ISBNISSN'");

if ($editar){
    echo '<script type="text/javascript">alert("Actualizado");</script>'; 
    header( "refresh:0; url=master.php" );
   }
 ?>