<?php  
include_once 'fxs.php';

	$coldbf = array('p' => array(
									'docu' => 0,
									'cuil' => 1,
									'trab' => 2,
									'nom'  => 3,
									'sexo' => 4,
									'zona' => 5,
									'escu' => 7,
									'plan' => 12,
									'anti' => 17,
									'hora' => 18,
									'agru' => 19,
									'lcat' => 20,
									'ncat' => 21,
									'dias' => 22,
									'area' => 33), 
							'h' => array(
									'docu'    => 0,
									'cuil'    => 1,
									'trab'    => 2,
									'nom'     => 3,
									'sexo'    => 4,
									'zona'    => 5,
									'escu'    => 6,
									'plan'    => 7,
									'anti'    => 8,
									'hora'    => 9,
									'agru'    => 10,
									'lcat'    => 11,
									'ncat'    => 12,
									'dias'    => 13,
									'area'    => 16,
									'periodo' => 17
							)
						);
	foreach ($coldbf as $timport => $cols)
		foreach ($cols as $col => $val)
			ejecutar("INSERT INTO importaciones ( timport,nomb_bd,col_dbf ) VALUES ( '$timport','$col','$val' )");
?>