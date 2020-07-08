<?php  
	/*<®> Includes <®>*/
		include_once 'main/fxs.php';
	
	session_start();
	//var_dump($_SESSION);
	if (isset($_SESSION['usr'])) {
		/*<®> Vars <®>*/
			$u = $_SESSION['usr'];
		/*<®> Obtengo los datos del usuario <®>*/
			$sql   = "SELECT * FROM usuarios WHERE usr='$u'";
			$reg_u = mysql_fetch_array(ejecutar($sql));
		/*<®> Vars Usuario <®>*/
			$usr_nomb = utf8_encode($reg_u['nomb'].' '.strtoupper($reg_u['ape']));
		/*<®> Obtengo los datos del perfil <®>*/
			$p     = $reg_u['idperfil'];
			$sql   = "SELECT * FROM perfiles WHERE id='$p'";
			$reg_p = mysql_fetch_array(ejecutar($sql));
		/*<®> Armo el mensaje de resultado <®>*/
			$msj_tit = "Bienvenido $usr_nomb";
			$msj_desc = "Ud. se ha logeado exitosamente en EduLiq.";
?>

			<div class="topbox">
				<div class="overlay-container" style="display: none;">
					<div class="msjlogin-container zoomin">
						<center>
							<div id="msj">
								<h3><?php echo $msj_tit; ?></h3> 
								<?php echo $msj_desc; ?>
								<br>
								<br>
							</div>
							<span class="loginclose" align="center">Cerrar</span>
						</center>
					</div>
				</div>
			</div><br class="clear">
<?php 
	} 
?>
