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
.Estilo2 {
	font-size: 12px;
	font-weight: bold;
}
.Estilo4 {font-size: 16px}
.Estilo5 {color: #000033}
.Estilo8 {color: #FF0000}
.Estilo9 {
	font-size: 12pt;
	font-weight: bold;
}
.Estilo10 {color: #0000FF; font-size: 16px; }

-->

</STYLE>

<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</HEAD>
<?
	$error="";
	if(isset($_GET['error']) and ($_GET['error']==1))
			$error = "DEBE DEFINIR UNA FECHA DE CONSULTA";
	if(isset($_GET['error']) and ($_GET['error']==3))
			$error = "NO SE PUDO REALIZAR LA CONEXION - INTENTE NUEVAMENTE";

	session_start();
	include("conectar.php");
	
	$sql = "select * from agentes2";
	if(mysql_query($sql,$conexion_mysql))
		$resultado = (mysql_query($sql,$conexion_mysql));
		else
			echo "NO SE PUEDO CONECTAR CON LA BASE DE DATOS";
		
?>
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
	  <table width="75%" height="432" border="5" cellpadding="20" bordercolor="#FF0000">
        <tr>
          <td height="98" colspan="2" rowspan="2"><div align="center" class="Estilo2">
              <form name="rev" method="post" action="revista2.php"/>
              <span class="Estilo4"><font color=#3169a5>Ingrese el Periodo de Liquidación</font> </span>
              <select name="mes">
                <option value="0">Elija el MES</option>
                <option value="01">ENERO</option>
                <option value="02">FEBRERO</option>
                <option value="03">MARZO</option>
                <option value="04">ABRIL</option>
                <option value="05">MAYO</option>
                <option value="06">JUNIO</option>
                <option value="07">JULIO</option>
                <option value="08">AGOSTO</option>
                <option value="09">SEPTIEMBRE</option>
                <option value="10">OCTUBRE</option>
                <option value="11">NOVIEMBRE</option>
                <option value="12">DICIEMBRE</option>
              </select>
              <font color=#3169a5>del año</font>
              <select name="anio">
                <option value="0">Año</option>
                <?
				$anio = date("Y");
				for($i=$anio;$i>2012;$i--)
					{
						echo '<option value="'.$i.'">'.$i.'</option>';
						echo "<br>";
					}
			?>
              </select>
          </div></td>
          <td width="33%" align="center" valign="top"><div align="center" class="Estilo8">
            <p class="Estilo9">ALERTAS</p>
            </div></td>
        </tr>
        <tr>
          <td align="center" valign="top"><div align="center" class="Estilo10"><? echo $error;?></div></td>
        </tr>
        <tr>
          <td width="33%"><div align="center" class="Estilo2">
              <div align="right"><span class="Estilo4"><strong><font color=#3169a5>Ingrese el DNI del Agente: </font><font color=#3169a5></font></strong></span></div>
          </div></td>
          <td width="34%" class="Estilo4"><div align="left" class="Estilo5">
              <div align="center">
                <p align="left">
                  <input name="dni" type="text" size="40"/>
                </p>
            </div>
          </div></td>
		  <td width="33%" rowspan="4" align="center" valign="top"><div align="center"><img src="image/LOGO MISTERIO DE EDUC4x4.jpg" width="273" height="245"></div></td>
        </tr>
        <tr>
          <td height="60" colspan="2" class="Estilo4"><div align="center" class="Estilo2">
              <div align="center" class="Estilo4">
                <h4><strong><font color=#3169a5>Busqueda por Apellido y Nombre (si desconoce el DNI)</font></strong></h4>
              </div>
          </div></td>
        </tr>
        <tr>
          <td width="33%" height="50"><div align="center" class="Estilo2">
              <div align="right"><span class="Estilo4"><strong><font color=#3169a5>Apellido y Nombre del Agente: </font><font color=#3169a5></font></strong></span></div>
          </div></td>
          <td width="34%" class="Estilo4"><div align="left" class="Estilo5">
              <select name="nomb">
                <option value="0">Ingrese el Apellido y Nombre</option>
                <?
		$sql = "select * from agentes2";
		if(mysql_query($sql,$conexion_mysql))
			$res2 = (mysql_query($sql,$conexion_mysql));
			else 
				echo "NO SE PUDO REALIZAR LA CONSULTA";
		while($fila2 = (mysql_fetch_array($res2)))
			{?>
                <option size="40" value="<? echo $fila2['id'];?>"><? echo $fila2['nomb'];?></option>
                <? }?>
              </select>
          </div></td>
        </tr>
        <tr>
          <td height="86" colspan="2"><div align="center"><span class="Estilo8"></span>
                  <input name="Submit" type="submit" class="CompanyName" value="CONSULTAR">
          </div>		  </td>
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
