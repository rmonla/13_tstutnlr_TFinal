<?php


include_once '_inc/fxs.php';

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript">
function doPrint(){
document.all.item("noprint").style.visibility='visible' 
window.print()
document.all.item("noprint").style.visibility='hidden'
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SITUACION DE REVISTA</title>
</head>
<body>
<table width="71%" border="1" cellpadding="20">
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="images/LOGO MISTERIO.jpg" width="130" height="130"></td>
    <td colspan="4" align="center" valign="middle"><p align="center"><strong>MINISTERIO  DE EDUCACION</strong><br>
          <strong>CIENCIA  Y TECNOLOGIA</strong><br>
          <strong>COORDINACION  DE LIQUIDACIONES</strong><strong> </strong><br>
          <strong>Gobierno  del Pueblo de&nbsp; La Rioja</strong></p></td>
    <td width="33%" align="center" valign="middle"><div align="center"><img src="images/LOGO MISTERIO.jpg" width="130" height="130"></div></td>
  </tr>
  <tr>
    <td colspan="7">
		<div align="right"><strong>LA RIOJA, <?php 
												echo $arr_dias[date('w')]." ".date('d')." de ".$arr_meses[date('n')-1]. " del ".date('Y') ;?></strong></div>	</td>
  </tr>
  <tr>
    <td colspan="7"><div align="left">
		<p><strong>A SRA./SR </strong></p>
		<form name="form1" method="post" action="">
		  <p>
		    <input type="text" name="autoridad" size="50">
		  </p>
		  
			<input type="text" name="nombre" size="50">
			
	      </p>
		</form>
		<p><strong>SU DESPACHO: </strong></p></td>
  </tr>
  <tr>
    <td colspan="7"><p align="left"><pre>		Se  remiten las presentes actuaciones para su conocimiento y efectos que estime corresponder, 
adjuntando en los mismos, informe de Situaci&oacute;n de Revista.-</pre>
          <em><pre>		A tal fin se adjunta, detalle de la &uacute;ltima  liquidaci&oacute;n.(<strong>PERIODO DE LA LIQUIDACION // NOVIEMBRE 2013 </strong>)</pre>
		  </td>
  </tr>
  <tr>
    <td colspan="2"><div align="right"><strong>AGENTE:</strong></div></td>
    <td colspan="5"><strong>(FRANCISCO CIPOLATTI, GASTON / 25425938)</strong></td>
  </tr>
  <tr>
    <td width="11%"><div align="center"><strong>ESCUELA</strong></div></td>
    <td width="15%"><div align="center"><strong>ANTIG.</strong></div></td>
    <td width="10%"><div align="center"><strong>HORAS</strong></div></td>
    <td width="10%"><div align="center"><strong>CARGO</strong></div></td>
    <td width="8%"><div align="center"><strong>DIAS</strong></div></td>
    <td width="13%"><div align="center"><strong>AREA</strong></div></td>
    <td><div align="center"><strong>SIT. REVISTA </strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><div align="center">Atentamente.-</div></td>
  </tr>
  <tr>
	<td colspan="7"><div id="noprint"><button type="submit" class="Estilo9" onClick="window.print();return false"> Imprimir</button></div></td>
  </tr>
</table>


</body>
</html>
