<?php
include_once 'main/fxs.php';

$mes='';
$anio='';

	if(isset($_POST['dni']))
		$docu = $_POST['dni'];
		//var_dump($docu);
	if(isset($_POST['autoridad']))
	$aut = $_POST['autoridad'];
	if(isset($_POST['nomb_aut']))
	$nomb_aut = $_POST['nomb_aut'];
?>
<head>
<script>
function imprimir()
{
  var Obj = document.getElementById('desaparece');
  var Obj2 = document.getElementById('desaparece2');
  Obj.style.visibility = 'hidden';
  Obj2.style.visibility = 'hidden';
  window.print();
  Obj.style.visibility = 'visible';
  Obj2.style.visibility = 'visible';
}
</script>
<style type="text/css">
<!--
.Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo2 {font-size: 10px}
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
-->
</style>
</head>
<body>
<table width="100%" border="1" cellpadding="20">
  <tr>
    <td colspan="2"><div align="center"><img src="images/LOGO MISTERIO.jpg" width="130" height="130"></div></td>
    <td colspan="3"><p align="center"><strong>MINISTERIO  DE EDUCACION Y </strong><br>
        <strong>CIENCIA  Y TECNOLOGIA</strong><br>
        <strong>COORDINACION  DE LIQUIDACIONES</strong><strong> </strong><br>
    <strong>Gobierno  del Pueblo de&nbsp; La Rioja</strong></p></td>
    <td colspan="2"><div align="center"><img src="images/LOGO MISTERIO.jpg" width="130" height="130"></div></td>
  </tr>
</table>
<table width="80%" border="0" cellpadding="0">
  <tr>
    <td colspan="7">
   	  <div align="right"><strong><BR>LA RIOJA, <?php echo $arr_dias[date('w')]." ".date('d')." de ".$arr_meses[date('n')-1]. " de ".date('Y') ;?></strong></div>
	</td>
  </tr>
</table>

<table width="80%" border="0" cellpadding="0">
    <tr>
    <td colspan="7"><div align="left">
		<p><strong>AL/A SR./SRA </strong></p>
		<form name="form1" method="post" action="">
		  <p>
		    <input disabled="disabled" style="background:#CCCCCC" type="text" name="autoridad" size="50" value="<?php echo $aut;?>">
		  </p>
		  
			<input disabled="disabled" style="background:#CCCCCC "type="text" name="autoridad" size="50" value="<?php echo $nomb_aut;?>">
			
	      </p>
		</form>
		<p><strong>SU DESPACHO: </strong></p></td>
  </tr>
</table>
<br>
<table width="80%" border="0" cellpadding="0">
  <tr>
    <td colspan="7"><p align="left">
    <pre>		Se  remiten las presentes actuaciones para su conocimiento y efectos que estime corresponder, 
adjuntando en los mismos, informe de Situaci&oacute;n Hist&oacute;rica.-
	</pre>    </td>
  </tr>
</table>
<br>
<table width="80%" border="1" cellpadding="20">
  <tr>
    <td ><div align="right"><strong>AGENTE:</strong></div></td>
	<?php
		$situacion = situacionAgente($docu);
	?>
   <td colspan="7"><input disabled="disabled" style="background:#CCCCCC "name="nomb_dni" type="text" size="80" value="<?php echo $situacion['agente']."///".$situacion['dni'];?>"></td>
  </tr>
  <tr>
    <td nowrap><div align="center" class="Estilo1"><strong>ESCUELA</strong></div></td>
    <td ><div align="center" class="Estilo1"><strong>ANTIG.</strong></div></td>
    <td ><div align="center" class="Estilo1"><strong>HORAS</strong></div></td>
    <td nowrap><div align="center" class="Estilo1"><strong>CARGO</strong></div></td>
    <td ><div align="center" class="Estilo1"><strong>DIAS</strong></div></td>
    <td nowrap><div align="center" class="Estilo1"><strong>AREA</strong></div></td>
    <td ><div align="center" class="Estilo1"><strong>SIT. REVISTA</strong></div></td>
	<td ><div align="center" class="Estilo1"><strong>PERIODOS</strong></div></td>
  </tr>
  <?php
		for($i=0;$i<count($situacion['sit']);$i++)
			{?>
  				<tr>
   				  	<td > <div align="center" class="Estilo1 Estilo2"><?php echo $situacion['sit'][$i]['escuela'];?></div></td>
					<td > <div align="center" class="Estilo3"><?php echo $situacion['sit'][$i]['anti'];?></div></td>
					<td > <div align="center" class="Estilo3"><?php echo $situacion['sit'][$i]['hora'];?></div></td>
					<td > <div align="center" class="Estilo3"><?php echo $situacion['sit'][$i]['cargo'];?></div></td>
					<td > <div align="center" class="Estilo3"><?php echo $situacion['sit'][$i]['dias'];?></div></td>
					<td> <div align="center" class="Estilo3"><?php echo $situacion['sit'][$i]['area'];?></div></td>
					<td > <div align="center" class="Estilo3"><?php echo $situacion['sit'][$i]['plan'];?></div></td>
					<td > <div align="center" class="Estilo3"><?php echo $situacion['sit'][$i]['periodo'];?></div></td>
    			</tr>
		<?php
			}?>
</table>
<br>

<table width="100%" border="0" cellpadding="0">
  <tr>
    <td colspan="7"><div align="center">Atentamente.-</div></td>
  </tr>
 
</table>
<br>
<table width="80%" border="0" cellpadding="0">
  <tr>
    <td colspan="7"><div align="center">
      <input type="button" id="desaparece" onClick="imprimir()" value="Imprimir">
	  <input type="button" id="desaparece2" onClick="window.location.replace('cons_hist.php')" value="Volver">
    </div></td>
  </tr>
</table>
</body>
</html>
