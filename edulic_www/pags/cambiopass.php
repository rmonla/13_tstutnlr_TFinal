<html>
    <head>
        <title>
            EduLiq - Cambio de Password
        </title>
        <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
    </head>
    <body bgcolor="#FFFFFF">
        <?php
          
          var_dump($_SESSION["usuario"]);
          exit;
          $usuario = $_SESSION["usuario"];
          
          //include("../bd/conectar.php");
          
          $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
          if(mysql_query($sql,$_SESSION['conexion']))
            $resultado = (mysql_query($sql,$_SESSION['conexion']));
            else
              echo "ERROR NO SE PUDO CONECTAR CON LA BASE DE DATOS";
          $fila = (mysql_fetch_array($resultado));  
        ?>
        <div align="center">
            <br>
            <br>
            <br>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="75%">
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
                                EduLiq - Cambio de Password
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
                        <div align="center"></div>
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
                    <div align="center">
                        <p>
                            <br>
                            <br>
                            <span class="Estilo8">¡¡¡ ADVERTENCIA !!!</span>
                        </p>
                        <p>
                            <span class="Estilo5">El Password debe ser de nueve (9) caracteres alfanumericos como maximo</span><br>
                            <br>
                            <br>
                            <br>
                        </p>
                    </div>
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
                                    <form name="session" method="post" action="cambiopass2.php">
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
                                <input name="usuario" type="text" size="30" value="<?php echo $_SESSION["usuario"]; ?>">
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
                                <input name="pass" type="password" size="30"> <input name="id" type="hidden" size="30" value="&lt;? echo $fila['id'];?&gt;"> <input name="tipo" type="hidden" size="30" value="&lt;? echo $fila['tipo'];?&gt;">
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
                                    <label><input name="Submit" type="submit" class="Estilo4" value="CAMBIAR PASSWORD"></label>
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
                        <img src="image/LOGO%20MISTERIO%20DE%20EDUC4x4.jpg" width="283" height="291"><br>
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