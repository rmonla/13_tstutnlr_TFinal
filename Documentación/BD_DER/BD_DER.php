<?php  
/*<®> Importación <®>*/

	agentes       = @idagente + docu + cuil + nom + sexo 
	zonas         = @idzona + zona + desc
	areas         = @idarea + area + desc
	planes        = @idplan + plan + desc
	agrupaciones  = @idagru + agru + desc
	cargos        = @@idcargo + @idagru + @cargo + desc   //cargo =lcat + ncat
	escuelas      = @@idescu + @idarea + @idzona + @escu
	liquidaciones = @@idliq + idagente + idplan + idcargo + idescu + trab + anti + hora + dias + periodo

								lcat + ncat  idagente, trab, idescu y idarea

// docu=
	 
/*<®> Novedades <®>*/
	
	nov_conceptos = @idnovconcepto + mnemo + desc
	nov_tipo      = @idnovtipo + mnemo + desc
	nov_codigos   = @idnovcod + mnemo + desc
	novedades     = @idnovedad + idnovconcepto + idnovtipo + idnovcod 
							+ idagente + idescu 
							+ recnro + monto + periodo

?>

 

 


