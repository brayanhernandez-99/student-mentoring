<?php
	include'conexion.php';
	// include'sesion.php';
	/*include_once 'conexion.php';*/
  
	//session_star();
//$usuario_conectado['usuario'];
// if ($usuario_conectado==null || $usuario_conectado=''){
// 	echo 'Ningun usuario ha iniciado sesion';
// 	die();
// }


	$sentencia_select=$conectarbd->query('SELECT * FROM semilla ORDER BY ISBNISSN');
	/*$sentencia_select->execute();*/
	$resultado=$sentencia_select;

		// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$conectarbd->query("
			SELECT * FROM materiales WHERE titulo LIKE '%$buscar_text%' OR ISBNISSN LIKE '%$buscar_text%' OR autor LIKE '%$buscar_text%' OR biblioteca LIKE '%$buscar_text%'");

		$resultado=$select_buscar;

	}

?>
<?php 

    $usuario_conectado="prueba";
  
    $buscar=$conectarbd->query("SELECT * from semilla where ISBNISSN='$usuario_conectado' ");
    while ($fila=mysqli_fetch_array($buscar)){
        $titulo=$fila['titulo'];
        
    }
 ?>     

 <!-- <h3>Hola, <?php echo "$titulo"; ?></h3> 
  -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/estilo.css">
	
</head>
<body>
	<div class="contenedor">
		<h2>GESTION DE REGISTROS DE MATERIALES</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="buscar nombre o documento" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="registrarse.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table>
			<tr class="head">
			<td>ISBNISSN</td>
				<td>titulo</td>
				<td>autor</td>
				<td>edicion</td>
				<td>ciudad</td>
				<td>añopublicacion</td>
				<td>numeropagina</td>
				<td>serie</td>
				<td>notageneral</td>
				<td>materia</td>
				<td>coautores</td>
				<td>vol</td>
				<td>biblioteca</td>
				<td>coleccion</td>
				<td>verificar</td>
				<td>ubicacion</td>
				<td>rotulo</td>
				<td>unidades</td>
				
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					
				<td><?php echo $fila['ISBNISSN']; ?></td>
					<td><?php echo $fila['titulo']; ?></td>
					<td><?php echo $fila['autor']; ?></td>
					<td><?php echo $fila['edicion']; ?></td>
					<td><?php echo $fila['ciudad']; ?></td>
					<td><?php echo $fila['añopublicacion']; ?></td>
					<td><?php echo $fila['numeropagina']; ?></td>
					<td><?php echo $fila['serie']; ?></td>
					<td><?php echo $fila['notageneral']; ?></td>
					<td><?php echo $fila['materia']; ?></td>
					<td><?php echo $fila['coautores']; ?></td>
					<td><?php echo $fila['vol']; ?></td>
					<td><?php echo $fila['biblioteca']; ?></td>
					<td><?php echo $fila['coleccion']; ?></td>
					<td><?php echo $fila['verificar']; ?></td>
					<td><?php echo $fila['ubicacion']; ?></td>
					<td><?php echo $fila['rotulo']; ?></td>
					<td><?php echo $fila['unidades']; ?></td>
					
					<td><a href="actualizar.php?ISBN=<?php echo $fila['ISBNISSN']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="eliminar.php?ISBN=<?php echo $fila['ISBNISSN']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>