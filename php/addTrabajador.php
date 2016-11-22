<?php
	include('conexion.php');
	$idcontrato = $_POST['idcontrato'];
	$nombre = $_POST['nombre'];		
	$rut = $_POST['rut'];
	$apellidos = $_POST['apellidos'];
	$fnac = $_POST['fnac'];
	$sexo = $_POST['sexo'];
	$nacionalidad = $_POST['nacionalidad'];
	$visa = $_POST['visa'];
	$procedencia = $_POST['procedencia'];
	$cargo = $_POST['cargo'];
	$direccion = $_POST['direccion'];
	$fono = $_POST['fono'];
	$alergias = $_POST['alergias']; 
	$id_grupo_sanguineo = $_POST['id_grupo_sanguineo']; 
	$id_tipo_pase = $_POST['id_tipo_pase']; 
	$id_tipo_turno = $_POST['id_tipo_turno'];                 
	$con = conectarse();
	mysql_set_charset("utf8",$con);
	$sql = "INSERT INTO personal_acreditado (id_estado, id_orden_contrato, rut, nombres, apellidos, f_nacimiento, id_sexo, nacionalidad, visa, procedencia, cargo, direccion, fono_emergencia, alergias, id_grupo_sanguineo, id_tipo_pase, id_tipo_turno, f_registro) VALUES ('3', '$idcontrato', '$rut', '$nombre', '$apellidos', '$fnac', '$sexo', '$nacionalidad', '$visa', '$procedencia','$cargo', '$direccion', '$fono','$alergias','$id_grupo_sanguineo','$id_tipo_pase','$id_tipo_turno',now())";
	mysql_query($sql,$con);

	//CREACIÓN DE LA CARPETA PARA LOS ARCHIVOS CORRESPONDIENTES
	$directorio = "../archivos/" . $rut;
	mkdir($directorio, 0777);
	/**
	 * CREACIÓN DE LA INSTANCIA PARA LA DOCUMENTACIÓN
	 */
	
	//PRIMERO CAPTURAMOS EL ID DEL RECIEN INSERTADO
	$sql = "SELECT ID_ACREDITADO FROM personal_acreditado GROUP BY ID_ACREDITADO DESC LIMIT 1";
	$resultado = mysql_query($sql,$con);
	$fila = mysql_fetch_array($resultado);
	$acreditado = $fila['ID_ACREDITADO'];
	//AHORA CREAMOS LA INSTANCIA	
	$sql = "INSERT INTO documentacion (ID_ACREDITADO) VALUES ($acreditado)"; 
	mysql_query($sql,$con);
	//RETORNAMOS A LA PAGINA DE LOS CONTRATOS	
	header("location: http://www.chilecop.cl/acreditacion/listarPersonal.php?id=$idcontrato");
	mysql_close($con);
?>