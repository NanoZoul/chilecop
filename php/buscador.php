<?php
	include('conexion.php');
	$con = conectarse();
	if(isset($_POST['search'])){
		$search = $_POST['search'];
		
		mysql_set_charset("utf8",$con);
		$sql = "
		SELECT id_acreditado, rut, nombres, apellidos
		FROM personal_acreditado WHERE 
		nombres LIKE '%" . $search ."%' OR
		rut LIKE '%" . $search ."%' OR
		apellidos LIKE '%" . $search ."%'
		";
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
		}
	}
?>