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


	$sentencia_select=$conectarbd->query('SELECT * FROM usuarios ORDER BY identificacion');
	/*$sentencia_select->execute();*/
	$resultado=$sentencia_select;

		// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$conectarbd->query("
			SELECT * FROM usuarios WHERE nombre LIKE '%$buscar_text%' OR identificacion LIKE '%$buscar_text%'");

		$resultado=$select_buscar;

	}

?>
<?php 
    $usuario_conectado="prueba";
  
    $buscar=$conectarbd->query("SELECT * from usuarios where identificacion='$usuario_conectado' ");
    while ($fila=mysqli_fetch_array($buscar)){
        $nombre=$fila['nombre'];
        
    }
 ?>     

 <!-- <h3>Hola, <?php echo "$nombre"; ?></h3> 
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
		<h2>GESTION DE REGISTROS DE USUARIOS</h2>
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
				<td>identificacion</td>
				<td>nombre</td>
				<td>apellido</td>
				<td>telefono</td>
				<td>email</td>
				<td>grado</td>
				<td>grupo</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					
					<td><?php echo $fila['identificacion']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellido']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['email']; ?></td>
					<td><?php echo $fila['grado']; ?></td>
					<td><?php echo $fila['grupo']; ?></td>
					<td><a href="actualizar.php?identificacion=<?php echo $fila['identificacion']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="eliminar.php?identificacion=<?php echo $fila['identificacion']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>