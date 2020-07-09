<?php  
	include_once '_main/fxs.php';
	
<<<<<<< HEAD
	function appSession($estado = 0){
		if (!$estado) {
			session_unset();
			session_destroy();
		} else session_start();
	}

	$lModo = 'NoLogeado';
	$mTitu = 'Bienvenido al sistema EduLiq';
	$mDesc = 'Sistema Administrativo de Liquidaciones.';
	

	// if (isset($_SESSION['uIDE'])) { /* Logeado */
		
	// 	$lModo = 'Logeado';
		
	// 	$uID  = $_SESSION['uIDE'];
		
	// 	/*<®> Obtengo los datos del usuario <®>*/
	// 		$q = "SELECT u.*, p.perfil 
	// 				FROM usuarios u
	// 				INNER JOIN perfiles p ON p.id = u.idperfil
	// 				WHERE u.id = $uID";
	// 		$rg = mysqli_fetch_array(ejecutar($q));

	// 	/*<®> Datos del usuario <®>*/
	// 		$uPerf = $rg['perfil'];
	// 		$uLogi = $rg['usr']." ($uPerf)";
	// 		$uNomb = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
	// 		$uDocu = number_format($rg['docu'], '0', ",", ".");
	// 		$uDire = utf8_encode($rg['dir']);
	// 		$uTele = $rg['tel'];
	// 		$uMail = $rg['email'];

	// 	/*<®> Cargo las Vars de SESSION <®>*/
	// 		$_SESSION['uIDE'] = $rg['id'];
	// 		$_SESSION['uUSR'] = $rg['usr'];
	// 		$_SESSION['uPER'] = $rg['idperfil'];
	
	// } else

	/* DesdeForm */


	/*<®> Deslogeado <®>*/
		//appSession(0);

	if (isset($_POST['login'])) {
		if (!$_POST['login'] == 'log-in') {
			$lModo  = 'Deslogear';
			appSession();
		} elseif ($_POST['usr'] = '' || $_POST['pass'] = '') {
			$lModo  = 'FaltanDatos';
		} else {
			$lModo  = 'Verificando';
			/*<®> String Where <®>*/
				$usr   = $_POST['usr'];
				$pass  = md5($_POST['pass']);
				$tbl   = 'ususrios';
				$where = "usr='$usr' AND pass='$pass'";
			/*<®> Verifico los Datos <®>*/
				if(!contarRegs($tbl, $where)){
					$lModo  = 'NoVerifica';
				} else {
					/*<®> Obtengo los datos de la base <®>*/
						$q  = "SELECT u.*, p.perfil 
								FROM $tbl u
								INNER JOIN perfiles p ON p.id = u.idperfil
								WHERE $where";
						$rg = mysqli_fetch_array(ejecutar($q));
					/*<®> Cargo los Datos <®>*/
						$uPerf = $rg['perfil'];
						$uLogi = $rg['usr']." ($uPerf)";
						$uNomb = utf8_encode($rg['nomb'].' '.strtoupper($rg['ape']));
						$uDocu = number_format($rg['docu'], '0', ",", ".");
						$uDire = utf8_encode($rg['dir']);
						$uTele = $rg['tel'];
						$uMail = $rg['email'];
					/*<®> Cargo la SESSION <®>*/
						appSession(1);
						$_SESSION['uIDE'] = $rg['id'];
						$_SESSION['uUSR'] = $rg['usr'];
						$_SESSION['uPER'] = $rg['idperfil'];
					/*<®> Cargo el Modo <®>*/
						$lModo = 'Logeado';
						$mTitu = "Bienvenido $uNomb";
						$mDesc = 'Ud. se ha logeado exitosamente en el sistema.';
=======
	$log_mod  = 'NoLogeado';
	$msj_tit  = 'Bienvenido al sistema EduLiq';
	$msj_desc = 'Sistema Administrativo de Liquidaciones.';
	
	//var_dump($_POST['usr'] != '');
	session_start();
	//var_dump($_SESSION);
	if (isset($_SESSION['usr_id'])) {
		$usr_id  = $_SESSION['usr_id'];
		$log_mod = 'Logeado';
		/*<®> Obtengo los datos del registro del usuario <®>*/
			$q = "SELECT u.*, p.perfil 
					FROM usuarios u
					INNER JOIN perfiles p ON p.id = u.idperfil
					WHERE u.id = $usr_id";
			$rg = mysqli_fetch_array(ejecutar($q));
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
					$rg = mysqli_fetch_array(ejecutar($q));
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
								header('location:_pgs/p_adm.php');
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
>>>>>>> parent of 310524e... Login: Re-codoficación ahora Fields y Labels
					}
			}
	} else {
		$lModo  = 'Deslogeado';
	}
<<<<<<< HEAD
	

	
	/* Logeandose */
	switch ($lModo) {
		case 'Logeado':
			$hLabels = <<<HTML
				<legend>Usuario en el Sistema</legend> 
				<label for="usr">Nombre y Apellido: 
					<h2><div style="text-align:right; font-style:italic">$uNomb</div></h2>
				</label> 
				<label for="usr">Usuario: 
					<div style="text-align:right">$uLogi</div>
				</label> 
				<label for="usr">Documento: 
					<div style="text-align:right">$uDocu</div>
				</label> 
				<label for="usr">Dirección: 
					<div style="text-align:right">$uDire</div>
				</label> 
				<label for="usr">Teléfono: 
					<div style="text-align:right">$uTele</div>
				</label> 
				<label for="usr">Mail: 
					<div style="text-align:right">$uMail</div>
				</label> 
				<p>
					<input type="submit" name="boton" value="Salir del Sistema">
					<input type="hidden" name="login" id="login" value="log-out">
				</p>
HTML;
			break;
		
		default:
			$hLabels = <<<HTML
=======
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
>>>>>>> parent of 310524e... Login: Re-codoficación ahora Fields y Labels
				<legend>Formulario de Login</legend> 
				<label for="usr">Usuario: 
					<input type="text" name="usr" id="usr" value="">
				</label> 
				<label for="pass">Contraseña: 
					<input type="password" name="pass" id="pass" value="">
				</label> 
				<p>
					<input type="submit" name="boton" value="Ingresar">
					<input type="hidden" name="login" id="login" value="log-in">
				</p>
<<<<<<< HEAD
HTML;
			break;
		}

	$hTIT = ($lModo == 'Logeado') ? 'Usuario en el Sistema' : 'Login del Sistema' ;

	$hLogin = <<<HTML
		<div id="formLogin">
			<h2>$hTIT</h2>
			<form action="#" method="post">
				<fieldset>
					$hLabels
				</fieldset>
			</form>
		</div>
		<!-- largo script del msj -->
		<script type="text/javascript">
			window.setTimeout(function(){
					$('.loginbutton').click();
				}, 1000);
			
		</script>
=======
			</fieldset>
		</form>
		<br>
		<br>
		<br>
<?php break;
	} ?>
>>>>>>> parent of 310524e... Login: Re-codoficación ahora Fields y Labels
	<!-- <input type="button" value="Cartel" class="loginbutton" data-type="zoomin"> -->
	<div class="overlay-container" style="display: none;">
		<div class="msjlogin-container zoomin">
			<center>
				<h3>$mTitu</h3> 
				$mDesc
				<br>
				<br>
				<span class="loginclose" align="center">Cerrar</span>
			</center>
		</div>
	</div>
