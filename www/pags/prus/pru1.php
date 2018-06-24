<html>
<head>
<script>
function verBuscador(visible) {
	switch (visible) {
		case 0:
			document.getElementById("bt_buscador")
				.style.visibility = "visible";			
			document.getElementById("txt_buscador")
				.style.visibility = "hidden";
				//showResult();			
			break;
		case 1:
			document.getElementById("bt_buscador")
				.style.visibility = "hidden";			
			document.getElementById("txt_buscador")
				.style.visibility = "visible";			
			break;
	}

	document.getElementById("livesearch").style.border
}
function cargarDestino (div) {
	document.getElementById("destino").innerHTML = div.getAttribute('destino');
	document.getElementById("ida_p_c_ea").value = div.getAttribute('ida_p_c_ea')
	
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
	var estado = "tipeando";
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
	xmlhttp.open("GET", "livesearch.php?q=" + str, true);
	xmlhttp.send();
}
</script>
</head>
<body>

<form id="form_busc">
<table>
	<tr>
		<th><!-- Buscador --></th>
		<th>Destino</th>
	</tr>
	<tr>
		<td><!-- Buscador -->
			<input 
				id="bt_buscador" 
				type="button" 
				value="buscar" 
				style="visibility:visible"
				onclick="verBuscador(1)">
			<input 
				id="txt_buscador" 
				type="text" 
				size="10" 
				onkeyup="showResult(this.value)" 
				style="visibility:hidden">
		</td>
		<td><!-- Destino -->
			<div id="destino"></div>
			<input type="hidden" id="ida_p_c_ea">
		</td>
	</tr>
	<tr><td colspan="2"><div id="livesearch"></div></td></tr>
</table>



</form>

</body>
</html>
