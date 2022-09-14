<!DOCTYPE html>
<htel lang="en">
        <head> 
  	     <meta charset="utf-8">
  	     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"> 
  	     <link rel="stylesheet" type="text/css" href="css/menu.css">
  	     <link rel="stylesheet" type="text/css" href="css/STYLE.CSS">
         <link rel="icon"  href="img/Will Graham.ico">
  	   <title>Registrarse</title> 
  	 </head>
  	 <body background="img/mbr-1467x978.jpg">
  	   <div class="login-page">
  	     <div class="form">
  	       <h2 class="titulo3">Registrarse</h2>
  	         <form class="login-form" action="guardar_registrarse.php" method="POST">

  	            <input type="text" placeholder="identificacion" name="identificacion" class="campoentrada" required>
  	            <input type="Text" placeholder="Nombre" name="nombre" class="campoentrada" required>
  	            <input type="text" placeholder="apellido" name="apellido" class="campoentrada" required>
                <input type="Text" placeholder="telefono" name="telefono" class="campoentrada" required>
				<input type="email" placeholder="email" name="email" class="campoentrada" required>
				<input type="password" placeholder="contraseña" name="contraseña" class="campoentrada" required>
				<label for="grados" class="campoentrada">
					grado
				</label>
				<select name="grado"  id="" name="grado"</select>
					<option>Prescolar(0º)</option>
					<option>1º</option>
					<option>2º</option>
					<option>3º</option>
					<option>4º</option>
					<option>5º</option>
					<option>6º</option>
					<option>7º</option>
					<option>8º</option>
					<option>9º</option>
					<option>10º</option>
					<option>11º</option>
					<option>Procesos basicos</option>
					<option>Aceleracion</option>
				</select>

				<label for="grados" class="campoentrada">
					grupo
				</label>

				<select name="grupo" id="" name="grupo">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
				</select>
				
                  <button type="submit" name="enviar" class="boton">Registrar </button>
              <p class="message">Ya estas Registrado? <a href="login.php">Iniciar</a></p>
            </form> 
          </div>
          </div>
  </body> 
  </html>