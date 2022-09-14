<?php
include 'conexion.php';
 
 $id = $_GET['identificacion'];

 $sql = "select * FROM usuarios WHERE identificacion = '$id'";
 $resultado = $conectarbd->query($sql);

 if ($resultado){
	  $datos=$resultado->fetch_object();
	  $identificacion=$datos->identificacion;
	  $nombre=$datos->nombre;
	  $apellido=$datos->apellido;
	  $telefono=$datos->telefono;
	  $email=$datos->email;
	  $grado=$datos->grado;
	  $grupo=$datos->grupo;

    }
?>











 <!DOCTYPE html>
<htel lang="en">
        <head> 
  	     <meta charset="utf-8">
  	     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"> 
		 <link rel="stylesheet" type="text/css" href="actualizar.css">
  	     <link rel="stylesheet" type="text/css" href="css/menu.css">
  	     <link rel="stylesheet" type="text/css" href="css/STYLE.CSS"> 
         <link rel="icon"  href="img/Will Graham.ico">
		 
  	   <title>Actualizar</title> 
  	 </head>
  	 <body background="img/mbr-1467x978.jpg">
  	   <div class="login-page">
  	     <div class="form">
  	       <h2 class="titulo3">Actualización</h2>
  	         <form class="login-form" action="editar.php" method="POST">

  	            <input type="text"  value="<?php echo $identificacion;?>" readonly placeholder="Identificacion" name="identificacion" class="campoentrada">
  	            <input type="Text"  value="<?php echo $nombre;?>" placeholder="Nombres" name="nombre" class="campoentrada">
  	            <input type="text"  value="<?php echo $apellido;?>" placeholder="Apellidos" name="apellido" class="campoentrada">
                <input type="Text"  value="<?php echo $telefono;?>" placeholder="telefono" name="telefono" class="campoentrada">
				<input type="email" value="<?php echo $email;?>" placeholder="Email" name="email" class="campoentrada">
				<input type="text" value="<?php echo $grado;?>" placeholder="grado" name="grado" class="campoentrada">
				<input type="text" value="<?php echo $grupo;?>" placeholder="grupo" name="grupo" class="campoentrada">
                 
   
                  <button type="submit" name="enviar" class="boton">Actualizar </button>
            
            </form> 
          </div>
          </div>
  </body> 
  </html>