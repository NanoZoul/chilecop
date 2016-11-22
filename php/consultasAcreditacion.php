<?php
  include('conexion.php');
  include("Zebra_Pagination.php");
	function imprimirMenu(){    
    //ACÁ DESPUÉS HAY QUE DISCRIMINAR POR EL TIPO DE USUARIO
    $usuario = $_SESSION['nombreUsuario'];
    if($usuario=="Admin"){
      echo '
      <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm logo"><img src="images/logo.png"></h1>
          <ul>
            <li class="link">
              <a href="escritorio.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Escritorio</span>
              </a>
            </li>
            <li class="link">
              <a href="listarMandantes.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Mandantes</span>
              </a>
            </li>
            <li class="link">
              <a href="listarContratistas.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Contratistas</span>
              </a>
            </li>
            <li class="link">
              <a href="vehiculos.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Acceso Vehicular</span>
              </a>
            </li>

            <li class="link">
              <a href="#personal" data-toggle="collapse" aria-controls="collapse-post">
                <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Personal Acreditado</span>
              </a>
              <ul class="collapse collapseable" id="personal">
                <li><a href="buscador.php">Buscador</a></li>
                <li><a href="ingresarTrabajador2.php">Ingresar Trabajador</a></li>
              </ul>
            </li>

            <li class="link">
              <a href="#">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Reportes</span>
              </a>
            </li>
            <li class="link">
              <a href="anuncio.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Anuncios</span>
              </a>
            </li>
            <h1 class="hidden-xs hidden-sm logo"><img src="images/logoCopec.png"></h1>
          </ul>
      </div>';
    }

    if($usuario=="Contratista"){
      echo '
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm logo"><img src="images/logo.png"></h1>
          <ul>
            <li class="link">
              <a href="escritorio.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Escritorio</span>
              </a>
            </li>
            <li class="link">
              <a href="ingresarContratista.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Mi empresa</span>
              </a>
            </li>
            <li class="link">
              <a href="listarContratos.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Mis Contratos</span>
              </a>
            </li>
            <li class="link">
              <a href="#">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Mis Observaciones</span>
              </a>
            </li>
            <li class="link">
              <a href="#">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Buscador</span>
              </a>
            </li>
            <li class="link">
              <a href="#">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Reportes</span>
              </a>
            </li>
            <h1 class="hidden-xs hidden-sm logo"><img src="images/logoCopec.png"></h1>
          </ul>
      </div>


      ';

		/*echo '
		<div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm logo"><img src="images/logo.png"></h1>
          <ul>
            <li class="link">
              <a href="#contratista" data-toggle="collapse" aria-controls="collapse-post">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Vista '. $usuario .'</span>
              </a>
              <ul class="collapse collapseable" id="contratista">
                <li><a href="ingresarContratista.php">Ingresar Contratista</a></li>
                <li><a href="ingresarTrabajador.php">Acreditar Personal</a></li>
                <li><a href="listarContratos.php">Listar Contratos</a></li>
              </ul>
            </li>

            <li class="link">
              <a href="#mandante" data-toggle="collapse" aria-controls="collapse-post">
                <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Vista Mandante</span>
              </a>
              <ul class="collapse collapseable" id="mandante">
                <li><a href="listarContratistas.php">Listar Contratistas</a></li>
              </ul>
            </li>

            <li class="link">
              <a href="#administrador" data-toggle="collapse" aria-controls="collapse-post">
                <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Vista Administrador</span>
              </a>
              <ul class="collapse collapseable" id="administrador">
              <li><a href="listarMandantes.php">Listar Mandantes</a></li>
                <li><a href="ingresarMandante.php">Ingresar Mandante</a></li>                
                <li><a href="listarContratistas.php">Listar Contratistas</a></li>
                <li><a href="#">Listar Usarios</a></li>
                <li><a href="crearUsuario.php">Crear Usuario</a></li>
              </ul>
            </li>

            <h1 class="hidden-xs hidden-sm logo"><img src="images/logo.png"></h1>
          </ul>
        </div>';*/
    }
    if($usuario=="Mandante"){

      echo '
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm logo"><img src="images/logo.png"></h1>
          <ul>
            <li class="link">
              <a href="escritorio.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Escritorio</span>
              </a>
            </li>
            <li class="link">
              <a href="ingresarMandante.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Mi empresa</span>
              </a>
            </li>
            <li class="link">
              <a href="listarContratistas.php">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Contratistas</span>
              </a>
            </li>
            <li class="link">
              <a href="#">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Buscador</span>
              </a>
            </li>
            <li class="link">
              <a href="#">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  <span class="hidden-sm hidden-xs">Reportes</span>
              </a>
            </li>
            <h1 class="hidden-xs hidden-sm logo"><img src="images/logoCopec.png"></h1>
          </ul>
      </div>';
    }
	}  

  function copyright(){
    echo '<b>Copyright</b> &copy; 2016 <b>CHILECOP HOLDING GROUP</b>';
  }

  function nombrePanel(){
    echo 'Admin Panel 1.0';
  }

  function tituloPanel(){
    echo '<title>Panel de Control - Chilecop</title>';
  }

  function getSelect($tabla,$dato1,$dato2){
    $con = conectarse();
    $sql="SELECT " . $dato1 . ", " . $dato2 . " FROM " . $tabla;
    echo "<select name='$dato1' class='form-control' id='$dato1' required>";
    $resultado = mysql_query($sql,$con);
    while($row = mysql_fetch_array($resultado)){
      echo "<option value='" . $row[$dato1] . "'>" . $row[$dato2] . "</option>"; 
    }
    echo "</select>";
    mysql_close($con);
  }

  function listarMandantes(){
    $usuario = $_SESSION['nombreUsuario'];
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $sql="SELECT * FROM mandante";
    $resultado = mysql_query($sql,$con);
    while($row = mysql_fetch_array($resultado)){
      echo "
          <tr>
              <td>".$row['ID_MANDANTE'] . "</td>
              <td>".$row['N_FANTASIA'] . "</td>
              <td>".$row['RUT'] . "</td>
              <td>".$row['N_CONTACTO'] . "</td>
              <td>".$row['FONO'] . "</td>
              <td>".$row['REPRESENTANTE'] . "</td>
              <td>".$row['MAIL'] . "</td>
              <td>".$row['F_REGISTRO'] . "</td>
              <td><a class='btn btn-xs btn-success' href='crearUsuario.php' role='button'>Crear Usuario</a></td>";
              if($usuario=="Admin"){
                echo "<td><a class='btn btn-xs btn-default' href='#' role='button'>Observaciones</a></td>";
              }
              echo "<td><a class='btn btn-xs btn-warning' href='editarMandante.php?id=".$row['ID_MANDANTE']."&nombre=". $row['N_FANTASIA'] ."' role='button'>editar</a></td>
          </tr>    
          ";
    }
    mysql_close($con);
  }

  function listarContratos($id){
    $usuario = $_SESSION['nombreUsuario'];
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $sql="SELECT * FROM orden_contrato WHERE ID_CONTRATISTA='$id'";
    $resultado = mysql_query($sql,$con);
    while($row = mysql_fetch_array($resultado)){
      echo "
          <tr>
              <td>".$row['ID_OC'] . "</td>
              <td>".$row['N_CONTRATO'] . "</td>
              <td>".$row['DESCRIPCION_CONTRATO'] . "</td>
              <td>".$row['ADMINISTRADOR_CONTRATO'] . "</td>
              <td>".$row['FONO'] . "</td>
              <td>".$row['MAIL'] . "</td>
              <td><a class='btn btn-xs btn-success' href='verContrato.php?id=". $row['ID_OC'] ."' role='button'>Ver</a></td>
              <td><a class='btn btn-xs btn-default' href='listarPersonal.php?id=".$row['ID_OC']."' role='button'>gestionar personal</a></td>";
              if($usuario=="Admin"){
                echo "<td><a class='btn btn-xs btn-default' href='#' role='button'>Observaciones</a></td>";
                echo "<td><a class='btn btn-xs btn-warning' href='editarOrdenContrato.php?id=".$row['ID_OC']."' role='button'>Editar</a></td>";
              }
          echo "</tr>";
    }
    mysql_close($con);
  }

  function listarPersonal($id){
    $usuario = $_SESSION['nombreUsuario'];
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $sql="SELECT * FROM personal_acreditado WHERE ID_ORDEN_CONTRATO='$id'";
    $resultado = mysql_query($sql,$con);
    $estado = 0;

    while($row = mysql_fetch_array($resultado)){      
      if($row['ID_ESTADO']==1) $estado = "ok";
      if($row['ID_ESTADO']==2) $estado = "rechazado";
      if($row['ID_ESTADO']==3) $estado = "pendiente";
      echo "
          <tr>
              <td>".$row['ID_ACREDITADO'] . "</td>
              <td><div class='estado ". $estado ."'></div></td>
              <td>".$row['RUT'] . "</td>
              <td>".$row['APELLIDOS'] . " " . $row['NOMBRES'] . "</td>
              <td>".$row['CARGO'] . "</td>
              <td>".$row['FONO_EMERGENCIA'] . "</td>
              <td>".$row['NACIONALIDAD'] . "</td>";
              echo "<td><a class='btn btn-xs btn-success' href='verPersona.php?id=".$row['ID_ACREDITADO'] . "' role='button'>Ver</a></td>";
              if($usuario=="Admin"){
                echo "<td><a class='btn btn-xs btn-default' href='#' role='button'>Observaciones</a></td>";
              }
              echo" <td><a class='btn btn-xs btn-default' href='documentacionPersonal.php?id=".$row['ID_ACREDITADO']."' role='button'>ver documentos</a></td>
              <td><a class='btn btn-xs btn-warning' href='editarPersonal.php?id=".$row['ID_ACREDITADO']."' role='button'>editar</a></td>
          </tr>    
          ";
    }
    mysql_close($con);
  }

  function listarContratistas(){
    $usuario = $_SESSION['nombreUsuario'];
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $sql="SELECT * FROM empresa_contratista";
    $resultado = mysql_query($sql,$con);
    while($row = mysql_fetch_array($resultado)){
      echo "
          <tr>
              <td>".$row['ID_CONTRATISTA'] . "</td>
              <td>".$row['N_FANTASIA'] . "</td>
              <td>".$row['RUT'] . "</td>
              <td>".$row['N_CONTACTO'] . "</td>
              <td>".$row['FONO'] . "</td>
              <td>".$row['REP'] . "</td>
              <td>".$row['MAIL_CONTACTO'] . "</td>
              <td>".$row['F_REGISTRO'] . "</td>";
                echo "<td><a class='btn btn-xs btn-success' href='verContratista.php?id=".$row['ID_CONTRATISTA'] . "' role='button'>Ver</a></td>";
              if($usuario=="Admin"){
                echo "<td><a class='btn btn-xs btn-success' href='crearUsuario.php' role='button'>Crear Usuario</a></td>";
              }

              echo "<td><a class='btn btn-xs btn-default' href='listarContratos.php?id=".$row['ID_CONTRATISTA'] . "' role='button'>Contratos</a></td>";

              if($usuario=="Admin"){
                echo "<td><a class='btn btn-xs btn-default' href='#' role='button'>Observaciones</a></td>";
              
                echo "<td><a class='btn btn-xs btn-warning' href='editarContratista.php?id=".$row['ID_CONTRATISTA']."&nombre=". $row['N_FANTASIA'] ."' role='button'>editar</a></td>";
              }
          echo "</tr>";
    }
    mysql_close($con);
  }

  function getVerPersona($id){
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $query = "SELECT * FROM personal_acreditado WHERE ID_ACREDITADO='$id'";
    $resultado = mysql_query($query, $con);
    $fila = mysql_fetch_array($resultado);
    mysql_close($con);
    return $fila['ID_ESTADO'] . "%$" . $fila['RUT'] . "%$" . $fila['NOMBRES'] . "%$" . $fila['APELLIDOS'] . "%$" . $fila['CARGO'] . "%$" . $fila['F_NACIMIENTO'] . "%$" . $fila['PROCEDENCIA'] . "%$" . $fila['ALERGIAS'] . "%$" . $fila['FONO_EMERGENCIA'] . "%$" . $fila['DIRECCION'];
  }

  function getVerEmpresaContratista($id){
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $query = "SELECT * FROM empresa_contratista WHERE ID_CONTRATISTA='$id'";
    $resultado = mysql_query($query, $con);
    $fila = mysql_fetch_array($resultado);
    mysql_close($con);
    return $fila['N_FANTASIA'] . "%$" . $fila['N_CONTACTO'] . "%$" . $fila['RUT'] . "%$" . $fila['MAIL_CONTACTO'] . "%$" . $fila['FONO'] . "%$" . $fila['REP'] . "%$" . $fila['OBSERVACION'] . "%$" . $fila['F_REGISTRO'] . "%$" . $fila['D_CASA_MATRIZ'] . "%$" . $fila['D_SUCURSAL'] . "%$" . $fila['MUTUALIDAD'];
  }

  function getVerMandante($id){
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $query = "SELECT * FROM mandante WHERE ID_MANDANTE='$id'";
    $resultado = mysql_query($query, $con);
    $fila = mysql_fetch_array($resultado);
    mysql_close($con);
    return $fila['RUT'] . "%$" . $fila['N_FANTASIA'] . "%$" . $fila['N_CONTACTO'] . "%$" . $fila['OBSERVACION'] . "%$" . $fila['FONO'] . "%$" . $fila['F_REGISTRO'] . "%$" . $fila['REPRESENTANTE'] . "%$" . $fila['MAIL'];
  }

  function getVerContrato($id){
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $query = "SELECT * FROM orden_contrato WHERE ID_OC='$id'";
    $resultado = mysql_query($query, $con);
    $fila = mysql_fetch_array($resultado);
    mysql_close($con);
    return $fila['F_INICIO'] . "%$" . $fila['F_TERMINO'] . "%$" . $fila['F_INICIO_JORNADA'] . "%$" . $fila['F_TERMINO_JORNADA'] . "%$" . $fila['F_PRESENTACION_SERNAGEOMIN'] . "%$" . $fila['F_AFILIACION_MUTUAL'] . "%$" . $fila['N_CONTRATO'] . "%$" . $fila['DESCRIPCION_CONTRATO'] . "%$" . $fila['ADMINISTRADOR_CONTRATO'] . "%$" . $fila['FONO'] . "%$" . $fila['MAIL'] . "%$" . $fila['JORNADA_EXCEPCIONAL'] . "%$" . $fila['TIPO_JORNADA'] . "%$" . $fila['N_RESOLUCION'];
  }

    function getVerDocumentacion($id){
    $con = conectarse();
    mysql_set_charset("utf8",$con);
    $query = "SELECT * FROM documentacion WHERE ID_ACREDITADO='$id'";
    $resultado = mysql_query($query, $con);
    $fila = mysql_fetch_array($resultado);
    mysql_close($con);
    return $fila['URL_1'] . "%$" . $fila['VAL_1'] . "%$" . $fila['OBS_1'] . "%$" . $fila['MOD_1'] . "%$" . $fila['URL_2'] . "%$" . $fila['VAL_2'] . "%$" . $fila['OBS_2'] . "%$" . $fila['MOD_2'] . "%$" . $fila['URL_3'] . "%$" . $fila['VAL_3'] . "%$" . $fila['OBS_3'] . "%$" . $fila['MOD_3'] . "%$" . $fila['URL_4'] . "%$" . $fila['VAL_4'] . "%$" . $fila['OBS_4'] . "%$" . $fila['MOD_4'] . "%$" . $fila['URL_5'] . "%$" . $fila['VAL_5'] . "%$" . $fila['OBS_5'] . "%$" . $fila['MOD_5'] . "%$" . $fila['URL_6'] . "%$" . $fila['VAL_6'] . "%$" . $fila['OBS_6'] . "%$" . $fila['MOD_6'];
  }

  function getVehiculos(){
    $con = conectarse2();
    mysql_set_charset("utf8",$con);
    $sql="SELECT veh.*, pers.nombre_personal, tv.tipo AS tiponombre FROM vehiculo veh inner join tipovehiculo tv, personal pers WHERE veh.conductor = pers.rut_personal AND veh.tipo = tv.id";
    $resultado = mysql_query($sql,$con);
    while($row = mysql_fetch_array($resultado)){
      echo "
          <tr>
              <td>".$row['id'] . "</td>
              <td>".$row['patente'] . "</td>
              <td>".$row['conductor'] . " - " . $row['nombre_personal'] . "</td>
              <td>".$row['marca'] . "</td>
              <td>".$row['modelo'] . "</td>
              <td>".$row['color'] . "</td>
              <td>".$row['anio'] . "</td>
              <td>".$row['tiponombre'] . "</td>
              <td><a class='btn btn-xs btn-warning' href='editarVehiculo.php?id=".$row['id']."' role='button'>editar</a></td>
              <td><a class='btn btn-xs btn-danger' href='eliminarVehiculo.php?id=".$row['id']."' role='button'>eliminar</a></td>
          </tr>    
          ";
    }
    mysql_close($con);
  }

  function getTipoVehiculoSelect($tipo){
    $selected = "";
    $con = conectarse2();
    $sql="SELECT * FROM tipovehiculo";
    mysql_set_charset("utf8",$con);
    $resultado = mysql_query($sql,$con);
    echo "<select name='tipo' class='form-control' required>";
    while($row = mysql_fetch_array($resultado)){
      if(isset($tipo) && $tipo == $row['id']){
        $selected = "selected";
      }
      echo "<option value='" . $row['id'] . "' " . $selected . " >" . $row['tipo'] . "</option>";
      $selected = "";
    }
    echo '</select>';
    mysql_close($con);
  }

  function getDatosVehiculo($id){
    $con = conectarse2();
    $sql = "SELECT * FROM vehiculo WHERE id='$id'";
    mysql_set_charset("utf8",$con);
    $resultado = mysql_query($sql,$con);
    if($fila = mysql_fetch_array($resultado)){
      mysql_close($con);
      return $fila['patente'] . "%$" . $fila['conductor'] . "%$" . $fila['marca'] . "%$" . $fila['modelo'] . "%$" . $fila['color'] . "%$" . $fila['anio'] . "%$" . $fila['tipo'];
    }
  }

  function getSelectEmpresas(){
    $con = conectarse();
    $sql = "SELECT * FROM empresa_contratista";
    mysql_set_charset("utf8",$con);
    $resultado = mysql_query($sql,$con);
    echo '<select name="empresa" id="empresa" onchange="llenarContratos()">';
    while($fila = mysql_fetch_array($resultado)){
      echo "<option value='" . $fila['ID_CONTRATISTA'] . "'>" . $fila['N_FANTASIA'] . "</option>";
    }
    echo '</select>';
  }

  function getRutTrabajador($id){
    $con = conectarse();
    $sql = "SELECT RUT FROM personal_acreditado WHERE ID_ACREDITADO='$id'";
    mysql_set_charset("utf8",$con);
    $resultado = mysql_query($sql,$con);
    $fila = mysql_fetch_array($resultado);
    return $fila['RUT'];
  }
?>