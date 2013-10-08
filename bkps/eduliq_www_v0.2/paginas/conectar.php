<?php
  // se iniciliza  las variables de conexion
  
  $mysql_host        = "localhost";
  $mysql_usuario     = "root";
  $mysql_contrasena  = "";
  $basedatos         = "sage_bd";
 

    // se conecta al motor de base de datos
    if (!($conexion_mysql = mysql_connect($mysql_host, $mysql_usuario,$mysql_contrasena)))
    {
       echo "no se pudo conectar";
       exit;
 
    }

  // se elecciona la base de datos
  if (!mysql_select_db($basedatos, $conexion_mysql))
    {
     echo "no se selecciono base da datos";
     exit;

    }
?>