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


-->

</STYLE>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</HEAD>
<?
	session_start();
	if($_SESSION['tipo'] != "pers")
		header("location:noacces.php");	
	
	require_once("conectar.php");
?>
<BODY onLoad="limpiar();" bgColor=#ffffff>
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
      <TABLE align=center border=0 cellPadding=0 cellSpacing=0 width="90%">
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
      <TABLE width="91%" height="21" border=0 cellPadding=0 cellSpacing=0>
        <TR>
          <TD bgColor="#008000" height=13 rowSpan=2 width="18%">&nbsp;</TD>
          <TD bgColor=#FF0000 rowSpan=2 width="9%">&nbsp;</TD>
          <TD bgColor=#0000FF height=13 rowSpan=2 width="15%">&nbsp;</TD>
          <TD bgColor=#FF0000 height=13 rowSpan=2 width="14%">&nbsp;</TD>
          <TD bgColor="#008000" height=13 rowSpan=2 width="44%">&nbsp;</TD>
        </TR>
        <TR></TR>
      </TABLE>
      <TABLE border=0 cellPadding=0 cellSpacing=0 width="91%">
        <TR>
          <TD width="65%" height=47><DIV align=center class=CompanyName>
            <div align="left"><strong>Personal - Horas Extras </strong></div>
          </DIV></TD>
      <TD width="35%" align="center" vAlign=middle bgcolor="#CCCCCC"><div align="right"><B><FONT size=2>Bienvenido Usuario: <? echo $_SESSION['usuario'];?></FONT></B></div></TD>
      </TR>
        <TR>
          <TD colSpan=2>
            <div align="center">
              <TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
                <TR><TD bgColor=#ffcc00 height=1><DIV align=center><img src="image/pixel.gif" width=1 height=1></DIV></TD></TR>
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
              <A href="salir.php"><font color="#3169a5">Salir</font></A><FONT color=#ff9900> | </FONT>             </div>          </TD>
	  </TR>
      </table>
  
	  <br>
	  <table width="75%" border="5" align="center" cellpadding="" bordercolor="#006600">
	  	<form name="form1" method="POST" action="export2.php">
		<tr>
   		  <td width="6%" bgcolor="#CCCCCC"><div align="center"><strong>NOV</strong></div></td>
   		    <td width="5%" bgcolor="#CCCCCC"><div align="center"><strong>TIPO</strong></div></td>
   		    <td width="9%" bgcolor="#CCCCCC"><div align="center"><strong>DOCU</strong></div></td>
			<td width="7%" bgcolor="#CCCCCC"><div align="center"><strong>TRAB</strong></div></td>
   		    <td bgcolor="#CCCCCC"><div align="center"><strong>NOMB</strong></div></td>
   		    <td width="5%" bgcolor="#CCCCCC"><div align="center"><strong>SEXO</strong></div></td>
   		    <td width="7%" bgcolor="#CCCCCC"><div align="center"><strong>VAL</strong></div></td>
   		    <td width="9%" bgcolor="#CCCCCC"><div align="center"><strong>COD</strong></div></td>
   		    <td width="7%" bgcolor="#CCCCCC"><div align="center"><strong>DESDE</strong></div></td>
   		    <td width="17%" bgcolor="#CCCCCC"><div align="center"><strong>HASTA</strong></div></td>
   		    <td width="7%" bgcolor="#CCCCCC"><div align="center"><strong>AREA</strong></div></td>
   		    <td width="11%" bgcolor="#CCCCCC"><div align="center"><strong>ESCU</strong></div></td>
		</tr>
		<tr>
		<td width="6%" bgcolor="#FFFFFF"><div align="center"><strong>
		  	<select name="nov">
				<option value="0">--</option>
				<option value="CE">CE</option>
				<option value="AD">AD</option>
			</select>		  
		  </strong></div>		  </td>
   		  <td width="5%" bgcolor="#FFFFFF"><div align="center"><strong>
			<select name="tip">
				<option value="0">--</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="M">M</option>
			</select>		
		  </strong></div>		  </td>
  		  <td width="9%" bgcolor="#FFFFFF"><div align="center"><strong>
			<?
				$sql = "select * from agentes2 order by docu asc";
					if(mysql_query($sql,$conexion_mysql))
						$resultado = (mysql_query($sql,$conexion_mysql));
			?>
  		    
			<select name="docu" onChange="from(document.form1.docu.value,'trab','trab.php')">
              <option value="0">Elija DNI</option>
              <? 
					while($fila = (mysql_fetch_array($resultado)))
						{
							$id = $fila['id'];
							$docu = $fila['docu'];?>
						  <option value="<? echo $id;?>"><? echo $docu;?></option>
              			<? }?>
            </select>
  		  </strong></div>		  </td>
	      <td width="7%" bgcolor="#FFFFFF"><div align="center">
	        <div align="center"><strong>
              <div id="trab"><strong><strong><strong>
              <select name="trab">
			  	<? //<option value="0">Trab</option>?>
              </select>
              </strong></strong></strong></div>
	          </strong></div>
	      </div>	        </td>
   		  <td bgcolor="#FFFFFF"><div align="center"><strong><strong>
   		    <div id="nomb"><strong><strong><strong><strong><strong><strong>
   		      <select name="nomb">
                <option value="0">Nomb</option>
              </select>
   		    </strong></strong></strong></strong></strong></strong></div>
   		  </strong></strong></div>   		    </td>
   		  <td width="5%" bgcolor="#FFFFFF"><strong>
   		    <select name="sex">
              <option value="0">--</option>
              <option value="F">F</option>
              <option value="M">M</option>
            </select>
   		  </strong></td>
   		  <td width="7%" bgcolor="#FFFFFF"><div align="center"><strong>
			<input name="val" type="text" size="10"/>
		  </strong></div>		  </td>
   		  <td width="9%" bgcolor="#FFFFFF"><div align="center"><strong>
				<select name="cod">
              <option value="0">Códigos</option>
              <? 
					$sql = "select * from codigos";
					if(mysql_query($sql,$conexion_mysql))
						$res_cod = (mysql_query($sql,$conexion_mysql));
					while($fila_cod = (mysql_fetch_array($res_cod)))
						{?>
              				<option value="<? $fila_cod['id'];?>"><? echo $fila_cod['codi'];?></option>
              			<? }?>
            </select>		
		  </strong>
		  </div>		  </td>
   		  <td width="7%" bgcolor="#FFFFFF"><div align="center"><strong>
			<input name="desde" type="date" size="10"/>
		  </strong></div>		  </td>
   		  <td width="17%" bgcolor="#FFFFFF"><div align="center"><strong>
		  	<input name="hasta" type="date" size="10"/>
		  </strong></div>		  </td>
   		  <td width="7%" bgcolor="#FFFFFF"><div align="center"><strong>
          <div id="area">
		  <select name="area">
            <? //<option value="0">Area</option>?>
          </select>
		  </div>
          </strong></div>		  </td>
   		  <td width="11%" bgcolor="#FFFFFF"><div align="center"><strong>
		  <div id="escu">
		  <select name="escu">
             <? // <option value="0">Escu</option>?>
		  </select>
		  </div>
		  </strong></div>		  </td>
		</tr>
		<tr>
			<td width="6%" height="30" bgcolor="#CCCCCC"><div align="center"><strong>OBSERV</strong></div></td>
			<td colspan="11" bgcolor="#FFFFFF"><div align="left">
			  <input name="obs" type="text" size="130"/>
			</div></td>
		</tr>
		
		<tr>
			<td width="6%" height="30" colspan="13" bgcolor="#CCCCCC"><div align="center" class="CompanyName">
				<input name="export2" type="submit" class="CompanyName" value="CARGAR">
			</div></td>
		</tr>
		</form>
		</table>
		<br>
		<BR>
<table width="74%" height="119" border="5" align="center" cellpadding="20" bordercolor="#000099" class="Estilo8">
		<tr>
          <td width="13%" height="115" align="center" valign="top"><A HREF="index2.php"><img src="image/INICIO.jpg" width="69" height="69"></A></td>
          <td width="72%" height="115" align="center" valign="top"><div align="center" class="CompanyName">
            <button type="submit" class="Estilo9" onClick="window.print();return false"> Imprimir </button>
          </div></td>
          <td width="15%" height="115" align="center" valign="top"><A HREF="historico.php"><img src="image/BACK.jpg" width="69" height="69"></A></td>
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
