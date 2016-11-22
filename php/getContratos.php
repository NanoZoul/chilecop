<?php
	include('conexion.php');
	$con = conectarse();
    $sql = "SELECT * FROM orden_contrato";
    mysql_set_charset("utf8",$con);
    $resultado = mysql_query($sql,$con);
    if($fila = mysql_fetch_array($resultado))
    {
    	$jsondata = '[{"id":"'. $fila['ID_OC'] . '","numero":"'.$fila['N_CONTRATO'].'"}';
    }
	

	while($fila = mysql_fetch_array($resultado)){
		$jsondata =  $jsondata . ',{"id":"'. $fila['ID_OC'] . '","numero":"'.$fila['N_CONTRATO'].'"}';
	}
	$jsondata = $jsondata . ']';
	echo $jsondata;
?>