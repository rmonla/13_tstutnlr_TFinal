<?php
	
	session_start();
	if($_SESSION['tipo'] != "admin")
		header("location:noacces.php");	
	
	require_once("conectar.php");

?>

<head>
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
</body>
</html>
