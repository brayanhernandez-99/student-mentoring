<?php 
    // este codigo conecta a la base de datos 
include 'conexion.php';

    $usuario=$_POST['usuario']; 
    $clave=$_POST['clave']; 

    $instructor=$conectarbd->query("SELECT * FROM personas where documento_persona='$usuario' and 
    clave_persona= '$clave' and rol_persona= '1' "); // se valida el usuario y la clave que ingreso el usuaurio, si son iguales a la base de datos. y se valida el rol el rol 1 es para instructor 
    $aprendiz=$conectarbd->query("SELECT * FROM personas where documento_persona='$usuario' and clave_persona ='$clave' and rol_persona= '2' "); // se valida el usuario y la clave que ingreso el usuaurio, si son iguales a la base de datos. y se valida el rol el rol 2 es para Aprendiz

    
    if ($fila=mysqli_fetch_array($aprendiz)) { 
    	session_start (); 
    	$_SESSION[ 'usuario']=$_POST['usuario']; 
    	header("location:paginausuario.php"); 
        //paginausuario.php se reemplaza por la pagina que queramos llamar en nuestro proyecto
    }
    elseif ($fila=mysqli_fetch_array($instructor)) { 
    	session_start(); 
    	$_SESSION[ 'usuario']=$_POST['usuario']; 
    	header ("location:master.php");
}
    else{ 
    	echo '<script type="text/javascript">alert("Error de usuario o contraseña");</script>'; 
    	 header( "refresh:1; url=login.php" );
    }
?>