<?php  
	/*<®> Includes <®>*/
		include_once 'fxs.php';
	/*<®> Obtengo el registro de informe de importación <®>*/
		$sql = "SELECT * FROM importaciones WHERE id=1";
		$reg = ejecutar($sql);
	/*<®> Obtengo los valores para la tabla <®>*/
		$reg           = mysql_fetch_array($reg);
		$estado        = $reg['estado'];
		$fila          = $reg['fila'];	
		$agentes       = $reg['agentes'];	
		$escuelas      = $reg['escuelas'];	
		$liquidaciones = $reg['liquidaciones'];	
	/*<®> Armo la tabla segun el estado <®>*/
		if($estado != 'Terminado'){
?>
		<table>
			<tr>
				<th align="center">Estado</th>
				<th align="center">Fila</th>
				<th align="center">Agentes</th>
				<th align="center">Escuelas</th>
				<th align="center">Liquidaciones</th>
			</tr>
			<tr>
				<td align="center"><div id="imp_estado"><?php echo $estado; ?></div></td>
				<td align="center"><?php echo $fila; ?></td>
				<td align="center"><?php echo $agentes; ?></td>
				<td align="center"><?php echo $escuelas; ?></td>
				<td align="center"><?php echo $liquidaciones; ?></td>
			</tr>
		</table>
<?php }else{ ?>
		<table>
			<tr>
				<th align="center">Estado</th>
				<th align="center">Fila</th>
				<th align="center">Agentes</th>
				<th align="center">Escuelas</th>
				<th align="center">Liquidaciones</th>
			</tr>
			<tr>
				<td align="center"><div id="imp_estado"><?php echo $estado; ?></div></td>
				<td align="center"><?php echo $fila; ?></td>
				<td><div><?php echo $agentes; ?> Importados</div><div><?php echo contarRegs('agentes'); ?> En la BD</div></td>
				<td><div><?php echo $escuelas; ?> Importadas</div><div><?php //echo contarRegs('escuelas'); ?> En la BD</div></td>
				<td><div><?php echo $liquidaciones; ?> Importadas</div><div><?php //echo contarRegs('liquidaciones'); ?> En la BD</div></td>
			</tr>
		</table>
<?php } ?>