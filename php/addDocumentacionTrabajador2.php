<?php
	include('conexion.php');
	session_start();
	$con = conectarse();
	$obs1 = $_POST['obs1'];
	$obs2 = $_POST['obs2'];
	$obs3 = $_POST['obs3'];
	$obs4 = $_POST['obs4'];
	$obs5 = $_POST['obs5'];
	$obs6 = $_POST['obs6'];
	$mod1 = $_POST['val1'];
	$mod2 = $_POST['val2'];
	$mod3 = $_POST['val3'];
	$mod4 = $_POST['val4'];
	$mod5 = $_POST['val5'];
	$mod6 = $_POST['val6'];
	$id = $_SESSION['idTrabajadorActual'];

	$sql = "UPDATE documentacion SET OBS_1='$obs1', OBS_2='$obs2', OBS_3='$obs3', OBS_4='$obs4', OBS_5='$obs5', OBS_6='$obs6', VAL_1='$mod1', VAL_2='$mod2', VAL_3='$mod3', VAL_4='$mod4', VAL_5='$mod5', VAL_6='$mod6' WHERE ID_ACREDITADO='$id'";
	mysql_query($sql,$con);
	echo "DOCUMENTACIÓN ALMACENADA CORRECTAMENTE.";
?>