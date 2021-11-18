

<?php

//Errores en True
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);

//conexión 

$servidor = 'localhost';
$usuario = 'root'; 
$password = '';
$database = 'usuario';

$db = mysqli_connect($servidor, $usuario, $password, $database);

/*para que los nombre que traigo de la base 
vengan con ñ y con tildes (en español)*/
mysqli_query($db, "SET NAMES 'utf8'");  


?>  