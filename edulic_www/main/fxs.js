			function pbar1() {
				var uf = alert(document.getElementById("ult_fila").innerHTML);
				var fs = alert(document.getElementById("dbf_filas").innerHTML);
				
				if(uf == 0) uf = 1;
				var p = (parseInt(uf) / parseInt(fs));
				
				if ( p < 0.99){
					function() { NProgress.set(p); }
				}else{
					function() { 
						NProgress.done();
						NProgress.remove();
					}
				}
				//NProgress.set(0.4);
				//var e = document.getElementById("imp_estado").innerHTML;
				
				//NProgress.done();
				//NProgress.start();
				//NProgress.inc();
			};

/*<®> fx importar <®>*/
	/**
	 * Función que evalua si inicia la importación.
	 */
	function importar(){
			var uf = parseInt(document.getElementById("ult_fila").innerHTML);
			var fs = parseInt(document.getElementById("dbf_filas").innerHTML);
			//var e = document.getElementById("imp_estado").innerHTML;
			
			if (uf < fs) {
				pbar1();
				importarpadron();
			} else{
				alert("Importación terminada");
			};
			//alert(e);
			//var u = url === undefined;
			//if (e == "Terminado") {
			//}else{
				//pbar2();
			//};
		//var t=setTimeout(function(){},1000);
	}
/*<®> fx importarpadron <®>*/
	/**
	 * Función que lanza la importación desde la DBF a la BD.
	 */
	function importarpadron(){
		var dbf = document.getElementById("dbf_arch").innerHTML;
		var ult_fila = document.getElementById("ult_fila").innerHTML;
		if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else { // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("importacion").innerHTML = xmlhttp.responseText;
				//var t=setTimeout(function(){importar()},1000);
				importar();
			};
		}
		xmlhttp.open("GET", "main/importarpadron.php?dbf=" + dbf + "&ult_fila=" + ult_fila, true);
		xmlhttp.send();
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