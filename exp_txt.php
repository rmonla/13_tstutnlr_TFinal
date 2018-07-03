<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
		include_once 'main/fxs.php';
		
		  if(isset($_POST['periodo']))
		  	$per = $_POST['periodo'];
		   $q = "SELECT a.docu, 
						a.nom, 
						a.sexo, 
						l.trab, 
						e.escu, 
						ar.area, 
						con.concepto, 
			 			tn.tiponov, 
						n.monto, 
		  				cod.codigo, 
						ne.nov_estado
						FROM novedades n
									INNER JOIN a_p_c_ea apcea ON apcea.id = n.ida_p_c_ea
									INNER JOIN a_p ap ON apcea.ida_p = ap.id
									INNER JOIN agentes a ON a.id = ap.idagente
									INNER JOIN liqs l ON l.ida_p_c_ea = apcea.id
									INNER JOIN cod_usr cu ON cu.id = n.idcod_usr
									INNER JOIN escu_areas ea ON ea.id = apcea.idescu_area
									INNER JOIN escus e ON e.id = ea.idescu
									INNER JOIN areas ar ON ar.id = ea.idarea
									INNER JOIN conceptos con ON con.id = n.idconcepto
									INNER JOIN tiposnov tn ON tn.id = n.idtiposnov
									INNER JOIN codigos cod ON cod.id = cu.idcodigo
									WHERE l.idperiodo =  '$per'";
							if ($rs = ejecutar($q)) {
								while($rg = mysql_fetch_array($rs))
									{
											
										var_dump($rg);
									}
								}
/*$contenido=”lo que quieras escribir en el archivo”;
$fp=fopen(“carpeta/archivo.txt”,”x”);
fwrite($fp,$contenido);
fclose($fp) ;*/
?>
</body>
</html>
