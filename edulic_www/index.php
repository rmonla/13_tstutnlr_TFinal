<?php
	if(isset($_POST['login'])){
  	include 'main/fxs.php';
 	/*<®> Verifico las variables del usuario <®>*/
 		if( isset($_POST['usuario'], $_POST['pass'])
				and $_POST['usuario'] != ''
				and $_POST['pass'] != ''
			){
			/*<®> Cargo las variables de usuario <®>*/
				$usuario = $_POST['usuario']; 
				$pass    = $_POST['pass'];
			/*<®> Armo la string de la consulta SQL <®>*/
				$sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND pass = '$pass'";
			/*<®> Ejecuto la consulta SQL <®>*/
				$rs = ejecutar($sql);
				//var_dump($usuario, $pass, $rs);
				//exit;
				if(mysql_num_rows($rs) != 1) {
					/*Error en el nombre de usuario o la contraseña*/
					$msj = 'No se pudo determinar el usuario o la contraseña en la BD.';
					//msj($msj, 'Err Login', '../index.php');
					msj($msj, 'Err Login');
				} else {
					session_start();
					$fila                = mysql_fetch_array($rs);
					$_SESSION["id"]      = $fila['id'];
					$_SESSION["usuario"] = $fila['usuario'];
					$_SESSION["tipo"]    = $fila['tipo'];
					/*if($fila['tipo']=="admin")
						header("location:index2.php");*/
					if ($fila['pass'] == "a"){
						/* Inicio por 1º vez */
						$msj = 'Como es la primera vez que inicia su seción es nesesario que cambie su contraseña.';
						msj($msj, 'Login 1raVez', 'pags/cambiopass.php');
					} else {
						/* Login normal */
						$msj = 'Bienvenido al sistema <br>'.$fila['nomb'].' '.$fila['ape'];
						msj($msj, 'Login Normal', '../pags/index2.php');
					}
				}
		} else {
			/*ERROR*/
			$msj = 'El usuario o la contraseña no son correctos.';
			msj($msj, 'Login Err ', '');
		}
	}
?>

<html>
    <head>
        <title>
            EduLiq - La Rioja
        </title>
        <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body bgcolor="#FFFFFF">
        <div align="center">
            <br>
            <br>
            <br>
            <?php
              $error="";
              $msj="";
              if(isset($_GET['error']) and ($_GET['error']==1))
                  $msj = "*-USUARIO O CLAVE INCORRECTA INTENTE NUEVAMENTE-*";
                  else
                    if(isset($_GET['error']) and ($_GET['error']==2))
                      $msj = "ACCESO RESTRINGIDO - CONSULTE CON EL ADMINISTRADOR DEL SITIO!";
              if(isset($_GET['ok']) and ($_GET['ok']==1))
                $msj = "CAMBIO DE PASSWORD REALIZADO - INGRESE NUEVAMENTE";

            ?>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="74%">
                <tr>
                    <td width="2%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                    <td width="3%">&nbsp;</td>
                    <td bgcolor="#82A85E" width="2%">&nbsp;</td>
                    <td width="5%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                    <td bgcolor="#FF0000" width="2%">&nbsp;</td>
                    <td width="11%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                    <td width="5%">&nbsp;</td>
                    <td bgcolor="#0000FF" width="2%">&nbsp;</td>
                    <td width="7%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                    <td width="16%">&nbsp;</td>
                    <td bgcolor="#82A85E" width="2%">&nbsp;</td>
                    <td width="12%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                    <td width="16%">&nbsp;</td>
                    <td bgcolor="#82A85E" width="3%">&nbsp;</td>
                </tr>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" width="75%">
                <tr>
                    <td bgcolor="#82A85E" height="13" rowspan="2" width="18%">&nbsp;</td>
                    <td bgcolor="#FF0000" rowspan="2" width="9%">&nbsp;</td>
                    <td bgcolor="#0000FF" height="13" rowspan="2" width="15%">&nbsp;</td>
                    <td bgcolor="#FF0000" height="13" rowspan="2" width="14%">&nbsp;</td>
                    <td bgcolor="#82A85E" height="13" rowspan="2" width="44%">&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" width="75%">
                <tr>
                    <td height="50">
                        <div align="center" class="CompanyName">
                            <div align="center" class="Estilo4">
                                Login - EduLiq
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td bgcolor="#FFCC00" height="1">
                                    <div align="center">
                                        <img height="1" src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width="1">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="12">
                        <div align="center" class="Estilo5">
                            <? echo $msj;?>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div align="left">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td bgcolor="#FFCC00" height="2">
                                        <div align="center">
                                            <img height="1" src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width="1">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="75%">
            <tr>
                <td width="316" height="393" align="center" valign="middle">
                    <br>
                    <img src="image/login_img.gif" width="332" height="352">
                </td>
                <td height="393" valign="top" width="354">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td>
                                <div align="center"></div>
                            </td>
                        </tr>
                    </table>
                    <table width="101%" height="173" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                        <tr>
                            <th></th>
                        </tr>
                        <tr bgcolor="#F0F0F0">
                            <th colspan="2" bgcolor="#FFCC00" bordercolor="3">
                                <div align="center">
                                  <!-- FORM -->
                                    <form name="session" method="post" action="index.php">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th bordercolor="3" bgcolor="#66AADD">
                                <div align="right">
                                    <span class="Estilo1">USUARRIO:</span>
                                </div>
                            </th>
                            <td width="50%" bordercolor="3" bgcolor="#FFFF66">
                                <input name="usuario" type="text" size="30">
                            </td>
                        </tr>
                        <tr>
                            <th bordercolor="3" bgcolor="#FFFFFF"></th>
                        </tr>
                        <tr bgcolor="#F0F0F0">
                            <th colspan="2" bgcolor="#FFCC00" bordercolor="3">
                                <div align="right">
                                    <span class="Estilo3">PASSWORD:</span>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th bordercolor="3" bgcolor="#66AADD">
                                <div align="right">
                                    <span class="Estilo1">PASSWORD:</span>
                                </div>
                            </th>
                            <td width="50%" bordercolor="3" bgcolor="#FFFF66">
                                <input name="pass" type="password" size="30">
                            </td>
                        </tr>
                        <tr bgcolor="#F0F0F0">
                            <th height="25" colspan="2" bordercolor="3" bgcolor="#FFCC00">
                                <div align="center"></div>
                            </th>
                        </tr>
                        <tr bgcolor="#F0F0F0">
                            <th colspan="2" bgcolor="#FFCC00" bordercolor="3">
                                <div align="center">
                                    <label>
                                        <input name="login" type="submit" class="Estilo5" value="LOGUEARSE">
                                      </label>
                                      <?php unset($_POST['login']) ?>
                                </div>
                            </th>
                        </tr>
                        <tr bgcolor="#F0F0F0">
                            <th height="25" colspan="2" bordercolor="3" bgcolor="#FFCC00">
                                <div align="center"></div>
                            </th>
                        </tr>
                    </table>
                </td>
                <td width="187" height="393" align="center" valign="middle" bgcolor="#FFFFFF">
                    <div align="center">
                        <img src="image/logo_min_edu.jpg" width="283" height="291"><br>
                    </div>
                </td>
            </tr>
            <tr valign="top">
                <td colspan="4">
                    <div align="right">
                        <table border="0" cellpadding="0" cellspacing="0" width="80%">
                            <tr bgcolor="#FFCF00">
                                <td height="1">
                                    <div align="right">
                                        <img height="1" src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width="1">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" width="90%">
                            <tr bgcolor="#949231">
                                <td height="2">
                                    <div align="right">
                                        <img height="1" src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width="1">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div align="center">
                            <font color="#3169A5" face="Arial, Helvetica, sans-serif" size="2"><strong>Copyright 2013. Gaston Francisco Cipolatti. Todos los Derechos Reservados</strong>.</font>
                        </div>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr bgcolor="#006500">
                                <td height="3">
                                    <div align="right">
                                        <img height="1" src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width="1">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>