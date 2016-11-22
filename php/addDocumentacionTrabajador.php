<?php
	include('conexion.php');
	session_start();
	//SE COMPRUEBA CUAL ES EL ARCHIVO QUE SE QUIERE SUBIR
	if(isset($_FILES["file"]))
	{
		$file = $_FILES["file"];
	}

	if(isset($_FILES["file2"]))
	{
		$file = $_FILES["file2"];
	}

	if(isset($_FILES["file3"]))
	{
		$file = $_FILES["file3"];
	}

	if(isset($_FILES["file4"]))
	{
		$file = $_FILES["file4"];
	}

	if(isset($_FILES["file5"]))
	{
		$file = $_FILES["file5"];
	}

	if(isset($_FILES["file6"]))
	{
		$file = $_FILES["file6"];
	}


	//SE SUBE EL ARCHIVO
	if(isset($file))
	{
		$nombre = addslashes($file["name"]);
		$tipo = $file["type"];
		$ruta_provisional = $file["tmp_name"];
		$size = $file["size"];
		$carpeta = "../archivos/" . $_SESSION['trabajadorActual'] . "/";

		if($tipo != 'application/pdf'){
			echo "Error, el archivo debe ser pdf";
		}else if($size> 1024*1024*2){
			echo "Error, el tamaño m&aacute;ximo permitido es 1MB";
		}else{
			$src = $carpeta . $nombre;
			move_uploaded_file($ruta_provisional, $src);
		}
	}

	$id = $_SESSION['idTrabajadorActual'];
	$con = conectarse();
	//AGREGAMOS LA URL AL TRABAJADOR
	if(isset($_FILES["file"]))
	{
		$sql = "UPDATE documentacion SET URL_1='$nombre', MOD_1=CURRENT_TIMESTAMP() WHERE ID_ACREDITADO='$id'";
	}
	if(isset($_FILES["file2"]))
	{
		$sql = "UPDATE documentacion SET URL_2='$nombre', MOD_2=CURRENT_TIMESTAMP() WHERE ID_ACREDITADO='$id'";
	}
	if(isset($_FILES["file3"]))
	{
		$sql = "UPDATE documentacion SET URL_3='$nombre', MOD_3=CURRENT_TIMESTAMP() WHERE ID_ACREDITADO='$id'";
	}
	if(isset($_FILES["file4"]))
	{
		$sql = "UPDATE documentacion SET URL_4='$nombre', MOD_4=CURRENT_TIMESTAMP() WHERE ID_ACREDITADO='$id'";
	}
	if(isset($_FILES["file5"]))
	{
		$sql = "UPDATE documentacion SET URL_5='$nombre', MOD_5=CURRENT_TIMESTAMP() WHERE ID_ACREDITADO='$id'";
	}
	if(isset($_FILES["file6"]))
	{
		$sql = "UPDATE documentacion SET URL_6='$nombre', MOD_6=CURRENT_TIMESTAMP() WHERE ID_ACREDITADO='$id'";
	}


	//RETORNAMOS EL LINK DEL NOMBRE DEL ARCHIVO
	mysql_query($sql,$con);
	echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $nombre ."'>" . $nombre . "</a>";	
?>