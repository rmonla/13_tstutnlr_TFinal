<?php  
/*<®> Importación <®>*/

	agentes       = @idagente + docu + cuil + nom + sexo 
	zonas         = @idzona + zona + desc
	areas         = @idarea + area + desc
	planes        = @idplan + plan + desc
	agrupaciones  = @idagru + agru + desc
	cargos        = @idcargo + idagru + cargo + desc
	escuelas      = idescu + @idescuela + @idarea + @idzona
	liquidaciones = @idliq + idagente + idescu + idplan + idcargo 
								+ recnro + antig + horas + dias + periodo

// docu=
	 
/*<®> Novedades <®>*/
	
	nov_conceptos = @idnovconcepto + mnemo + desc
	nov_tipo      = @idnovtipo + mnemo + desc
	nov_codigos   = @idnovcod + mnemo + desc
	novedades     = @idnovedad + idnovconcepto + idnovtipo + idnovcod + idagente + idescu + recnro + monto + desde + hasta

?>

 

 


