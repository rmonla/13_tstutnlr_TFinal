<?php  
/*<®> Importación <®>*/

	®1  - zonas      => @id + zona + desc
	®2  - escus      => @id + idzona + escu + desc
	®3  - areas      => @id + area + desc
	®4  - escu_areas => @id + idescu + idarea
	®5  - planes     => @id + plan + desc
	®6  - agentes    => @id + docu + cuil + nom + sexo
	®7  - a_p        => @id + idagente + idplan
	®8  - agrups     => @id + agru + desc
	®9  - cargos     => @id + idagru + cargo + desc   //cargo =lcat + ncat
	®10 - a_p_c_ea   => @id + ida_p + idcargo + idescu_area
	®11 - conceptos  => @id + concepto + desc
	®12 - codigos    => @id + codigo + desc
	®13 - perfiles   => @id + perfil + desc
	®14 - usuarios   => @id + idperfil + usr + pass + nomb + ape + dir + tel
	®15 - cod_usr    => @id + idcodigo + idusuario
	®16 - tiposnov   => @id + tiponov + desc
	®17 - periodos   => @id + periodo + desc
	18  - novedades  => @id + idtiposnov + idcod_usr + ida_p_c_ea + idperiodo + monto 
	®19 - liqs       => @id + ida_p_c_ea + idperiodo + trab + anti + hora + dias


?>

 

 


