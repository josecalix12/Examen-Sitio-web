<?php
//conectamos a nuestra base de datos
$servidor="localhost";
$Usuario="root";
$contrasena="";
$database="sistemacalix";
$conexion=mysqli_connect($servidor,$Usuario,$contrasena,$database);
if(!$conexion){
	die("error al conectarse".mysqli_connect_error());
}
?>