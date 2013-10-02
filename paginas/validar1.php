<?php
   include("conectar.php");
       
	  $usuario = $_POST['usuario']; 
  	  $pass    = $_POST['pass'];

   // se genera la consulta SQL
      $sql = "select * from usuarios where usuario ='$usuario' and pass = '$pass'";
	  	$resultado =(mysql_query($sql,$conexion_mysql));
	  if(mysql_num_rows($resultado) == 1)
	  	{
			session_start();
			$_SESSION["usuario"]=$usuario;
			$fila=mysql_fetch_array($resultado);
			$_SESSION["tipo"]=$fila['tipo'];
			$_SESSION["id"]=$fila['id'];
			/*if($fila['tipo']=="admin")
				header("location:index2.php");*/
			if($fila['pass']=="a")
				header("location:cambiopass.php");
				else
					header("location:index2.php");
		}
		else
			header("location:index.php?error=1");
		
                           
     // se ejecuta la consulta SQL
     if (mysql_query($sql, $conexion_mysql))
         echo "HUBO UN ERROR EN LA MODIFICACION INTENTE NUEVAMENTE:"	 
   
 ?>
