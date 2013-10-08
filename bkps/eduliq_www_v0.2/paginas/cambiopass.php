<HTML>
<HEAD>
<TITLE>EduLiq - Cambio de Password</TITLE>
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
.Estilo1 {color: #0000FF}
.Estilo3 {color: #ffcc00}
.Estilo4 {
	color: #82A85E;
	font-weight: bold;
}
.Estilo5 {
	color: #FF0000;
	font-weight: bold;
}
.Estilo8 {color: #FF0000; font-weight: bold; font-size: 12pt; }

-->

</STYLE>
</HEAD>
<BODY bgColor=#ffffff>
<?
	session_start();
	$usuario = $_SESSION["usuario"];
	
	include("conectar.php");
	
	$sql = "select * from usuarios where usuario = '$usuario'";
	if(mysql_query($sql,$conexion_mysql))
		$resultado = (mysql_query($sql,$conexion_mysql));
		else
			echo "ERROR NO SE PUDO CONECTAR CON LA BASE DE DATOS";
	$fila = (mysql_fetch_array($resultado));	
?>
<DIV align=center>
<br>
<br>
<br>
<TABLE align=center border=0 cellPadding=0 cellSpacing=0 width="75%">
  <TR>
    <TD width="2%">&nbsp;</TD>
    <TD width="2%">&nbsp;</TD>
    <TD width="3%">&nbsp;</TD>
    <TD bgColor=#82A85E width="2%">&nbsp;</TD>
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
    <TD bgColor=#82A85E width="2%">&nbsp;</TD>
    <TD width="12%">&nbsp;</TD>
    <TD width="2%">&nbsp;</TD>
    <TD width="16%">&nbsp;</TD>
    <TD bgColor=#82A85E width="3%">&nbsp;</TD>
  </TR>
</TABLE>
<TABLE border=0 cellPadding=0 cellSpacing=0 width="75%">
  <TR>
    <TD bgColor=#82A85E height=13 rowSpan=2 width="18%">&nbsp;</TD>
    <TD bgColor=#FF0000 rowSpan=2 width="9%">&nbsp;</TD>
    <TD bgColor=#0000FF height=13 rowSpan=2 width="15%">&nbsp;</TD>
    <TD bgColor=#FF0000 height=13 rowSpan=2 width="14%">&nbsp;</TD>
    <TD bgColor=#82A85E height=13 rowSpan=2 width="44%">&nbsp;</TD>
  </TR>
  <TR></TR>
</TABLE>
<TABLE border=0 cellPadding=0 cellSpacing=0 width="75%">
  <TR>
    <TD height=50><DIV align=center class=CompanyName>
      <div align="center" class="Estilo4">  EduLiq - Cambio de Password</div>
    </DIV></TD>
  
  </TR>
  <TR>
    <TD colSpan=2>
      <TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
        <TR><TD bgColor=#ffcc00 height=1><DIV align=center><IMG height=1 src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width=1></DIV></TD></TR>
	  </TABLE>
	</TD>
  </TR>
  <TR>
    <TD colSpan=2 height=12>
      <DIV align=center></DIV>
	</TD>
  </TR>
  <TR>
    <TD colSpan=2>
      <DIV align=left>
      <TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
        <TR><TD bgColor=#ffcc00 height=2><DIV align=center><IMG height=1 src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width=1></DIV></TD></TR>
	  </TABLE>
	  </DIV>
    </TD>
  </TR>
</TABLE>
</DIV>
<TABLE align=center border=0 cellPadding=0 cellSpacing=0 width="75%">
  <TR>
    <TD width=316 height=393 align="center" vAlign=middle><BR>      <img src="image/login_img.gif" width="332" height="352">    </TD>
    <TD height=393 vAlign=top width="354"><div align="center">
      <p><BR>
        <BR>
        <span class="Estilo8">&iexcl;&iexcl;&iexcl; ADVERTENCIA !!! </span></p>
      <p><span class="Estilo5">El Password debe ser de nueve (9) caracteres alfanumericos como maximo </span><BR>
        <BR>
        <BR>
        <BR>
        </p>
    </div>
      <TABLE bgColor=#ffffff border=0 cellPadding=0 cellSpacing=0 width="100%">
        <TR>
          <TD><div align="center"></div></TD>
        </TR>
	  </TABLE>
	   
	   <TABLE width="101%" height="173" border=0 cellPadding=0 cellSpacing=0 bgColor=#ffffff>
		<tr>
			<th>			</th>
		</tr>
		<tr bgcolor="#F0F0F0">
		  <th colspan="2" bgcolor="#ffcc00" bordercolor="3"><div align="center">
		  	<form name="session" method="post" action="cambiopass2.php"/></div>
		  </th>
		</tr>
		<tr>
			<th bordercolor="3" bgcolor="#66AADD"><div align="right"><span class="Estilo1">USUARRIO:</span> </div></th>
			<td width="50%" bordercolor="3" bgcolor="#FFFF66"><input name="usuario" type="text" size="30" value="<? echo $usuario;?>"/></td>
		</tr>
		<tr>
			<th bordercolor="3" bgcolor="#FFFFFF"></th>
		</tr>
		<tr bgcolor="#F0F0F0">
		  <th colspan="2" bgcolor="#ffcc00" bordercolor="3"><div align="right"><span class="Estilo3">PASSWORD:</span> </div></th>
		 </tr>
		<tr>
		  <th bordercolor="3" bgcolor="#66AADD"><div align="right"><span class="Estilo1">PASSWORD:</span> </div></th>
			<td width="50%" bordercolor="3" bgcolor="#FFFF66">
				<input name="pass" type="password" size="30"/>
				<input name="id" type="hidden" size="30" value="<? echo $fila['id'];?>"/>
				<input name="tipo" type="hidden" size="30" value="<? echo $fila['tipo'];?>"/>			
			</td>
		</tr>
		<tr bgcolor="#F0F0F0">
		  <th height="25" colspan="2" bordercolor="3" bgcolor="#ffcc00"><div align="center"></div></th>
		 </tr>
		 <tr bgcolor="#F0F0F0">
		  <th colspan="2" bgcolor="#ffcc00" bordercolor="3"><div align="center">
		    
		      <label>
		        <input name="Submit" type="submit" class="Estilo4" value="CAMBIAR PASSWORD">
	          </label>
		      </form>
		    </div></th>
		 </tr>
		 <tr bgcolor="#F0F0F0">
		  	<th height="25" colspan="2" bordercolor="3" bgcolor="#ffcc00"><div align="center"></div></th>
    </TABLE>   	</TD>
        <TD width=187 height=393 align="center" vAlign=middle bgColor=#ffffff><div align="center"><img src="image/LOGO MISTERIO DE EDUC4x4.jpg" width="283" height="291"><br>
        </div></TD>
  </TR>
  <TR vAlign=top>
    <TD colSpan=4>
      <DIV align=right>
      <TABLE border=0 cellPadding=0 cellSpacing=0 width="80%">
        <TR bgColor=#ffcf00>
          <TD height=1><DIV align=right><IMG height=1 src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width=1></DIV></TD>
		</TR>
	  </TABLE>
      <TABLE border=0 cellPadding=0 cellSpacing=0 width="90%">
        <TR bgColor=#949231>
          <TD height=2><DIV align=right><IMG height=1 src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width=1></DIV></TD>
		</TR>
	  </TABLE>
      <DIV align=center>
		<FONT color=#3169a5 face="Arial, Helvetica, sans-serif" size=2><strong>Copyright 2013. Gaston Francisco Cipolatti. Todos los Derechos Reservados</strong>.</FONT>
	  </DIV>
      <TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
        <TR bgColor=#006500>
          <TD height=3><DIV align=right><IMG height=1 src="file:///E|/150DreamweaverTemplates/music/image/pixel.gif" width=1></DIV></TD>
		</TR>
	  </TABLE>
	  </DIV>	</TD>
  </TR>
</TABLE>
</BODY>
</HTML>
