<?php
   include_once 'main/fxs.php';
  
  	  $perfil     = $_POST['perfil'];
      $usr	   	  = $_POST['usr'];
	  $pass	      = md5($_POST['pass']);
	  $nomb    	  = $_POST['nomb'];
	  $ape        = $_POST['ape'];
	  $docu		  = $_POST['dni'];
	  $dire       = $_POST['dire'];
	  $tel        = $_POST['tel'];
	  $mail       = $_POST['mail'];
	  $estado     = $_POST['estado'];
   
   // se genera la consulta SQL
      $sql = "INSERT INTO usuarios (idperfil,usr,pass,nomb,ape,docu,dir,tel,email,idusr_estado)
                           VALUES ('$perfil','$usr','$pass','$nomb','$ape','$docu','$dire','$tel','$mail','$estado')";


	 // se ejecuta la consulta SQL
     if(ejecutar($sql))
		header("location:usuarios.php");
		else
	   		echo "HUBO UN ERROR EN LA CARGA INTENTE NUEVAMENTE:"	 
?>
