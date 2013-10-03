<?php  
/*<®> fx conexion <®>*/
	/**
	 * Función que retorna la conexion de la BD.
	 */
function conexion(){
	/* Inicilizo  las variables de conexion */
		$mysql_host       = "localhost";
		$mysql_usuario    = "root";
		$mysql_contrasena = "";
		$basedatos        = "eduliq";
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
	return $conexion_mysql;
}
/*<®> fx ejecutar <®>*/
	/**
	 * Función que retorna registros desde una consulta SQL.
	 */
function ejecutar($sql){
	return mysql_query($sql, conexion());
}
/*<®> fx msj <®>*/
	/**
	 * Función que muestra un mensaje de error por pantalla.
	 */
function msj($msj = '', $tipo = 'ERROR', $retorno = ''){
	$msj = $tipo.': '.$msj;
	if($tipo != 'Err Conexión') logs($msj);
	header('Content-Type: text/html; charset=UTF-8');
	$elMsj = "<script type=\"text/javascript\" >
  	alert('$msj');
  	setTimeout(\"location.href='$retorno'\",0); 
	</script>";
	echo $elMsj;
}
/*<®> fx logs <®>*/
	/**
	 * Función que carga un log en la BD de un error o un insidente.
	 */
function logs($log = ''){
	$tabla = 'logs';
	$datos = array('log' => $log);
	sql_insert($tabla, $datos);
}
/*<®> fx sql_insert <®>*/
	/**
	 * Función que inserta un registro en una tabla.
	 */
function sql_insert($tabla, $datos){
  /*<®> Cargo los nombres tablas y columnas de la BD <®>*/
    $campos = array(
    						'logs' => array(
							    		'id',
							    		'log', 
							    		'fecha'
										)
							);
    
  /*<®> Construyo la consulta SQL <®>*/
    /*<®> Armo la string de los campos <®>*/
      if(!isset($campos[$tabla])){
      	/*ERROR*/
      	msj('La tabla <strong>'.$tabla.'</strong> no se encuentra en la BD', 'Err InsertInto');
      	return;
      }else{
	      switch ($tabla) {
	      	case 'logs':
	      		$i = 1;
	      		if(!isset($datos['fecha'])) $datos['fecha'] = date('Y-m-d H:i:s', time());
	      		break;
	      	
	      	default:
	      		$i = 0;
	      		break;
	      }
	      $sql_campos = '';
      	$sql_datos = '';
	      for ($i; $i < (count($campos[$tabla]))-1; $i++){ // El -1 es para el sin coma.
					$campo      = $campos[$tabla][$i];
					$sql_campos .= $campo.', ';
					$sql_datos  .= '\''.$datos[$campo].'\', ';
        }
				$campo      = $campos[$tabla][$i];
	      $sql_campos.= $campo; // <-- Este sin coma.
				$sql_datos  .= '\''.$datos[$campo].'\'';
      }
    /*<®> Armo la string de la consulta <®>*/
      $sql = 'INSERT INTO '.$tabla.' ( '.$sql_campos.' ) VALUES ( '.$sql_datos.')';
      //var_dump($sql);
      //exit;
  /*Ejecuto la consulta SQL*/
     if (!mysql_query($sql, conexion())){
      /*ERROR*/
    	msj('No se pudo insertar el registro en la BD <strong>'.var_dump($datos).'</strong>', 'Err InsertInto');
    	return;
    }      
}
/*<®> fx cargarColumnasDeTabla <®>*/
	/**
	 * Función que carga los encavezados de columnas de una tabla dada de la BD.
	 */
function cargarColumnasDeTabla($tbl){
	$sql = "SHOW FIELDS FROM $tbl";
	$rs = ejecutar($sql);
	return $rs;
}
function mostrarDBF($archivo, $desde ='0', $hasta = '0'){
	include_once 'dbf_class/dbf_class.php';
	
	$file     = $archivo; //WARNING !!! CASE SENSITIVE APPLIED !!!!!
	$dbf      = new dbf_class($file);
	$num_regs = $dbf->dbf_num_rec;
	$num_cols = $dbf->dbf_num_field;

	echo "Cantidad de Registros = $num_regs se mostraron desde el $desde hasta el $hasta.<br>";
	
	echo '<table summary="Summary Here" cellpadding="0" cellspacing="0">';
	$encavezados = cargarColumnasDeTabla('importacion');
	echo '<thead><tr>';
	while($enc = mysql_fetch_array($encavezados))
		echo '<th>'.$enc['Field'].'</th>';
	echo '</tr></thead><tbody>';
	for($i=$desde; $i<$hasta; $i++){
		$TClass = ($TClass == 'dark')? 'light': 'dark';
		echo "<tr class='$TClass'>";
	   $row = $dbf->getRow($i);
		for($j=0; $j<$num_cols; $j++){
			echo ('<td>'.$row[$j].'</td>');
		}
		echo '</tr>';
	}
	echo '</tbody></table>';
}   

?>
