<?php
   //include("../bd/conectar.php");
	/*<®> Verifico las variables del usuario <®>*/
  	if(!(
      isset($_POST['usuario'], $_POST['pass'])
      and
      $_POST['usuario'] != ''
      and
      $_POST['pass'] != ''
      )){
        /*ERROR*/
        $msj = 'El usuario o la contraseña no son correctos.';
        msj($msj, 'Err Login', '../index.php?error=1');
    }else{
      /*<®> Cargo las variables de usuario <®>*/
        $usuario = $_POST['usuario']; 
    		$pass    = $_POST['pass'];
      /*<®> Armo la string de la consulta SQL <®>*/
        $sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND pass = '$pass'";
      /*<®> Ejecuto la consulta SQL <®>*/
      	if(!$rs = (mysql_query($sql, conexion()))){
      		/*ERROR*/
          $msj = 'No se pudo relizar la consulta SQL '.$sql.'</em></strong>';
          msj($msj, 'Err Conexion', '../index.php?error=1');
        }elseif (mysql_num_rows($rs) != 1) {
          /*ERROR*/
          $msj = 'No se pudo determinar el usuario o la contraseña en la BD.';
          msj($msj, 'Err Login', '../index.php?error=1');
      	}else{
    			session_start();
    			$fila                = mysql_fetch_array($rs);
    			$_SESSION["id"]      = $fila['id'];
    			$_SESSION["usuario"] = $fila['usuario'];
          //var_dump($_SESSION["usuario"], $fila['usuario']);
          //exit;

    			$_SESSION["tipo"]    = $fila['tipo'];
    			/*if($fila['tipo']=="admin")
    				header("location:index2.php");*/
    			if($fila['pass'] == "a"){
            /* Inicio por 1º vez */
            $msj = 'Como es la primera vez que inicia su seción es nesesario que cambie su contraseña.';
            msj($msj, 'Login 1raVez', '../pags/cambiopass.php');
    			}else
    				header("location:index2.php");
      	}
    }
 ?>
