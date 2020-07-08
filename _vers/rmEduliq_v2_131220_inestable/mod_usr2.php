<?php
   	include_once 'main/fxs.php';
       
	//var_dump($_POST);
	//exit;
	
	$id         = $_POST['id']; 
  	$perfil     = $_POST['idperfil'];
    $usr	    = $_POST['usr'];
	$pass	    = md5($_POST['pass']);
	$nomb       = $_POST['nomb'];
	$ape        = $_POST['ape'];
	$docu		= $_POST['dni'];
	$dire       = $_POST['dire'];
	$tel        = $_POST['tel'];
	$mail       = $_POST['mail'];
	$estado     = $_POST['estado'];
	var_dump($estado);

   // se genera la consulta SQL
      $sql = "UPDATE usuarios SET idperfil = '$perfil',
	  							  usr      = '$usr',
								  pass	   = '$pass',
								  nomb	   = '$nomb',
								  ape	   = '$ape',
								  docu	   = '$docu',	
								  dir	   = '$dire',
								  tel      = '$tel',
								  email	   = '$mail',
								  idusr_estado   = '$estado'
								  
								  WHERE id='$id'";
								  
								  
			var_dump($sql);
	//var_dump($sql);
	//exit;
                           
     // se ejecuta la consulta SQL
	 if(ejecutar($sql))
		header("location:usuarios.php");
		else
	   		echo "HUBO UN ERROR EN LA CARGA INTENTE NUEVAMENTE:"
 ?>
