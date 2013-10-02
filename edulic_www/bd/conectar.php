<?php
  /* Inicilizo  las variables de conexion */
    $mysql_host       = "localhost";
    $mysql_usuario    = "root";
    $mysql_contrasena = "";
    $basedatos        = "sage_bd";
  /* Conecto al motor de base de datos */
    if (!($conexion_mysql = mysql_connect($mysql_host, $mysql_usuario,$mysql_contrasena))){
      /*ERROR*/
      $msj = 'No se pudo establecer la conexión con la BD.';
      echo $msj;
      exit;
    }
  /* Selecciono la base de datos */
    if (!mysql_select_db($basedatos, $conexion_mysql)){
      /*ERROR*/
      $msj = 'No se pudo seleccionar la BD.';
      echo $msj;
      exit;
    }
?>