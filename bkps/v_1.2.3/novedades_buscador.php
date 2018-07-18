<?php


include_once '_inc/fxs.php';
//get the q parameter from URL
$q=$_GET["q"];
$items = '';

/*<®> sql que busca los doc cercanos <®>*/
	if (strlen($q)>0){
		if($q[0] != '*'){
			$col_w = 'docu';
			$q = $q.'%';
		}
		else{
			$col_w = 'nom';
			$q = substr($q,1);
			$q = '%'.$q.'%';
		}
		//echo $q.'<br>';
		$sql = "SELECT periodo 
					FROM periodos
					ORDER BY periodo DESC
					LIMIT 0,1";
		if($rs = ejecutar($sql)){
			$rg = mysql_fetch_array($rs);
			$ult_per = $rg['periodo'];
			//echo $ult_per.'<br>';
			$sql = "SELECT a.docu, a.nom, a.sexo, l.trab, l.ida_p_c_ea, e.escu, e.desc AS descu, ar.desc AS darea
FROM agentes a
INNER JOIN a_p ap ON ap.idagente = a.id
INNER JOIN a_p_c_ea apcea ON apcea.ida_p = ap.id
INNER JOIN liqs l ON l.ida_p_c_ea = apcea.id
INNER JOIN periodos per ON l.idperiodo = per.id
INNER JOIN escu_areas ea ON apcea.idescu_area = ea.id
INNER JOIN escus e ON ea.idescu = e.id
INNER JOIN areas ar ON ea.idarea = ar.id
WHERE per.periodo = '$ult_per' AND docu LIKE '$q'
ORDER BY nom ASC";
			//var_dump($ult_per, $q, $sql);
			if($rs = ejecutar($sql)){
				while($rg = mysql_fetch_array($rs)){
						$id = $rg['docu'].'-'.$rg['ida_p_c_ea'];
						$docu  = number_format($rg['docu'], '0', ",", ".");
						$nom   = $rg['nom'];
						$sexo  = $rg['sexo'];
						$trab  = $rg['trab'];
						$escu  = $rg['escu'];
						$descu = $rg['descu'];
						$escuela = $rg['escu'].'-'.$rg['descu'];
						$area = $rg['darea'];
						$ida_p_c_ea = $rg['ida_p_c_ea'];
						$destino = "$docu, $nom, $sexo, $trab, $escuela, $area";
						
						$items.= "<div 
										id= '$id'
										ida_p_c_ea='$ida_p_c_ea' 
										docu='$docu'
										nom='$nom' 
										sexo='$sexo' 
										trab='$trab'
										escuela='$escuela'
										area='$area'
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
	}
?>