<?php
include 'conexion.php';
 
 $id = $_GET['ISBN'];

 $sql = "select * FROM libros WHERE ISBN = '$id'";
 $resultado = $conectarbd->query($sql);

 if ($resultado){
	  $datos=$resultado->fetch_object();
	  $ISBN=$datos->ISBN;
	  $editorial=$datos->editorial;
	  $edicion=$datos->edicion;
	  $dewey=$datos->dewey;
	  $titulo=$datos->titulo;
	  $subtitulo=$datos->subtitulo;
	  $autor=$datos->autor;
	  $serie=$datos->serie;
	  

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

  	            <input type="text"  value="<?php echo $ISBN;?>" readonly placeholder="ISBN" name="ISBN" class="campoentrada">
  	            <input type="Text"  value="<?php echo $editorial;?>" placeholder="Editorial" name="Editorial" class="campoentrada">
  	            <input type="text"  value="<?php echo $edicion;?>" placeholder="Edición" name="edicion" class="campoentrada">
                <input type="Text"  value="<?php echo $dewey;?>" placeholder="Dewey" name="dewey" class="campoentrada">
				<input type="text" value="<?php echo $titulo;?>" placeholder="Título" name="titulo" class="campoentrada">
				<input type="text" value="<?php echo $subtitulo;?>" placeholder="Subtitulo" name="subtitulo" class="campoentrada">
				<input type="text"  value="<?php echo $autor;?>" readonly placeholder="Autor" name="autor" class="campoentrada">
				<input type="text"  value="<?php echo $serie;?>" readonly placeholder="SERIE" name="serie" class="campoentrada">
                 
                 
   
                  <button type="submit" name="enviar" class="boton">Actualizar </button>
            
            </form> 
          </div>
          </div>
  </body> 
  </html>