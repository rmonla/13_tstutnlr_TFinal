<?
		session_start();
		session_destroy();
		$link="";
		if(isset($_GET['link'])and($_GET['link']==1))
			header("location:http://www.larioja.gov.ar");
			else
				if(isset($_GET['link'])and($_GET['link']==2))
					header("location:http://www.educacionlarioja.gov.ar");
					else
						if(isset($_GET['link'])and($_GET['link']==3))
							header("location:http://juetaeno.gov.ar");
							else
								header("location:index.php");
?>


