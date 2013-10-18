<?php  
/*<®> Includes <®>*/
	include_once 'fxs.php';
	include_once 'dbf_class.php';
/*<®> Verificación Inicial <®>*/
	if(!isset($_GET['dbf'])){
		echo "No se recibió el archivo DBF.";
	}else{
		/*<®> Variables <®>*/
			//$dbf_arch = "EDUC_PADSEP13.DBF";
			$dbf_arch = $_GET['dbf'];
			$dbf_arch  = '../uploads/dbfs/'.$dbf_arch;
		/*<®> Cargo el DBF <®>*/
			$dbf       = new dbf_class($dbf_arch);
			$dbf_filas = $dbf->dbf_num_rec;
			//$dbf_filas = 50;
		/*<®> Obtengo la datos desde donde quedó la importación <®>*/
			$sql = "SELECT * FROM importaciones WHERE id = 1";
			$rs  = mysql_fetch_array(ejecutar($sql));
		/*<®> Si el estado es Terminado inicio en 0<®>*/
			$estado   = $rs['estado'];
			$ult_fila = ($estado == 'Terminado') ? '0' : $rs['fila'] ;
			//$tramo    = $ult_fila + '1000';
			//var_dump($dbf_filas, $rs['fila'], $i, $tramo);
			//exit;
		/*<®> Array de Importaciones y Wheres<®>*/
			$arr_imps = array(
								'agentes' => array(
													'docu' => 0, 
													'cuil' => 1, 
													'nom'  => 3, 
													'sexo' => 4),
								'zonas' => array(
													'zona' => 5),
								'areas' => array(
													'area' => 33),
								'planes' => array(
													'plan' => 12),
								'agrupaciones' => array(
													'agru' => 19)
								);
			$arr_wres = array(
								'agentes'      => array('docu'),
								'zonas'        => array('zona'),
								'areas'        => array('area'),
								'planes'       => array('plan'),
								'agrupaciones' => array('agru')
							);
			$arr_busc_ids = array(
									'cargos' => array(
													'idagru' => $arr_imps['agrupaciones']['agru']),
								);
			//var_dump($arr_imps, $arr_wres);
			//exit;
		/*<®> Importación <®>*/
			$t_ini = time();
			$t=0;
			for ($i=$ult_fila; $i<$dbf_filas and $t<=20; $i++){
				//var_dump(time());
				/*<®> Cargo la fila del dbf<®>*/
					$dbf_reg = $dbf->getRow($i);
				foreach ($arr_imps as $tbl => $cols) {
					/*<®> Armo el where para buscarlo en la BD<®>*/
						$where = '';
						foreach ($arr_wres[$tbl] as $col_tbl) {
							$col_dbf = $cols[$col_tbl];
							$where.= ",$col_tbl='$dbf_reg[$col_dbf]'";
						}
						$where = substr($where,1);
						//var_dump($where);
						//exit;
					/*<®> Lo importo si no está cargado <®>*/
						if (!buscarReg($tbl, $where)) {
							/*<®> Armo las string de encabezados y datos para la sql<®>*/
								$enc = '';
								$dat = '';
								foreach ($cols as $col_tbl => $col_dbf) {
									$enc.= ",$col_tbl";
									$dat.= ",'$dbf_reg[$col_dbf]'";
								}
								$enc = substr($enc,1);
								$dat = substr($dat,1);
							/*<®> Inserto el registro <®>*/
								$sql = "INSERT INTO $tbl ( $enc ) VALUES ( $dat )";
								ejecutar($sql);
							/*<®> Dejo el registro en la BD <®>*/
								$ult_fila = $i;
								$sql = "UPDATE importaciones SET fila='$ult_fila' WHERE id = 1";
								ejecutar($sql);
						}
				}
				$t = time() - $t_ini;
			}
			//exit;
		/*<®> Verifico si llegó al final y lo registro en la BD<®>*/
			$ult_fila = $i;
			$estado = ($ult_fila >= $dbf_filas) ? 'Terminado' : 'Importando' ;
			$sql = "UPDATE importaciones SET estado='$estado', fila='$ult_fila' WHERE id = 1";
			ejecutar($sql);
	/*<®> Muestro una tabla con los resultados <®>*/
?>
	<table>
		<tr>
			<th align="center">Estado</th>
			<th align="center">Fila</th>
			<?php 
				foreach ($arr_imps as $tbl => $cols) {
			 ?>
				<th align="center"><?php echo ucfirst($tbl); ?></th>
			<?php 
				} 
			?>
		</tr>
		<tr>
			<td align="center">
				<div id="imp_estado">
					<?php echo $estado; ?>
				</div>
			</td>
			<td align="center">
				<?php echo $ult_fila; ?>
			</td>
			<?php 
				foreach ($arr_imps as $tbl => $cols) { 
			?>
				<td>
					<div align="center">
						<?php echo contarRegs($tbl); ?>
					</div>
				</td>
			<?php 
				} 
			?>
		</tr>
	</table>
<?php 
	} 
?>
