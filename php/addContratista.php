<?php
	include('conexion.php');
	$nombre = $_POST['nombre'];		
	$rut = $_POST['rut'];
	$n_contacto = $_POST['n_contacto'];
	$representante = $_POST['representante'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];
	$direccion_sucursal = $_POST['direccion_sucursal'];
	$mutualidad = $_POST['mutualidad'];
	$ccompensacion = $_POST['ccompensacion'];
	$observacion = $_POST['observacion'];
	$fono = $_POST['fono'];              
	$con = conectarse();
	mysql_set_charset("utf8",$con);
	$sql = "INSERT INTO empresa_contratista (n_fantasia, fono, rut, n_contacto, rep, mail_contacto, d_casa_matriz, d_sucursal, observacion, mutualidad, c_compensacion, f_registro) VALUES ('$nombre', '$fono', '$rut', '$n_contacto', '$representante', '$email', '$direccion', '$direccion_sucursal','$observacion', '$mutualidad', '$ccompensacion',now())";
	mysql_query($sql,$con);
	header('location: http://www.chilecop.cl/acreditacion/ingresarContratista.php');
	mysql_close($con);
?>