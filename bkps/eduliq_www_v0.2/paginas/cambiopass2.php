<?php
   include("conectar.php");
       
	  $id       = $_POST['id']; 
  	  $pass    = $_POST['pass'];

   // se genera la consulta SQL
      $sql = "UPDATE usuarios SET pass='$pass' WHERE id='$id'";
                           
     // se ejecuta la consulta SQL
     if (mysql_query($sql, $conexion_mysql))
		  	header("location:index.php?ok=1");
     else
	    echo "HUBO UN ERROR EN LA MODIFICACION INTENTE NUEVAMENTE:"	 
   
 ?>
