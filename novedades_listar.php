<?php  
	/*<®> Includes <®>*/
		include_once 'main/fxs.php';
	/*<®> Variables <®>*/
		if(isset($_SESSION['usr_id'])){
			$usr_id = $_SESSION['usr_id'];
			//echo $usr_id;
		}else
			header('location:index.php');
	/*<®> Agregar Novedad nueva <®>*/
		//var_dump($_POST);
		if(isset(
			$_POST['idconcepto'], 
			$_POST['idtiposnov'], 
			$_POST['idcod_usr'], 
			$_POST['ida_p_c_ea'], 
			$_POST['monto_int'] 
			)){
				/*<®> Vars Input <®>*/
					$idconcepto = $_POST['idconcepto'];
					$idtiposnov = $_POST['idtiposnov'];
					$idcod_usr  = $_POST['idcod_usr'];
					$ida_p_c_ea = $_POST['ida_p_c_ea'];
					$idnov_estado = '1'; 
					/*<®> Monto <®>*/
						/*<®> Paso a enteros <®>*/
						$monto_int  = $_POST['monto_int'] + 0;
						$monto_desc = (isset($_POST['monto_dec'])) ? $_POST['monto_dec'] + 0 : 0 ;
						/*<®> Relleno con ceros <®>*/
						$monto_int  = str_pad($monto_int, 6, "0", STR_PAD_LEFT);
						$monto_desc = str_pad($monto_desc, 2, "0", STR_PAD_LEFT);
					$monto = "$monto_int.$monto_desc";
					/*<®> idperiodo <®>*/
						$q = "SELECT p.id 
								FROM liqs l
								INNER JOIN periodos p ON p.id = l.idperiodo
								ORDER BY p.periodo DESC
								LIMIT 0,1";
						$rg = mysql_fetch_array(ejecutar($q));
					$idperiodo = $rg['id'];
					$obs = (isset($_POST['obs'])) ? $_POST['obs'] : '';
				/*<®> Cargo la Novedad <®>*/
					$q = "INSERT INTO novedades
							(idconcepto, idtiposnov, idcod_usr,  
								ida_p_c_ea, idperiodo, idnov_estado, 
								monto, obs)
							VALUES
							('$idconcepto', '$idtiposnov', '$idcod_usr',  
								'$ida_p_c_ea', '$idperiodo', '$idnov_estado', 
								'$monto', '$obs')";
					if(!$rs = ejecutar($q))
						echo "No se pudo cargar la novedad.";
		}
?>
<html>
	 <head> 
		  <script type="text/javascript">
				function verBuscador(visible) {
					switch (visible) {
						case 0:
							document.getElementById("bt_buscador")
								.style.visibility = "visible";
							document.getElementById("txt_buscador")
								.style.visibility = "hidden";
							break;
						case 1:
							document.getElementById("bt_buscador")
								.style.visibility = "hidden";
							document.getElementById("txt_buscador")
								.style.visibility = "visible";
							break;
					}
					//document.getElementById("livesearch").style.border
				}

				function cargarDestino(div) {
					document.getElementById("docu").innerHTML = div.getAttribute('docu');
					document.getElementById("nom").innerHTML = div.getAttribute('nom');
					document.getElementById("sexo").innerHTML = div.getAttribute('sexo');
					document.getElementById("trab").innerHTML = div.getAttribute('trab');
					document.getElementById("escuela").innerHTML = div.getAttribute('escuela');
					document.getElementById("area").innerHTML = div.getAttribute('area');
					document.getElementById("ida_p_c_ea").value = div.getAttribute('ida_p_c_ea')
					document.getElementById("txt_buscador").value = "";
					document.getElementById("livesearch").innerHTML = "";
					document.getElementById("livesearch").style.border = "0px";
					verBuscador(0);
				}

				function showResult(str) {
					if (str.length == 0) {
						document.getElementById("livesearch").innerHTML = "";
						document.getElementById("livesearch").style.border = "0px";
						return;
					}
					if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else { // code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
							document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
						}
					}
					xmlhttp.open("GET", "novedades_buscador.php?q=" + str, true);
					xmlhttp.send();
				}
		  </script>
		  <title></title>
	 </head>
	 <body>
		  <table width="80%" cellspacing="1"><!-- Buscardo de Agente -->
				<tr class="col5">
					 <th height="20" bgcolor="#333333" class="col5">
						  <div align="left">
								<span class="Estilo6">BUSCADOR DE AGENTES</span>
						  </div>
					 </th>
				</tr>
				<tr>
					 <td>
						  <!-- Buscador -->
						  <input name="button" type="button" id="bt_buscador" style="visibility:visible" onClick="verBuscador(1)" value="BUSCAR"> <input name="text" type="text" id="txt_buscador" style="visibility:hidden" onKeyUp="showResult(this.value)" size="10">
					 </td>
				</tr>
				<tr>
					 <td height="16" colspan="2">
						  <div id="livesearch"></div>
					 </td>
				</tr>
		  </table><!-- /Buscardo de Agente -->
		  <br>
		  <br>
		  <br>
		  <form action="#" method="post">
			  <table width="100%"><!-- Nueva Novedad -->
					<input id="ida_p_c_ea" type="hidden" name="ida_p_c_ea">
					<tr><!-- Encabezados -->
						 <td class="col5">
							  <div align="center">
									<strong>DOCU</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>NOMBRE</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>SEXO</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>TRAB</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>ESCUELA</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>AREA</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>CONCEPTO</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>TIPO</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>MONTO</strong>
							  </div>
						 </td>
						 <td class="col5">
							  <div align="center">
									<strong>CODIGO</strong>
							  </div>
						 </td>
					</tr>
					<tr>
						 <!-- Datos -->
						 <td>
							  <div id="docu" align="center"></div>
						 </td>
						 <td>
							  <div id="nom" align="center"></div>
						 </td>
						 <td>
							  <div id="sexo" align="center"></div>
						 </td>
						 <td>
							  <div id="trab" align="center"></div>
						 </td>
						 <td>
							  <div id="escuela" align="center"></div>
						 </td>
						 <td>
							  <div id="area" align="center"></div>
						 </td>
						 <td>
							  <div align="center"><!-- idconcepto -->
									<select name="idconcepto">
										 <?php
																 $q = "SELECT * FROM conceptos";
																 if($rs = ejecutar($q)){?>
										 <option value="0" selected>
											  Elija una Opción
										 </option><?php 
																	 while($conc = mysql_fetch_array($rs)){?>
										 <option value="<?php echo $conc['id'];?>">
											  <?php echo $conc['concepto'];?>
										 </option><?php 
																	 }
																 }
																 ?>
									</select>
							  </div>
						 </td>
						 <td>
							  <div align="center"><!-- idtiposnov -->
									<select name="idtiposnov">
										 <?php
																	 $q = "SELECT * FROM tiposnov";
																	 if($rs = ejecutar($q)){?>
										 <option value="0" selected>
											  Elija una Opción
										 </option><?php 
																		 while($tp = mysql_fetch_array($rs)){?>
										 <option value="<?php echo $tp['id'];?>">
											  <?php echo $tp['tiponov'];?>
										 </option><?php }
																	 }
																 ?>
									</select>
							  </div>
						 </td>
						 <td nowrap="nowrap">
							  <div align="center"><!-- monto -->
									<input name="monto_int" style="text-align:right" type="text" size="6" maxlength="6">
									 . 
									<input name="monto_dec" style="text-align:right" type="text" size="2" maxlength="2" align="right">
							  </div>
						 </td>
						 <td>
							  <div align="center">
									<select name="idcod_usr">
										 <?php
															 $q = "SELECT cu.id as idcu, c.codigo, c.desc 
																	 FROM codigos c
																	 INNER JOIN cod_usr cu ON cu.idcodigo  = c.id
																	 INNER JOIN usuarios u ON cu.idusuario = u.id
																	 WHERE cu.idusuario='$usr_id'";
															 if($rs = ejecutar($q)){?>
										 <option value="0" selected>
											  Elija una Opción
										 </option><?php 
																 while($cod = mysql_fetch_array($rs)){?>
										 <option value="<?php echo $cod['idcu'];?>">
											  <?php echo $cod['codigo'].' - '.$cod['desc'];?>
										 </option><?php }
															 }
														 ?>
									</select>
							  </div>
						 </td>
					</tr>
					<tr>
						 <th width="123">
							  OBSERVACION:
						 </th>
						 <td colspan='10' class="bold">
							  <div align="center" class="Estilo4">
									<div align="left">
										 <input type="text" size="150" name="obs">
									</div>
							  </div>
						 </td>
					</tr>
					<tr>
						 <td height="24" colspan="10">
							  <div align="center">
									<input name="Enviar" type="submit" value="REGISTRAR NOVEDAD">
							  </div>
						 </td>
					</tr>
			  </table><!-- /Nueva Novedad -->
		  </form>
		  <br>
		  <table width="100%"><!-- Listar Novedades -->
				<tr>
					 <!-- Encabezados -->
					 <td class="col5">
						  <div align="center">
								<strong>CONCEPTO</strong>						  </div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>TIPO</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>DOCU</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>SEXO</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>TRAB</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>NOMBRE</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>MONTO</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>CODIGO</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>AREA</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>ESCUELA</strong></div>					 </td>
					 <td class="col5">
						  <div align="center">
								<strong>N.ESTADO</strong>						  </div>					 </td>
				</tr><?php  
							$q = "SELECT p.id, p.periodo 
									FROM liqs l
									INNER JOIN periodos p ON p.id = l.idperiodo
									ORDER BY p.periodo DESC
									LIMIT 0,1";
						if($rs = ejecutar($q)){
							$rg = mysql_fetch_array($rs);
							$ult_per = $rg['id'];

							$q = "SELECT a.docu, 
												a.nom, 
												a.sexo, 
												l.trab, 
												e.escu, 
												e.desc AS edesc, 
												ar.desc AS ardesc, 
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
									INNER JOIN nov_estados ne ON ne.id = n.idnov_estado
									WHERE l.idperiodo =  '$ult_per'
										AND cu.idusuario =  '$usr_id'
										AND ne.id =  '1'";
							if ($rs = ejecutar($q)) {
								while($rg = mysql_fetch_array($rs)){;
						?>
				<tr>
					 <!-- Datos -->
					 <td nowrap><div align="center"><?php echo $rg['concepto']; ?></div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['tiponov']; ?></div></td>
					 <td nowrap><div align="center"><?php echo $rg['docu']; ?>					 </div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['sexo']; ?></div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['trab']; ?></div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['nom']; ?></div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['monto']; ?></div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['codigo']; ?></div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['ardesc']; ?></div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['escu'].' - '.$rg['edesc']; ?></div></td>
					 <td nowrap>
						  <div align="center"><?php echo $rg['nov_estado']; ?>					 </div></td>
				</tr>
				<?php }}}
				 ?>
		  </table>
		  <!-- /Lista de Novedades -->
	 </body>
</html>
<?php unset($_POST);?>