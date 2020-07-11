<?php  
	include_once 'main/fxs.php';
	
	$log_mod  = 'NoLogeado';
	$msj_tit  = 'Bienvenido al sistema EduLiq';
	$msj_desc = 'Sistema Administrativo de Liquidaciones.';
	
	//var_dump($_POST['usr'] != '');
	session_start();
	//var_dump($_SESSION);
	if (isset($_SESSION['usr_id'])) {
		$usr_id = $_SESSION['usr_id'];
		$log_mod  = 'Logeado';
		/*<®> Obtengo los datos del registro del usuario <®>*/
			$q = "SELECT u.*, p.perfil 
					FROM usuarios u
					INNER JOIN perfiles p ON p.id = u.idperfil
					WHERE u.id = $usr_id";
			$rg = mysql_fetch_array(ejecutar($q));
		/*<®> Datos del usuario <®>*/
			$usr_perfil = $rg['perfil'];
			$usr_login = $rg['usr']." ($usr_perfil)";
			$usr_nomb  = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
			$usr_docu  = number_format($rg['docu'], '0', ",", ".");
			$usr_dir   = utf8_encode($rg['dir']);
			$usr_tel   = $rg['tel'];
			$usr_email = $rg['email'];
		/*<®> Cargo las Vars de SESSION <®>*/
			$_SESSION['usr_id'] = $rg['id'];
			$_SESSION['usr']    = $rg['usr'];
			$_SESSION['perfil'] = $rg['idperfil'];
	}

	if(isset($_POST['usr'], $_POST['pass']) 
		and $_POST['usr'] != '' 
		and $_POST['pass'] != ''){
		/*<®> String Where <®>*/
			$usr   = $_POST['usr'];
			$pass  = md5($_POST['pass']);
			$tbl   = 'usuarios';
			$where = "usr='$usr' AND pass='$pass'";
		/*<®> Verifico el login <®>*/
			if(contarRegs($tbl, $where) > '0'){
				/*<®> Obtengo los datos del registro del usuario <®>*/
					$q = "SELECT u.*, p.perfil 
							FROM usuarios u
							INNER JOIN perfiles p ON p.id = u.idperfil
							WHERE $where";
					$rg = mysql_fetch_array(ejecutar($q));
				/*<®> Datos del usuario <®>*/
					$usr_perfil = $rg['perfil'];
					$usr_login = $rg['usr']." ($usr_perfil)";
					$usr_nomb  = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
					$usr_docu  = number_format($rg['docu'], '0', ",", ".");
					$usr_dir   = utf8_encode($rg['dir']);
					$usr_tel   = $rg['tel'];
					$usr_email = $rg['email'];
				/*<®> Cargo las Vars de SESSION <®>*/
					$_SESSION['usr_id'] = $rg['id'];
					$_SESSION['usr']    = $rg['usr'];
					$_SESSION['perfil'] = $rg['idperfil'];
					$log_mod            = 'Logeado';
					$msj_tit            = "Bienvenido $usr_nomb";
					$msj_desc           = 'Ud. se ha logeado exitosamente en el sistema.';
			
					switch ($usr_perfil) {
						case 'ADM':
								header('location:index_adm.php');
							break;
						case 'LIQ':
								header('location:index_liq.php');
							break;
						case 'SEC':
								header('location:index_sec.php');
							break;
						
						default:
								header('location:index.php');
							break;
					}
			}
	}
	//var_dump($log_mod);
	switch ($log_mod) {
		/*<®> Login Normal <®>*/
		case 'Logeado': ?>
			<h2>Usuario en el Sistema</h2>
			<form action="salir.php" method="post">
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
				<input type="submit" value="Salir del Sistema">
			</form>
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
	<!-- <input type="button" value="Cartel" class="loginbutton" data-type="zoomin"> -->
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
