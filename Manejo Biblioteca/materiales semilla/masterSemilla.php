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


	$sentencia_select=$conectarbd->query('SELECT * FROM libros ORDER BY ISBN');
	/*$sentencia_select->execute();*/
	$resultado=$sentencia_select;

		// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$conectarbd->query("
			SELECT * FROM materiales WHERE titulo LIKE '%$buscar_text%' OR ISBN LIKE '%$buscar_text%' OR autor LIKE '%$buscar_text%' OR serie LIKE '%$buscar_text%'");

		$resultado=$select_buscar;

	}

?>
<?php 

    $usuario_conectado="prueba";
  
    $buscar=$conectarbd->query("SELECT * from libros where ISBN='$usuario_conectado' ");
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
				<td>ISBN</td>
				<td>editorial</td>
				<td>edicion</td>
				<td>codigo_dewey</td>
				<td>titulo</td>
				<td>subtitulo</td>
				<td>autor</td>
				<td>serie</td>
				
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					
					<td><?php echo $fila['ISBN']; ?></td>
					<td><?php echo $fila['editorial']; ?></td>
					<td><?php echo $fila['edicion']; ?></td>
					<td><?php echo $fila['dewey']; ?></td>
					<td><?php echo $fila['titulo']; ?></td>
					<td><?php echo $fila['subtitulo']; ?></td>
					<td><?php echo $fila['autor']; ?></td>
					<td><?php echo $fila['serie']; ?></td>
					
					<td><a href="actualizar.php?ISBN=<?php echo $fila['ISBN']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="eliminar.php?ISBN=<?php echo $fila['ISBN']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>