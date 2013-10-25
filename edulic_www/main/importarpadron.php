<?php  
/*<®> Includes <®>*/
	include_once 'fxs.php';
	include_once 'dbf_class.php';
/*<®> Verificación Inicial <®>*/
	if(!isset($_GET['dbf'], $_GET['ult_fila'])){
		echo "No se recibió el archivo DBF.";
	}else{
		/*<®> Variables <®>*/
			$ult_fila = $_GET['ult_fila'];
			$dbf_arch = $_GET['dbf'];
			$dbf_arch  = '../uploads/dbfs/'.$dbf_arch;
		/*<®> Cargo el DBF <®>*/
			$dbf       = new dbf_class($dbf_arch);
			$dbf_filas = $dbf->dbf_num_rec;
		/*<®> Array de Importaciones y Wheres<®>*/
			/*$arr_buscados = array('idagru' => array(
															'coldbf' => 19
															'coltbl' => 'cargo'
															));*/
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
													'agru' => 19),
								'cargos' => array(
													'idagru' => 19,
													'cargo' => 19),
								'escuelas' => array(
													'idarea' => 33,
													'idzona' => 5,
													'escu'   => 7),
								'liquidaciones' => array(
													'idagente' => 0,
													'idplan'   => 12,
													'idcargo'  => 19,
													'idescu'   => 7,
													'trab'     => 2,
													'anti'     => 17,
													'hora'     => 18,
													'dias'     => 22,
													'periodo'  => '?')
								);
								/*@idarea + @idzona + @escu*/
			$arr_wres = array(
								'agentes'      => array('docu'),
								'zonas'        => array('zona'),
								'areas'        => array('area'),
								'planes'       => array('plan'),
								'agrupaciones' => array('agru')
							);
			$arr_busc_ids = array(
									'cargos' => array(
														'idagru' => $arr_imps['agrupaciones']['agru']
													),
									'escuelas' => array(
														'idarea' => $arr_imps['areas']['area'],
														'idzona' => $arr_imps['zonas']['zona'],
													),
									'liquidaciones' => array(
														'idagente' => $arr_imps['agentes']['docu'],
														'idplan' => $arr_imps['planes']['plan']
													),
								);
			$arr_res_ids = array(
									'cargos' => '0',
									'escuelas' => '0',
									'liquidaciones' => '0'
								);
		/*<®> Importación <®>*/
			$t_ini = time();
			$t=0;
			for ($i=$ult_fila; $i<$dbf_filas and $t<=20; $i++){
				/*<®> Cargo la fila del dbf<®>*/
					$dbf_reg = $dbf->getRow($i);
				foreach ($arr_imps as $tbl => $cols) {
					/*<®> Armo el where para buscarlo en la BD<®>*/
						switch ($tbl) {
							case 'cargos':
								/* idagru */
									$val_dbf  = $dbf_reg[19];
									$col_tbl  = 'agru';
									$where    = "$col_tbl='$val_dbf'";
									$busc_tbl = 'agrupaciones';
									$busc_col = 'idagru';
									$idagru   = buscarReg($busc_tbl, $where, $busc_col);
								/* cargo */
									$cargo    = $dbf_reg[20].$dbf_reg[21];
								/* where */
									$where    = "idagru='$idagru' AND cargo='$cargo'";
								break;
							case 'escuelas':
								/* idarea */
									$busc_tbl = 'areas';
									$busc_col = 'idarea';
									$col_tbl  = 'area';
									$val_dbf  = $dbf_reg[33];
									$where    = "$col_tbl='$val_dbf'";
									$idarea   = buscarReg($busc_tbl, $where, $busc_col);
								/* idzona */
									$busc_tbl = 'zonas';
									$busc_col = 'idzona';
									$col_tbl  = 'zona';
									$val_dbf  = $dbf_reg[5];
									$where    = "$col_tbl='$val_dbf'";
									$idzona   = buscarReg($busc_tbl, $where, $busc_col);
								/* escu */
									$escu    = $dbf_reg[7];
								/* where */
									$where    = "idarea='$idarea' AND idzona='$idzona' AND escu='$escu'";
								break;
							case 'liquidaciones':
								/* idagente */
									$busc_tbl = 'agentes';
									$busc_col = 'idagente';
									$col_tbl  = 'docu';
									$val_dbf  = $dbf_reg[0];
									$where    = "$col_tbl='$val_dbf'";
									$idagente = buscarReg($busc_tbl, $where, $busc_col);
								/* idescu */
									/* idarea */
										$busc_tbl = 'areas';
										$busc_col = 'idarea';
										$col_tbl  = 'area';
										$val_dbf  = $dbf_reg[33];
										$where    = "$col_tbl='$val_dbf'";
										$idarea   = buscarReg($busc_tbl, $where, $busc_col);
									/* idzona */
										$busc_tbl = 'zonas';
										$busc_col = 'idzona';
										$col_tbl  = 'zona';
										$val_dbf  = $dbf_reg[5];
										$where    = "$col_tbl='$val_dbf'";
										$idzona   = buscarReg($busc_tbl, $where, $busc_col);
									/* escu */
										$escu    = $dbf_reg[7];
									/* where */
										$where    = "idarea='$idarea' AND idzona='$idzona' AND escu='$escu'";
									/* busco el idescu */
										$busc_tbl = 'escuelas';
										$busc_col = 'idescu';
										$idescu   = buscarReg($busc_tbl, $where, $busc_col);
								/* trab */
									$trab    = $dbf_reg[2];
								/* where */
									$where    = "idagente='$idagente' AND idescu='$idescu' AND trab='$trab'";
								break;
							
							default:
								$where = '';
								foreach ($arr_wres[$tbl] as $col_tbl) {
									$col_dbf = $cols[$col_tbl];
									$where   = "$col_tbl='$dbf_reg[$col_dbf]'";
								}
								//$where = substr($where,1);
								break;
						}
					/*<®> Lo importo si no está cargado <®>*/
						if (!buscarReg($tbl, $where)) {
							/*<®> Armo las string de encabezados y datos para la sql<®>*/
								$enc = '';
								$dat = '';
								switch ($tbl) {
									case 'cargos':
										$where  = "agru='".$dbf_reg[19]."'";
										$idagru = buscarReg('agrupaciones', $where, 'idagru');
										$cargo  = $dbf_reg[20].$dbf_reg[21];
										$enc    = "idagru,cargo";
										$dat    = "'$idagru','$cargo'";
										break;
									case 'escuelas':
										/* idarea */
											$busc_tbl = 'areas';
											$busc_col = 'idarea';
											$col_tbl  = 'area';
											$val_dbf  = $dbf_reg[33];
											$where    = "$col_tbl='$val_dbf'";
											$idarea   = buscarReg($busc_tbl, $where, $busc_col);
										/* idzona */
											$busc_tbl = 'zonas';
											$busc_col = 'idzona';
											$col_tbl  = 'zona';
											$val_dbf  = $dbf_reg[5];
											$where    = "$col_tbl='$val_dbf'";
											$idzona   = buscarReg($busc_tbl, $where, $busc_col);
										/* escu */
											$escu    = $dbf_reg[7];
										/* Encabezados y Datos */
											$enc    = "idarea,idzona,escu";
											$dat    = "'$idarea','$idzona','$escu'";
										break;
									case 'liquidaciones':
										/* idagente */
											$busc_tbl = 'agentes';
											$busc_col = 'idagente';
											$col_tbl  = 'docu';
											$val_dbf  = $dbf_reg[0];
											$where    = "$col_tbl='$val_dbf'";
											$idarea   = buscarReg($busc_tbl, $where, $busc_col);
										/* idplan */
											$busc_tbl = 'planes';
											$busc_col = 'idplan';
											$col_tbl  = 'plan';
											$val_dbf  = $dbf_reg[12];
											$where    = "$col_tbl='$val_dbf'";
											$idplan   = buscarReg($busc_tbl, $where, $busc_col);
										/* idcargo */
											/* idagru */
												$val_dbf  = $dbf_reg[19];
												$col_tbl  = 'agru';
												$where    = "$col_tbl='$val_dbf'";
												$busc_tbl = 'agrupaciones';
												$busc_col = 'idagru';
												$idagru   = buscarReg($busc_tbl, $where, $busc_col);
											/* cargo */
												$cargo    = $dbf_reg[20].$dbf_reg[21];
											/* where */
												$where    = "idagru='$idagru' AND cargo='$cargo'";
											/* busco el idcargo */
												$busc_tbl = 'cargos';
												$busc_col = 'idcargo';
												$idcargo   = buscarReg($busc_tbl, $where, $busc_col);
										/* idescu */
											/* idarea */
												$busc_tbl = 'areas';
												$busc_col = 'idarea';
												$col_tbl  = 'area';
												$val_dbf  = $dbf_reg[33];
												$where    = "$col_tbl='$val_dbf'";
												$idarea   = buscarReg($busc_tbl, $where, $busc_col);
											/* idzona */
												$busc_tbl = 'zonas';
												$busc_col = 'idzona';
												$col_tbl  = 'zona';
												$val_dbf  = $dbf_reg[5];
												$where    = "$col_tbl='$val_dbf'";
												$idzona   = buscarReg($busc_tbl, $where, $busc_col);
											/* escu */
												$escu    = $dbf_reg[7];
											/* where */
												$where    = "idarea='$idarea' AND idzona='$idzona' AND escu='$escu'";
											/* busco el idescu */
												$busc_tbl = 'escuelas';
												$busc_col = 'idescu';
												$idescu   = buscarReg($busc_tbl, $where, $busc_col);
										/* trab */
											$trab    = $dbf_reg[2];
										/* anti */
											$anti    = $dbf_reg[17];
										/* hora */
											$hora    = $dbf_reg[18];
										/* dias */
											$dias    = $dbf_reg[22];
										/* periodo */
											$periodo = explode('.', $_GET['dbf']);
											$periodo = $periodo[0]; //Periodo es el nombre del archivo dbf.
										/* Encabezados y Datos */
											$enc = "idagente,idplan,idcargo,idescu,trab,anti,hora,dias,periodo";
											$dat = "'$idagente','$idplan','$idcargo','$idescu','$trab','$anti','$hora','$dias','$periodo'";
										break;
									
									default:
										foreach ($cols as $col_tbl => $col_dbf) {
											$enc.= ",$col_tbl";
											$dat.= ",'$dbf_reg[$col_dbf]'";
										}
										$enc = substr($enc,1);
										$dat = substr($dat,1);
										break;
								}
							/*<®> Inserto el registro <®>*/
								$sql = "INSERT INTO $tbl ( $enc ) VALUES ( $dat )";
								ejecutar($sql);
						}
				}
				$t = time() - $t_ini;
			}
		/*<®> Verifico si llegó al final y lo registro en la BD<®>*/
			$ult_fila = $i;
			$estado = ($ult_fila == $dbf_filas) ? 'Terminado' : 'Importando' ;
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
				<div id="ult_fila">
					<?php echo $ult_fila; ?>
				</div>
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
