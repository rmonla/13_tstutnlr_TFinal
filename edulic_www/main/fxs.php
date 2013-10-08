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
	function importacion($archivo, $desde ='0', $hasta = '0'){
		/*<®> Cargo los nombres tablas y columnas de la BD <®>*/
   		$tabla = 'importacion';
   		$campos = cargarColumnasDeTabla($tabla);

		/*<®> Armo los encavezados <®>*/
			$enc = '';
			while($col = mysql_fetch_array($campos))
				$enc.= ','.$col['Field'];
			$enc = substr($enc,1);
		/*<®> Armo los datos <®>*/
			$dat = '';
			while($col = mysql_fetch_array($campos))
				$enc.= ','.$col['Field'];
			$enc = substr($enc,1);			
			var_dump($enc);
			exit;

	}
/*<®> fx sql_insert1 <®>*/
	/**
	 * Función que inserta un registro en una tabla.
	 */
	function sql_insert1($tabla, $datos){
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
/*<®> fx mostrarDBF <®>*/
	/**
	 * Función que muestra el contenido de un archivo DBF por pantalla.
	 */
	function mostrarDBF($archivo, $desde ='0', $hasta = '0'){
		include_once 'dbf_class/dbf_class.php';
		
		$file     = $archivo; //WARNING !!! CASE SENSITIVE APPLIED !!!!!
		$dbf      = new dbf_class($file);
		$num_regs = $dbf->dbf_num_rec;
		$num_cols = $dbf->dbf_num_field;
		$num_cols = $num_cols - '8'; //por que me trae unas columnas basias.

		echo "Cantidad de Registros = $num_regs se mostraron desde el $desde hasta el $hasta.<br><br>";
		
		echo '<table summary="Summary Here" cellpadding="0" cellspacing="0">';
		$encavezados = cargarColumnasDeTabla('importacion');
		echo '<thead><tr>';
		while($enc = mysql_fetch_array($encavezados))
			echo '<th>'.$enc['Field'].'</th>';
		echo '</tr></thead><tbody>';
		$TClass = 'light';
		for($i=$desde; $i<$hasta; $i++){
			$TClass = ($TClass != 'light')? 'light': 'dark';


			//if ($TClass != 'dark') $TClass = 'dark';
			//else $TClass = 'light';
			
			//$TClass = ($TClass == 'dark')? 'light': 'dark';
			echo "<tr class='$TClass'>";
		   $row = $dbf->getRow($i);
			for($j=0; $j<$num_cols; $j++){
				echo ('<td>'.$row[$j].'</td>');
			}
			echo '</tr>';
		}
		echo '</tbody></table>';
	}   
/*<®> fx descomprimirArch <®>*/
		/**
		 * Función que descomprime el archivo enviado.
		 */
	function descomprimirArch($arch, $destino){
		//$path_dest = 'uploads/';
		//$path_tmps = 'tmps/';
		//$path_dbfs = 'dbfs/';
		//$arch_nomb = explode('/', $arch);
		//$arch_nomb = $arch_nomb[count($arch_nomb)-1];
		//$destino = $path_dest.$path_tmps;

		$zip = new ZipArchive;
		if ($zip->open($arch) === TRUE) {
		    $zip->extractTo($destino);
		    $zip->close();
	   } else {
	   	echo "No se pudo descomprimir el archivo.";
	   	return false;
	   }
		//var_dump($zip->open($arch), $destino, $zip->extractTo($destino));
	   return true;
	}	
/*<®> fx buscarPrimerDBF <®>*/
	/**
	 * Función que buscar el primer archivo DBF que encuentre en un carpeta dada.
	 */
	function buscarPrimerDBF($carpdbfs){
		$dir = opendir($carpdbfs); 
		$archivo = readdir($dir);
		$arch_dbf = 'NoEncontrado';
		$stop = 0;
		while($archivo = readdir($dir)){  
	      if ($archivo != ".")
	      	if($archivo != ".." ){
	      		$arch = explode('.', $archivo);
	      		$ext = strtolower($arch[1]);
	      		if($ext == 'dbf'){
	      			$arch_dbf = $carpdbfs.$archivo;
	      			break;
      			}
				}
		}
		closedir($dir);
		//var_dump($arch_dbf);
		return $arch_dbf;
	}
?>
