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
.Estilo13 {
	color: #000066;
	font-weight: bold;
}
.Estilo15 {
	color: #FF0000;
	font-size: 12pt;
	font-weight: bold;
}
.Estilo16 {font-size: 18px}

-->

</STYLE>
</HEAD>
<?
	$error="";
	if(isset($_GET['error']) and ($_GET['error']==2))
			$error = "INGRESE EL DNI O NOMBRE DEL AGENTE";

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
            <div align="left"><B>Historico</B></div>
          </DIV></TD>
      <TD width="35%" align="center" vAlign=middle bgcolor="#CCCCCC"><div align="right"><B><FONT size=2>Bienvenido Usuario: <? echo $_SESSION['usuario'];?></FONT></B></div></TD>
      </TR>
        <TR>
          <TD colSpan=2>
            
            <div align="center">
              <TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
                <TR><TD bgColor=#ffcc00 height=1><DIV align=center><IMG height=1 src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width=1></DIV></TD></TR>
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
	  <form name="hist" method="post" action="historico2.php"/>
	  <table width="75%" height="130" border="5" cellpadding="20" bordercolor="#000099" class="Estilo4">
        <tr align="center" valign="middle">
          <td colspan="2" class="Estilo4 Estilo13">Ingrese el DNI del Agente: 	        
          <input name="dni" type="text" size="40"/>		  </td>
        </tr>
        <tr>
          <td width="11%"><span class="Estilo15">ALERTAS</span></td>
          <tD width="89%" align="center" valign="middle"><span class="Estilo16 Estilo8"><? echo $error;?></span></td>
        </tr>
        </table>
		<br>
		<table width="75%" border="5" cellpadding="20" bordercolor="#000099">
		<tr>
          
		  <td width="34%" rowspan="3" align="center" valign="top"><div align="center"><img src="image/LOGO MISTERIO DE EDUC4x4.jpg" width="210" height="160"></div></td>
        </tr>
        <tr>
          <td colspan="2" align="center" valign="middle" class="Estilo4"><div align="center" class="Estilo2">
              <div align="center" class="Estilo4">
                <h4><strong><font color=#3169a5>Busqueda por Apellido y Nombre (si desconoce el DNI)</font></strong></h4>
              </div>
          </div></td>
        </tr>
        <tr>
          <td width="35%" height="64" align="center" valign="middle"><div align="center" class="Estilo2">
              <div align="right"><span class="Estilo4"><strong><font color=#3169a5>Apellido y Nombre del Agente: </font><font color=#3169a5></font></strong></span></div>
          </div></td>
          <td width="31%" align="center" valign="middle" class="Estilo4"><div align="left" class="Estilo5">
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
		</table>
		<br>
		<table width="75%" border="5" cellpadding="20" bordercolor="#000099">
        <tr>
          <td height="115"><div align="center"><span class="Estilo8"></span><a href="index2.php"><img src="image/INICIO.jpg" width="69" height="69"></a></div></td>
          <td height="115"><div align="center">
            <input name="Submit" type="submit" class="CompanyName" value="HISTORICO">
			</form>
          </div></td>
          <td height="115"><div align="center"><a href="salir.php"><img src="image/salir.jpg" width="69" height="69"></a></div></td>
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
