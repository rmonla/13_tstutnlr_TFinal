<?php
include_once '../../main/fxs.php';
//get the q parameter from URL
$q=$_GET["q"];
$items = '';

/*<®> sql que busca los doc cercanos <®>*/
	if (strlen($q)>0){
		if($q[0] != '*'){
			$col_w = 'docu';
			$q = "$q%";
		}
		else{
			$col_w = 'nom';
			$q = substr($q,1);
			$q = utf8_encode("%$q%");
		}
		//echo $q.'<br>';

		$sql = "SELECT a.docu, a.nom, a.sexo, l.trab, l.ida_p_c_ea, e.escu, e.desc as descu, ar.desc as darea
					FROM agentes a
					INNER JOIN a_p ap ON ap.idagente = a.id
					INNER JOIN a_p_c_ea apcea ON apcea.ida_p = ap.id
					INNER JOIN liqs l ON l.ida_p_c_ea = apcea.id
					INNER JOIN escu_areas ea ON apcea.idescu_area = ea.id
					INNER JOIN escus e ON ea.idescu = e.id
					INNER JOIN areas ar ON ea.idarea = ar.id
					WHERE $col_w LIKE '$q'
					ORDER BY nom ASC";		
		if($rs = ejecutar($sql)){
			while($rg = mysql_fetch_array($rs)){
					$docu  = $rg['docu'];
					$nom   = $rg['nom'];
					$sexo  = $rg['sexo'];
					$trab  = $rg['trab'];
					$escu  = $rg['escu'];
					$descu = $rg['descu'];
					$darea = $rg['darea'];
					$ida_p_c_ea = $rg['ida_p_c_ea'];
					$destino = "$docu, $nom, $sexo, $trab, $escu - $descu, $darea";
					
					$items.= "<div 
									id='$docu'
									docu='$docu'
									ida_p_c_ea='$ida_p_c_ea' 
									destino='$destino'
									onclick='cargarDestino(this)'
								>
									$destino
								</div>";
			}
		}
		if ($items == '')
			$resultado = 'sin resultados';
		else
		 	$resultado = $items;

		//output the response
		echo $resultado;
	}


?>