<?php  
	include_once 'main/fxs.php';
	
	$lod_mod  = 'NoLogeado';
	$msj_tit  = 'Bienvenido al sistema EduLiq';
	$msj_desc = 'Sistema Administrativo de Liquidaciones.';
	
	//var_dump($_POST['usr'] != '');
	//var_dump($_POST['pass'] != '');

	if(isset($_POST['usr'], $_POST['pass']) and $_POST['usr'] != '' and $_POST['pass'] != ''){
		/*<®> String Where <®>*/
			$usr  = $_POST['usr'];
			$pass = 'pepe123';
			// $pass = md5($_POST['pass']);
			$tbl  = 'usuarios';
			$wre  = "usr='$usr' AND pass='$pass'";
		/*<®> Verifico el login <®>*/
			if(contarRegs($tbl, $wre) > '0'){
				/*<®> Obtengo los datos del registro del usuario <®>*/
					$sql = "SELECT * FROM $tbl WHERE $wre";
					$reg = mysql_fetch_array(ejecutar($sql));
				/*<®> Datos del usuario <®>*/
					/*<®> Vars de Perfil <®>*/
						$id_perf    = $reg['idperfil'];
						$sql        = "SELECT perfil FROM perfiles WHERE id = $id_perf";
						$perf       = mysql_fetch_array(ejecutar($sql));
					/*<®> Vars de Usuario <®>*/
						$usr_perfil = $perf['perfil'];
						$usr_login  = $reg['usr']." ($usr_perfil)";
						$usr_nomb   = utf8_encode($reg['nomb'].' '.strtoupper($reg['ape']));
						$usr_docu   = number_format($reg['docu'], '0', ",", ".");
						$usr_dir    = utf8_encode($reg['dir']);
						$usr_tel    = $reg['tel'];
						$usr_email  = $reg['email'];
				/*<®> Cargo las Vars de SESSION <®>*/
					session_start();
					$_SESSION['usr']    = $reg['usr'];
					$_SESSION['perfil'] = $reg['idperfil'];
					$lod_mod            = 'Logeado';
					$msj_tit            = "Bienvenido $usr_nomb";
					$msj_desc           = 'Ud. se ha logeado exitosamente en el sistema.';
			}
	}
	//var_dump($lod_mod);
	switch ($lod_mod) {
		/*<®> Login Normal <®>*/
		case 'Logeado': ?>
			<h2>Usuario en el Sistema</h2>
			<div style="text-align:left">Nombre y Apellido:</div>
			<h2><div style="text-align:right; font-style:italic"><?php echo $usr_nomb; ?></div></h2>
			<div style="text-align:left">Usuario:</div>
			<div style="text-align:right"><?php echo $usr_login; ?></div>
			<div style="text-align:left">Documento:</div>
			<div style="text-align:right"><?php echo $usr_docu; ?></div>
			<div style="text-align:left">Dirección:</div>
			<div style="text-align:right"><?php echo $usr_dir; ?></div>
			<div style="text-align:left">Teléfono:</div>
			<div style="text-align:right"><?php echo $usr_tel; ?></div>
			<div style="text-align:left">E-Mail:</div>
			<div style="text-align:right"><?php echo $usr_email; ?></div>
			<!-- largo script del msj -->
			<script type="text/javascript">
				window.setTimeout(function(){
						$('.loginbutton').click();
					}, 1000);
				
			</script>
<?php break;
		/*<®> No Logeado <®>*/
		default: ?>
		<h2>Login del Sistema</h2>
		<form action="#" method="post">
			<fieldset>
				<legend>Formulario de Login</legend> 
				<label for="usr">Usuario: 
					<input type="text" name="usr" id="usr" value="">
				</label> 
				<label for="pass">Contraseña: 
					<input type="password" name="pass" id="pass" value="">
				</label> 
				<p>
					<input type="button" value="Entrar" class="ingresar">
					<input type="submit" name="login" id="login" value="Ingresar"> &nbsp; 
					<input type="reset" name="reset" id="reset" value="Reiniciar">
				</p>
			</fieldset>
		</form>
		<br>
		<br>
		<br>
<?php break;
	} ?>
	<input type="button" value="Cartel" class="loginbutton" data-type="zoomin">
	<div class="overlay-container" style="display: none;">
		<div class="msjlogin-container zoomin">
			<center>
				<h3><?php echo $msj_tit; ?></h3> 
				<?php echo $msj_desc; ?>
				<br>
				<br>
				<span class="loginclose" align="center">Cerrar</span>
			</center>
		</div>
	</div>
