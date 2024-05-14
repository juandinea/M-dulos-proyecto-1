<?php
//configuracion a la base de datos
$conexion=new mysqli("localhost","root","","inicio");

// obtener los datos de registrarse
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

//Preparar la consulta sql para insertar los datos en la base de datos
$sql=" INSERT INTO usuario (usuario,contrasena) VALUES ('$usuario','$contrasena')";

//ejecutar la consulta
if ($conexion->query($sql)===TRUE){
	echo "Registro exitoso.<a href='index.html'>Iniciar sesion</a>";
   }
   else {
    echo "Usuario o contraseña incorrectos.<a href='registrarse.php'>registrarse</a>";
	}
//cerrar la conexion
$conexion->close();
?>