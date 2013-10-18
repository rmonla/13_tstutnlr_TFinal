<?php  
/*<®> Importación <®>*/

	con_agentes       = @idagente + apellido + nombre + docnro + cuil + sexo 
	con_zonas         = @idzona + menmo + desc
	con_areas         = @idarea + mnemo + desc
	con_escuelas      = idescu + @idescuela + @idarea + idzona
	con_planes        = @idplan + mnemo - desc
	con_agrupaciones  = @idagru + mnemo + desc
	con_cargos        = @idcargo + idagru + mnemo + desc
	con_liquidaciones = @idliq + idagente + idescu + idplan + idcargo + recnro + antig + horas + dias + periodo

// docu=
	 
/*<®> Novedades <®>*/
	
	nov_conceptos = @idnovconcepto + mnemo + desc
	nov_tipo      = @idnovtipo + mnemo + desc
	nov_codigos   = @idnovcod + mnemo + desc
	novedades    = @idnovedad + idnovconcepto + idnovtipo + idnovcod + idagente + idescu + recnro + monto + desde + hasta

?>

 

 


