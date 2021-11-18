
<!DOCTYPE html>
<html>
<head>
	<title> Practica con un Ajax </title>

	 <!--Importo el link del Query -->
    <script 
		  src="https://code.jquery.com/jquery-3.6.0.min.js"
		  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		  crossorigin="anonymous">
    </script>
     
    <!--Aca estoy importando mi archivo donde se encuentra el jQuery-->
    <script src="Js/val.js"></script>
    

    <style type="text/css"> form{margin-top: 50px;}</style>
</head>
<body>  

<!---LISTO LOS USUARIOS-->

<table border="1">    

	<tr> <!--Fila-->
		<th>ID</th>
		<th>NOMBRE</th>
	    <th>CELULAR</th>
	    <th>ACTION</th>
	</tr>
     
<?php 
    
    //Listando unos datos
    include 'conexion.php';
     
    $sql =  " SELECT * FROM `cliente` ";
    $guardoConsulta = mysqli_query($db, $sql);

	     while ( $filas = mysqli_fetch_array($guardoConsulta) ) 
	     { ?>          
	           <tr id="fila<?php  echo $filas['Id']; ?>"> 
	              <td> <?php  echo $filas['Id']; ?> </td>    
	              <td> <?php  echo $filas['Nombre']; ?> </td>  
	              <td> <?php  echo $filas['Celular']; ?> </td>     
	              <!--elimininarUsuario.php?id=<?php echo $filas['Id']; ?> -->
	              <td> <a class="pregunta" data-id="<?php  echo $filas['Id']; ?>" href="#">Eliminar</a></td>

	           </tr>
          <?php } ?> <!--While-->
         
</table>


</body>
</html>