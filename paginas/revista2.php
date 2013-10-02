<?
	session_start();
	include("conectar.php");
?>

<HTML>
<HEAD>
<TITLE>EduLiq - La Rioja</TITLE>
<META content="CutePage 2.0" name=GENERATOR>
<META content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
<STYLE type=text/css>

<!--

body { font-family:"Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 9pt}

p {  font-family:"Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 9pt}

a:link {  color: #0000FF; text-decoration: none}

a:visited {  text-decoration: none}

a:hover {  color: #FF0033; text-decoration: underline}

td {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 9pt}

.CompanyName {font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 23pt}
.Estilo1 {
	font-size: 12;
	font-weight: bold;
}
.Estilo8 {color: #FF0000}
.Estilo9 {
	font-size: 16px;
	font-weight: bold;
}
.Estilo11 {
	color: #000000;
	font-size: 14px;
}


-->

</STYLE>
</HEAD>

<BODY bgColor=#ffffff>
  <div align="center">
  <div align="center">
    <div align="center">
      <div align="center">
        <div align="center">


<div align="center">
  
<div align="center">
  <div align="center">
    <div align="center">

      <DIV align=center>
      <TABLE align=center border=0 cellPadding=0 cellSpacing=0 width="75%">
        <TR>
          <TD width="2%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="3%">&nbsp;</TD>
          <TD bgColor="#008000" width="2%">&nbsp;</TD>
          <TD width="5%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD bgColor=#FF0000 width="2%">&nbsp;</TD>
          <TD width="11%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="5%">&nbsp;</TD>
          <TD bgColor=#0000FF width="2%">&nbsp;</TD>
          <TD width="7%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="16%">&nbsp;</TD>
          <TD bgColor="#008000" width="2%">&nbsp;</TD>
          <TD width="12%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="16%">&nbsp;</TD>
          <TD bgColor="#008000" width="3%">&nbsp;</TD>
        </TR>
      </TABLE>
      <TABLE width="75%" height="17" border=0 cellPadding=0 cellSpacing=0>
        <TR>
          <TD bgColor="#008000" height=13 rowSpan=2 width="18%">&nbsp;</TD>
          <TD bgColor=#FF0000 rowSpan=2 width="9%">&nbsp;</TD>
          <TD bgColor=#0000FF height=13 rowSpan=2 width="15%">&nbsp;</TD>
          <TD bgColor=#FF0000 height=13 rowSpan=2 width="14%">&nbsp;</TD>
          <TD bgColor="#008000" height=13 rowSpan=2 width="44%">&nbsp;</TD>
        </TR>
        <TR></TR>
      </TABLE>
      <TABLE border=0 cellPadding=0 cellSpacing=0 width="75%">
        <TR>
          <TD width="65%" height=47><DIV align=center class=CompanyName>
            <div align="left"><B>Situaci&oacute;n de Revista</B></div>
          </DIV></TD>
      <TD width="35%" align="center" vAlign=middle bgcolor="#CCCCCC"><div align="right"><B><FONT size=2>Bienvenido Usuario: <? echo $_SESSION['usuario'];?></FONT></B></div></TD>
      </TR>
        <TR>
          <TD colSpan=2>
            
            <div align="center">
              <TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
                <TR><TD bgColor=#ffcc00 height=1><DIV align=center><img src="image/pixel.gif" height=1 width=1></DIV></TD></TR>
              </TABLE>
          </div></TD>
      </TR>
        <TR>
          <TD colSpan=2 height=54>
            
            <div align="center">
            <div align="center" class="Estilo1">
              <A href="index2.php"><FONT color=#3169a5>Inicio</FONT></A><FONT color=#ff9900> | </FONT> 
              <A href="revista.php"><FONT color=#3169a5>Situacion de Revista </FONT></A><FONT color=#ff9900> | </FONT> 
              <A href="historico.php"><font color="#3169a5">Historico</font></A><FONT color=#ff9900> | </FONT> 
			  <A href="escuelas.php"><font color="#3169a5">Listado de Escuelas </font></A><FONT color=#ff9900> | </FONT> 
              <A href="export.php"><FONT color=#3169a5>Exportar Códigos</font></A><FONT color=#ff9900> | </FONT>
              <A href="codigos.php"><FONT color=#3169a5>Codigos de Liquidacion</font></A><FONT color=#ff9900> | </FONT>
			  <A href="personal.php"><FONT color=#3169a5>Personal</font></A><FONT color=#ff9900> | </FONT>
              <A href="salir.php"><font color="#3169a5">Salir</font></A><FONT color=#ff9900> | </FONT>             </div></TD>
	  </TR>
      </table>
	  <table width="75%" border="5" align="center" cellpadding="1" bordercolor="#FF0000">
		<tr>
    		<td height="35" colspan="3" bgcolor="#CCCCCC"><span class="Estilo11"><strong><span class="Estilo11">
            </strong>
   		    </span>
    		  <div align="left" class="Estilo11"><strong>
              <? 
					if($_POST['dni'] != "")
						{
							$dni = $_POST['dni'];
							$sql = "select * from agentes2 where docu =".$dni;
							if(mysql_query($sql,$conexion_mysql))
								$res = (mysql_query($sql,$conexion_mysql));
								else
									echo "NO SE PUEDO CONECTAR CON LA BASE DE DATOS";
							$fila = (mysql_fetch_array($res));
								echo "AGENTE: ".$fila['nomb']." /// DNI: ".(number_format($fila['docu'],0,"","."));
						}
						else
							{
								if(isset($_POST['nomb']))
								{
									$nomb = $_POST['nomb'];
									$sql = "select * from agentes2 where id =".$nomb;
									if(mysql_query($sql,$conexion_mysql))
										$res = (mysql_query($sql,$conexion_mysql));
										else
											echo "NO SE PUEDO CONECTAR CON LA BASE DE DATOS";
									$fila = (mysql_fetch_array($res));
										echo "AGENTE: ".$fila['nomb']." /// DNI: ".$fila['docu'];
								}
							}?>			
                </strong></div></td>
   		</tr>
		</table>
		<BR>
		<BR>
		<table width="75%" border="3" align="center" cellpadding="1" bordercolor="#FF0000">
		<tr>
   		  <td width="14%" bgcolor="#CCCCCC"><div align="center"><strong>Nº ESCUELA</strong></div></td>
			<td width="28%" bgcolor="#CCCCCC"><div align="center"><strong>NOMBRE DE ESTABLECIMIENTO</strong></div></td>
    		<td width="9%" bgcolor="#CCCCCC"><div align="center"><strong>CARGO</strong></div></td>
			<td width="11%" bgcolor="#CCCCCC"><div align="center"><strong>ANTIGÛEDAD</strong></div></td>
    		<td width="7%" bgcolor="#CCCCCC"><div align="center"><strong>HORAS</strong></div></td>
			<td width="7%" bgcolor="#CCCCCC"><div align="center"><strong>DIAS</strong></div></td>
			<td width="7%" bgcolor="#CCCCCC"><div align="center"><strong>AREA</strong></div></td>
			<td width="17%" bgcolor="#CCCCCC"><div align="center"><strong>S. REVISTA</strong></div></td>
  	  	</tr>
		<?
			if(isset($_POST['mes']) and ($_POST['anio']))
				{
					$anio = $_POST['anio'];
					$mes = $_POST['mes'];
					$cons = "l".$anio.$mes;
				}
				else
					header("location:revista.php?error=1");
			$sql = "select * from ".$cons." where docu = ".$fila['docu'];
			if(mysql_query($sql,$conexion_mysql))
				$res_liq = (mysql_query($sql,$conexion_mysql));
				else
					header("location:revista.php?error=3");
			while($fila_liq = (mysql_fetch_array($res_liq)))
				{?>
			<tr>
   			  <td width="14%"><div align="center"><? echo $fila_liq['escu'];?></div></td>
				<td width="28%"><div align="center"><? echo $fila_liq['escu'];?></div></td>
    			<td width="9%"><div align="center"><? echo $fila_liq['cargo'];?></div></td>
				<td width="11%"><div align="center"><? echo $fila_liq['anti'];?></div></td>
    			<td width="7%"><div align="center"><? echo $fila_liq['hora'];?></div></td>
				<td width="7%"><div align="center"><? echo $fila_liq['dias'];?></div></td>
				<td width="7%"><div align="center"><strong><? echo $fila_liq['area'];?></strong></div></td>
				<td width="17%"><div align="center"><strong>
		        <? 
														if(($fila_liq['area'] == "MEDIO") or ($fila_liq['area'] == "SUPER"))
																echo "En verificacion de POF";
																else
																	{
																		$sql = "select * from situacion where id =".$fila_liq['plan'];
																		if(mysql_query($sql,$conexion_mysql))
																			$res_sit = mysql_query($sql,$conexion_mysql);
																			else
																				echo "ERROR NO SE PUDO CONECTAR CON SITUACIONES";
																		$fila_sit = (mysql_fetch_array($res_sit));
																		echo $fila_sit['desc'];
																	}
				?>
				</strong></div></td>
  	  		</tr>
			<? }?>
		</table>
		<BR>
		<BR>
		</table>
		 <table width="75%" height="81" border="5" align="center" cellpadding="20" bordercolor="#FF0000" class="Estilo8">
		<tr>
          <td width="13%" height="67" align="center" valign="middle"><A HREF="index2.php"><img src="image/INICIO.jpg" width="69" height="69"></A></td>
          <td width="36%" height="67"><div align="center" class="CompanyName">
            <button type="submit" class="Estilo9" onClick="window.print();return false"> Imprimir </button>
          </div></td>
          <td width="18%" align="center">
		  	<input name="button" class="Estilo9" type="button" title="Exportar a Excel" 
			onClick="window.location='expo.php?cons=<? echo $cons;?>&dni=<?php echo $_POST['dni']?>&nomb=<?php echo $_POST['nomb'];?>'" value="Exportar a excel">		  </td>
          <td width="18%" align="center">
		  	<input name="button" class="Estilo9" type="button" title="Exportar a TXT" 
			onClick="window.location='txt.php?cons=<? echo $cons;?>&dni=<?php echo $_POST['dni']?>&nomb=<?php echo $_POST['nomb'];?>'" value="Exportar a TXT"></td>
          <td width="15%" height="67" align="center" valign="middle"><A HREF="revista.php"><img src="image/BACK.jpg" width="69" height="69"></A></td>
		</tr>
       </table>
	   
	  <br>
 <TABLE width="75%" height="17" border=0 cellPadding=0 cellSpacing=0>
        <TR>
          <TD bgColor="#008000" height=13 rowSpan=2 width="18%">&nbsp;</TD>
          <TD bgColor=#FF0000 rowSpan=2 width="9%">&nbsp;</TD>
          <TD bgColor=#0000FF height=13 rowSpan=2 width="15%">&nbsp;</TD>
          <TD bgColor=#FF0000 height=13 rowSpan=2 width="14%">&nbsp;</TD>
          <TD bgColor="#008000" height=13 rowSpan=2 width="44%">&nbsp;</TD>
        </TR>
        <TR></TR>
      </TABLE>
		<TABLE align=center border=0 cellPadding=0 cellSpacing=0 width="75%">
        <TR>
          <TD width="2%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="3%">&nbsp;</TD>
          <TD bgColor="#008000" width="2%">&nbsp;</TD>
          <TD width="5%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD bgColor=#FF0000 width="2%">&nbsp;</TD>
          <TD width="11%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="5%">&nbsp;</TD>
          <TD bgColor=#0000FF width="2%">&nbsp;</TD>
          <TD width="7%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="16%">&nbsp;</TD>
          <TD bgColor="#008000" width="2%">&nbsp;</TD>
          <TD width="12%">&nbsp;</TD>
          <TD width="2%">&nbsp;</TD>
          <TD width="16%">&nbsp;</TD>
          <TD bgColor="#008000" width="3%">&nbsp;</TD>
        </TR>
        </TABLE>
<br>
<br>
<table width="75%" border="1" cellpadding="2" bordercolor="#008000">
	  <Td height="20">
	    <div align="center"><FONT color=#3169a5 face="Arial, Helvetica, sans-serif" size=2><strong>Copyright 2013. Gaston Francisco Cipolatti. Todos los Derechos Reservados</strong>.</FONT></div></Td>
</table>
    </div>
</BODY>
</HTML>
