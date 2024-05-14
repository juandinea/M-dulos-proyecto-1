
<?php
    session_start();
	include('conexion.php');
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
    //Sentencia SQL para buscar un usuario con esos datos//
	
$sql = "SELECT usuario, contrasena FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";

/* Consultas de selección que devuelven un conjunto de resultados */
$resultado = $conexion->query($sql);

if ($resultado->num_rows>0){ 
    $_SESSION['usuario']=$usuario; 
   $_SESSION['contrasena']=$contrasena;
	 echo "Inicio de sesion existosa.<a href='inicio.html'>Inicio</a>"; 
}
else {
	echo "usuario o contraseña incorrectos.<a href='registrarse.php'>registrarse</a>";		
	}
	if (empty($_POST['usuario']) || empty($_POST['contrasena'])) ;
 $conexion->close();
	   
?>	







