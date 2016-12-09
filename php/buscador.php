<?php
	session_start();
	include('conexion.php');
	$con = conectarse();
	if(isset($_POST['search'])){
		$search = $_POST['search'];
		$tipoUsuario = $_SESSION['nombreUsuario'];
		mysql_set_charset("utf8",$con);
		if($tipoUsuario=="Admin"){
			$sql = "
			SELECT id_acreditado, rut, nombres, apellidos
			FROM personal_acreditado WHERE 
			nombres LIKE '%" . $search ."%' OR
			rut LIKE '%" . $search ."%' OR
			apellidos LIKE '%" . $search ."%'
			";
		}
		if($tipoUsuario=="Contratista"){
			$idEmpresa = $_SESSION['idContratista'];
			//BUSCAR TODO EL PERSONAL, DE TODOS LOS CONTRATOS PERTENECIENTES A LA 
			//EMPRESA CONTRATISTA $idEmpresa DONDE $search APAREZCA EN NOMBRE APELLIDOS O RUT
			$sql = "SELECT pa.id_acreditado, pa.rut, pa.nombres, pa.apellidos
					FROM orden_contrato oc
					INNER JOIN personal_acreditado pa
					ON oc.ID_CONTRATISTA = '$idEmpresa' AND 
					oc.N_CONTRATO = pa.ID_ORDEN_CONTRATO
					WHERE pa.nombres LIKE '%" . $search ."%' OR
					pa.rut LIKE '%" . $search ."%' OR
					pa.apellidos LIKE '%" . $search ."%'";
		}

		if($tipoUsuario=="Mandante"){
			$sql = "
			SELECT id_acreditado, rut, nombres, apellidos
			FROM personal_acreditado WHERE 
			nombres LIKE '%" . $search ."%' OR
			rut LIKE '%" . $search ."%' OR
			apellidos LIKE '%" . $search ."%'
			";
		}
		
		$resultado = mysql_query($sql,$con);
		if($fila = mysql_fetch_array($resultado)){
			do{
				?>
			      <tr>
			        <td><?php echo $fila['id_acreditado'];?></td>
			        <td><?php echo $fila['rut'];?></td>
			        <td><?php echo $fila['apellidos'] . " " . $fila['nombres'];?></td>
			        <td><a class="btn btn-xs btn-success" href="verPersona.php?id=<?php echo $fila['id_acreditado']; ?>" role="button">ver</a></td>
			      </tr>
			      <?php
			}while($fila = mysql_fetch_array($resultado));
		}else{
			echo '<b>NO SE ENCONTRARON RESULTADOS.</b>';
			echo 'Tipo Usuario: ' . $tipoUsuario;
		}
	}
?>