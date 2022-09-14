<!DOCTYPE html>
<htel lang="en">
        <head> 
  	     <meta charset="utf-8">
  	     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"> 
  	     <link rel="stylesheet" type="text/css" href="css/menu.css">
  	     <link rel="stylesheet" type="text/css" href="css/STYLE.CSS">
         <link rel="icon"  href="img/Will Graham.ico">
  	   <title>REGISTRAR MATERIAL</title> 
  	 </head>
  	 <body background="img/mbr-1467x978.jpg">
  	   <div class="login-page">
  	     <div class="form">
  	       <h2 class="titulo3">MATERIALES</h2>
  	         <form class="login-form" action="guardar_registrarse.php" method="POST">

  	            <input type="text" placeholder="ISBN" name="ISBN" class="campoentrada" required>
				<input type="text" placeholder="Editorial" name="editorial" class="campoentrada" required>
				<input type="text" placeholder="Edición" name="edicion" class="campoentrada">
				<input type="text" placeholder="Dewey" name="dewey" class="campoentrada">
  	            <input type="text" placeholder="Título" name="titulo" class="campoentrada" required>
  	            <input type="text" placeholder="Subtitulo" name="subtitulo" class="campoentrada">
                <input type="text" placeholder="Autor" name="autor" class="campoentrada" required>
				<input type="text" placeholder="Serie" name="serie" class="campoentrada" require>
   
                  <button type="submit" name="enviar" class="boton"> GUARDAR</button>
              
            </form> 
          </div>
          </div>
  </body> 
  </html>