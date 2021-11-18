<?php   
   
  include 'conexion.php';
   
  $id = $_GET['id'];
   
   $sql = "DELETE FROM `cliente` WHERE `Id` = $id "; // Elimino segun el id que me viene de la URL
   $consulta = mysqli_query($db, $sql);

	   if($consulta==true)
	   {
	      
	      //header('Location: http://localhost/Ajax1/index.php#'); 

	   }else
	   {
	     echo 'La consulta fallo';
	   }
	   
   mysql_close($db);

?>
