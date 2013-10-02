<?

	include("conectar.php");
	$nomb="";

	$cons = $_GET['cons'];
	$dni = $_GET['dni'];
	$nomb = $_GET['nomb'];
	
	$txt=fopen("expo.txt","w");
	if(!$txt)
		echo "ERROR AL CREAR EL ARCHIVO";
	@fputs($txt,"Nº Escuela");
	@fputs($txt,"\t");
	@fputs($txt,"Nombre Escuela");
	@fputs($txt,"\t");
	@fputs($txt,"Cargo");
	@fputs($txt,"\t");
	@fputs($txt,"Antiguedad");
	@fputs($txt,"\t");
	@fputs($txt,"Nº Horas");
	@fputs($txt,"\t");
	@fputs($txt,"Dias");
	@fputs($txt,"\t");
	@fputs($txt,"Area");
	@fputs($txt,"\t");
	@fputs($txt,"S. Revista");
	@fputs($txt,"\n");
?>
<HEAD>
<TITLE>EduLiq - La Rioja</TITLE>
</HEAD>
        <table width="75%" border="5" align="center" cellpadding="1" bordercolor="#FF0000">
          <tr>
            <td height="35" colspan="3" bgcolor="#CCCCCC"><span class="Estilo11"><strong><span class="Estilo11">
            </strong>
            </span>
              <div align="left" class="Estilo11"><strong>
              <? 
					if($dni != "")
						{
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
								if($nomb != "")
								{
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
			
			$sql = "select * from ".$cons." where docu = ".$fila['docu'];
			if(mysql_query($sql,$conexion_mysql))
				$res_liq = (mysql_query($sql,$conexion_mysql));
			while($fila_liq = (mysql_fetch_array($res_liq)))
				{
					$escu=$fila_liq['escu'];
					$escu=$fila_liq['escu'];
					$cargo=$fila_liq['cargo'];
					$anti=$fila_liq['anti'];
					$hora=$fila_liq['hora'];
					$dias=$fila_liq['dias'];
					$area=$fila_liq['area'];
					@fputs($txt,"   ".$escu."      ");
					@fputs($txt,"\t");
					@fputs($txt,$escu);
					@fputs($txt,"\t");
					@fputs($txt,$cargo);
					@fputs($txt,"\t");
					@fputs($txt,$anti);
					@fputs($txt,"\t");
					@fputs($txt,$escu);
					@fputs($txt,"\t");
					@fputs($txt,$hora);
					@fputs($txt,"\t");
					@fputs($txt,$dias);
					@fputs($txt,"\t");
					@fputs($txt,$areas);
					@fputs($txt,"\n");?>
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
          <? }
		  
		  		@fclose($txt);
				require_once("zipfile.php");
				
				$zipfile=new zipfile();
				$zipfile->add_file(implode("",file("expo.txt")), "expo.txt");

				header("Content-type: application/octet-stream");
				header("Content-disposition: attachment; filename=expo.zip");
				echo $zipfile->file();
			?>
          </table>
