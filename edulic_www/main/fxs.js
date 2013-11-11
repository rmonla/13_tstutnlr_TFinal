/*<®> fx importarpadron <®>*/
	/**
	 * Función que lanza la importación desde la DBF a la BD.
	 */
	function importarpadron(){
		var dbf       = document.getElementById("dbf_arch").innerHTML;
		var dbf_filas = parseInt(document.getElementById("dbf_filas").innerHTML);
		var ult_fila  = parseInt(document.getElementById("ult_fila").innerHTML);
		
		if ( ult_fila == 0 ) { var p = 1; };
		if ( ult_fila > 0 ) { var p = (ult_fila / dbf_filas)*100; };
		if ( p < 100) {
			$('#progress_bar .ui-progress').animateProgress(p);
		};
		if ( ult_fila < dbf_filas){
			if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("importacion").innerHTML = xmlhttp.responseText;
					importarpadron()					
				};
			}
			/*
			xmlhttp.open("GET", "main/importarpadron.php?dbf=" + dbf + "&ult_fila=" + ult_fila, true);
			xmlhttp.send();
			*/
      	xmlhttp.open("POST", "main/importarpadron.php");
      	xmlhttp.setRequestHeader("Content-Type",
                            "application/x-www-form-urlencoded");
			xmlhttp.send("dbf=" + dbf + "&ult_fila=" + ult_fila);
		}else{
			alert("Importación terminada");
			$('#progress_bar .ui-progress').animateProgress(100);
		};
	}
/*<®> fx verEstado <®>*/
	/**
	 * Función que contrala el estado de importación hasta que termine.
	 */
	function verEstado(){
		var estado = document.getElementById('imp_estado').innerHTML;
		if (estado == "Importando") {
			importarpadron();
		};
	}
/*<®> fx importacion <®>*/
	/**
	 * Función que retorna el estado de la importación.
	 */
	function importacion(){
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("importacion").innerHTML = xmlhttp.responseText;
				verEstado();
			};
		}
		xmlhttp.open("GET", "main/importacion.php", true);
		xmlhttp.send();
	}