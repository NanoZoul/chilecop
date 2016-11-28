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
	$obs7 = $_POST['obs7'];
	$obs8 = $_POST['obs8'];
	$obs9 = $_POST['obs9'];
	$obs10 = $_POST['obs10'];
	$obs11 = $_POST['obs11'];
	$obs12 = $_POST['obs12'];
	$obs13 = $_POST['obs13'];
	$obs14 = $_POST['obs14'];
	$mod1 = $_POST['val1'];
	$mod2 = $_POST['val2'];
	$mod3 = $_POST['val3'];
	$mod4 = $_POST['val4'];
	$mod5 = $_POST['val5'];
	$mod6 = $_POST['val6'];
	$mod7 = $_POST['val7'];
	$mod8 = $_POST['val8'];
	$mod9 = $_POST['val9'];
	$mod10 = $_POST['val10'];
	$mod11 = $_POST['val11'];
	$mod12 = $_POST['val12'];
	$mod13 = $_POST['val13'];
	$mod14 = $_POST['val14'];
	$id = $_SESSION['idTrabajadorActual'];

	$sql = "UPDATE documentacion SET 
		OBS_1='$obs1', 
		OBS_2='$obs2', 
		OBS_3='$obs3', 
		OBS_4='$obs4', 
		OBS_5='$obs5', 
		OBS_6='$obs6', 
		OBS_7='$obs7', 
		OBS_8='$obs8', 
		OBS_9='$obs9', 
		OBS_10='$obs10', 
		OBS_11='$obs11', 
		OBS_12='$obs12', 
		OBS_13='$obs13', 
		OBS_14='$obs14', 
		VAL_1='$mod1', 
		VAL_2='$mod2', 
		VAL_3='$mod3', 
		VAL_4='$mod4', 
		VAL_5='$mod5', 
		VAL_6='$mod6',
		VAL_7='$mod7',
		VAL_8='$mod8',
		VAL_9='$mod9',
		VAL_10='$mod10',
		VAL_11='$mod11',
		VAL_12='$mod12',
		VAL_13='$mod13',
		VAL_14='$mod14'
		WHERE ID_ACREDITADO='$id'";
	mysql_query($sql,$con);
	echo "DOCUMENTACIÓN ALMACENADA CORRECTAMENTE.";
?>