
<html>
	<head>
		<script type="text/javascript">
		function importarReg(id_reg) {
			if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
					var a = parseInt(xmlhttp.responseText);
					importar(a);
				}
			}
			xmlhttp.open("GET", "importar_reg.php?id_reg=" + id_reg, true);
			xmlhttp.send();
		}
		function importar(id_reg){
			
			if (id_reg < 50){
				importarReg(id_reg);
			}else{
				return;
			}
			
			// if (ult_reg = 0){
			//  	importar(ult_reg);
			// }
		}

		</script>
		<title></title>
	</head>
	<body>
		<form>
			<select name="users" onchange="importarReg(0)">
				<option value="">
					Select a person:
				</option>
				<option value="1">
					Peter Griffin
				</option>
				<option value="2">
					Lois Griffin
				</option>
				<option value="3">
					Glenn Quagmire
				</option>
				<option value="4">
					Joseph Swanson
				</option>
			</select>
		</form><br>
		<div id="txtHint">
			<b>Person info will be listed here.</b>
		</div>
	</body>
</html>