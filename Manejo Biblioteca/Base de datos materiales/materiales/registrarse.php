<!DOCTYPE html>
<htel lang="en">
        <head> 
  	     <meta charset="utf-8">
  	     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"> 
  	     <!-- <link rel="stylesheet" type="text/css" href="css/menu.css"> -->
  	     <link rel="stylesheet" type="text/css" href="css/STYLE.css">
         <link rel="icon"  href="img/Will Graham.ico">
  	   <title>REGISTRAR MATERIAL</title> 
  	 </head>
  	 <body background="img/mbr-1467x978.jpg">
  	   <div class="login-page">
  	     <div class="form">
  	       <h2 class="titulo3">MATERIALES</h2>
  	         <form class="login-form" action="guardar_registrarse.php" method="POST">

  	            <input type="text" placeholder="ISBN o ISSN" name="ISBNISSN" class="casillas" required> 
				<input type="text" placeholder="Titulo" name="titulo" class="casillas">
				<input type="text" placeholder="Autor" name="autor" class="casillas" required>
  	            <input type="text" placeholder="Edición" name="edicion" class="casillas">
                <input type="text" placeholder="Ciudad" name="ciudad" class="casillas">
				<input type="text" placeholder="Año de publicacion" name="añopublicacion" class="casillas">
				<input type="text" placeholder="Numero de páginas" name="numeropagina" class="casillas">
				<input type="text" placeholder="Serie" name="serie" class="casillas">
				<input type="text" placeholder="Nota general" name="notageneral" class="casillas">
				<input type="text" placeholder="Materia" name="materia" class="casillas">
				<input type="text" placeholder="Coautores" name="coautores" class="casillas">
				<input type="text" placeholder="Vol./Nro./Tomo/Ej." name="vol" class="casillas">
				<input type="text" placeholder="Biblioteca" name="biblioteca" class="casillas">
				<input type="text" placeholder="Colección" name="coleccion" class="casillas">
				<input type="text" placeholder="Ubicación" name="ubicacion" class="casillas">
				<input type="text" placeholder="Fila" name="fila" class="casillas">
				<input type="text" placeholder="Cantidad" name="cantidad" class="casillas">
				<input type="text" placeholder="Rotulo" name="rotulo" class="casillas">
   
                  <button type="submit" name="enviar" class="boton"> GUARDAR</button> <br><br><br>
				  <a href="masterInventario.php" class="boton" >REGRESAR</a>
				  
              
            </form> 
          </div>
          </div>
  </body> 
  </html>