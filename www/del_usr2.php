<?php
   include_once 'main/fxs.php';
       
	//var_dump($_POST);
	//exit;
	      
	  $id        = $_POST['id']; 
  	 
   // se genera la consulta SQL
      
	  $sql = "DELETE FROM usuarios WHERE id='$id'";
                           
     // se ejecuta la consulta SQL
     if (ejecutar($sql))
          header("location:usuarios.php");
     else
	    echo "HUBO UN ERROR EN LA ELIMINACION INTENTE NUEVAMENTE:"	 
   
	 
    
 ?>
