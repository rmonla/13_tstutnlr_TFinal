<?php  
	include_once '_main/fxs.php';
	
	/*<®> Modo Inicial <®>*/
		$lMod = "NoLogeado";

	session_start();

	function logOut(){
			session_unset();
			session_destroy();
	}
	
	$aModos = [
		"Cols"      => ["mTitu", "mDesc"],
		"Logeado"   => ["Bienvenido al sistema EduLiq", "Sistema Administrativo de Liquidaciones."],
		"NoLogeado" => ["Bienvenido al sistema EduLiq", "Sistema Administrativo de Liquidaciones."]
	];

	/*<®> Defino el Modo <®>*/
		/*<®> Modo Logeado <®>*/
			if ( isset($_SESSION['uIDE']) ) $lMod = "Logeado";
		/*<®> Modo Logear/DesLogear <®>*/
			if ( isset($_POST['login'] ) && $_POST['login'] == 'log-in'
				   && isset($_POST['usr']) && isset($_POST['pass'])	
				){
					if ($_POST['usr'] == '' || $_POST['usr'] == '' ) $lMod = 'FaltaUsrPass';
					else {
						/*<®> Verifico credenciales <®>*/
						/*<®> String Where <®>*/
							$usr   = $_POST['usr'];
							$pass  = md5($_POST['pass']);
							$tbl   = 'usuarios';
							$where = "usr='$usr' AND pass='$pass'";
						/*<®> Verifico los Datos <®>*/
							if(!contarRegs($tbl, $where))	$lModo  = 'NoVerifica';
							else {
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
									$_SESSION['uIDE'] = $rg['id'];
								/*<®> Cargo el Modo <®>*/
									$lMod = 'Logear';
								}
						}
				} else logOut();

				echo "Modo = $lMod";
	
?>
	