<?php  
/*<®> fx conexion <®>*/
	/**
	 * Función que retorna la conexion de la BD.
	 */
function conexion(){
	/* Inicilizo  las variables de conexion */
		$dominio = $_SERVER['HTTP_HOST'];
		//var_dump($dominio);
		//exit;
		switch ($dominio) {
			case 'localhost': //Si se está ejecutando en mi pc.
				$mysql_host       = "localhost";
				$mysql_usuario    = "root";
				$mysql_contrasena = "";
				$basedatos        = "eduliq";
				break;
			
			default: //Si se está ejecutando en hostinger.
				$mysql_host       = "mysql.hostinger.es";
				$mysql_usuario    = "u138934575_edliq";
				$mysql_contrasena = "$01rmonla";
				$basedatos        = "u138934575_edliq";
				break;
		}

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
	if (!$rs = mysql_query($sql, conexion())) return false;
	return $rs;
}
/*<®> fx myURL <®>*/
	/**
	 * Función que obtiene la URL actual.
	 */
function myURL(){
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	return $url;
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
	function importacion($archivo, $hasta = '0', $desde ='0'){
		include_once 'dbf_class.php';
		
		$file     = $archivo; //WARNING !!! CASE SENSITIVE APPLIED !!!!!
		$dbf      = new dbf_class($file);
		$num_regs = $dbf->dbf_num_rec;
		$num_cols = $dbf->dbf_num_field;
		$num_cols = $num_cols - '8'; //por que me trae unas columnas basias.


		/*<®> Cargo los nombres tablas y columnas de la BD <®>*/
   		$tbl = 'importacion';
   		$campos = cargarColumnasDeTabla($tbl);

		/*<®> Armo los encavezados <®>*/
			$enc = '';
			while($col = mysql_fetch_array($campos))
				$enc.= ','.$col['Field'];
			$enc = substr($enc,1);
		/*<®> Agregos los registros a la BD <®>*/
			$desde = ($desde > '0') ? $desde : '0' ;
			$hasta = ($hasta > '0') ? $hasta : $num_regs ;
			for($i=$desde; $i<$hasta; $i++){
		   	$row = $dbf->getRow($i);
				$dat = '';
				for($j=0; $j<$num_cols; $j++)
					$dat.= ",'$row[$j]'";
				$dat = substr($dat,1);
				$sql = "INSERT INTO $tbl ( $enc ) VALUES ( $dat )";
				//var_dump($sql);
				//exit;
				ejecutar($sql);
			}
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
		include_once 'dbf_class.php';
		
		$file     = $archivo; //WARNING !!! CASE SENSITIVE APPLIED !!!!!
		$dbf      = new dbf_class($file);
		$num_regs = $dbf->dbf_num_rec;
		$num_cols = $dbf->dbf_num_field;
		$num_cols = $num_cols - '8'; //por que me trae unas columnas basias.

		echo "Cantidad de Registros = $num_regs se mostraron desde el $desde hasta el $hasta.<br><br>";
		
		echo '<table summary="Summary Here" cellpadding="0" cellspacing="0">';
		$encavezados = cargarColumnasDeTabla('importacion');
		echo '<thead><tr>';
		$i=0;
		while($enc = mysql_fetch_array($encavezados))
			echo "<th>".$enc['Field']." (".$i++.")</th>";
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
	function descomprimirArch($zip_arch, $path_dest){
		$path_orig = 'uploads/';
		$zip_arch = $path_orig.$zip_arch;
		//var_dump($zip_arch);
	   //exit;
		$zip = new ZipArchive;
		if ($zip->open($zip_arch) === TRUE) {
		    $zip->extractTo($path_dest);
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
	function buscarPrimerDBF($path_dbfs){
		$dir = opendir($path_dbfs); 
		$archivo = readdir($dir);
		$arch_dbf = 'NoEncontrado';
		$stop = 0;
		while($archivo = readdir($dir)){  
	      if ($archivo != ".")
	      	if($archivo != ".." ){
	      		$arch = explode('.', $archivo);
	      		//var_dump($arch);
	      		//exit;
	      		$ext = strtolower($arch[1]);
	      		if($ext == 'dbf'){
	      			$arch_dbf = $archivo;
	      			break;
      			}
				}
		}
		closedir($dir);
		if($arch_dbf == 'NoEncontrado') return false;
		return $arch_dbf;
	}
/*<®> fx contFilasDBF <®>*/
	/**
	 * Función que cuanta las filas de un archivo DBF.
	 */
	function contFilasDBF($arch_dbf){
		/*<®> includes <®>*/
			include_once 'dbf_class.php';
		/*<®> Variables <®>*/
			$dbf_path = 'uploads/dbfs/';
			$file = $dbf_path.$arch_dbf;

			//var_dump($file);
		/*<®> Instancio la calse <®>*/
			$dbf  = new dbf_class($file);
		/*<®> Retorno el resultado <®>*/
			return $dbf->dbf_num_rec;
	}
/*<®> fx obtenerRegDBF <®>*/
	/**
	 * Función que obtiene un registro de un archivo DBF.
	 */
	function obtenerRegDBF($arch_dbf, $id){
		/*<®> includes <®>*/
			include_once 'dbf_class.php';
		/*<®> Instancio la clase <®>*/
			$dbf      = new dbf_class($arch_dbf);
		/*<®> Retorno el resultado <®>*/
			return $dbf->getRow($id);
	}
/*<®> fx buscarReg <®>*/
	/**
	 * Función que retoran verdadero si encuentra un registro en una tabla.
	 */
	function buscarReg($tbl, $col, $id){
		/*<®> Sentencia SQL <®>*/
			$sql = "SELECT * FROM $tbl WHERE $col=$id";
			$rs = ejecutar($sql);
		/*<®> Verifico si se encontró el registro <®>*/
			$res = mysql_num_rows($rs);
		/*<®> Imprimo el resultado <®>*/
			return ($res != 0)? true : false;
	}
/*<®> fx contarRegs <®>*/
	/**
	 * Función que retorna la catidad de registros de una tabla.
	 */
	function contarRegs($tbl){
		/*<®> Sentencia SQL <®>*/
			$sql = "SELECT COUNT(*) as $tbl FROM $tbl";
			$rs = ejecutar($sql);
		/*<®> Cuento los registros <®>*/
			$res = mysql_fetch_array($rs);
		/*<®> Imprimo el resultado <®>*/
			return $res[$tbl];
	}

?>
