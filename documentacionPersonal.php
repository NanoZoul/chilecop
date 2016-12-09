<?php
session_start();
if($_SESSION['nombreUsuario']){
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <?php 
	    include('php/consultasAcreditacion.php');
	    tituloPanel();
	    if(isset($_GET['id'])){
	    	$id = $_GET['id'];
	    	$_SESSION['trabajadorActual'] = getRutTrabajador($id);
	    	$_SESSION['idTrabajadorActual'] = $id;
	    	$contenido = getVerDocumentacion($id);
	    	list($url1,$val1,$obs1,$mod1,$url2,$val2,$obs2,$mod2,$url3,$val3,$obs3,$mod3,$url4,$val4,$obs4,$mod4,$url5,$val5,$obs5,$mod5,$url6,$val6,$obs6,$mod6,$url7,$val7,$obs7,$mod7,$url8,$val8,$obs8,$mod8,$url9,$val9,$obs9,$mod9,$url10,$val10,$obs10,$mod10,$url11,$val11,$obs11,$mod11,$url12,$val12,$obs12,$mod12,$url13,$val13,$obs13,$mod13,$url14,$val14,$obs14,$mod14) = explode("%$", $contenido);
	    }
	    ?>

		<!-- Bootstrap CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilosAdmin.css">
		<link rel="stylesheet" type="text/css" href="css/new-article.css">
		<link rel="stylesheet" type="text/css" href="css/documentacionPersonal.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/subirDocumentos.js"></script>
	</head>
	<body>
		<div class="container-fluid display-table">
	      <div class="row display-table-row">
	        <!-- Panel de Navegación Izquierdo-->
	        <?php imprimirMenu(); ?>
	        <!-- Ventana Principal-->
	        <div class="col-md-10 col-sm-11 display-table-cell valign-top">
	          <div class="row">
	            <header id="nav-header" class="clearfix">
	              <div class="col-md-5">
	                <nav class="navbar-default pull-left">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                </nav>
	              </div>
	              <div class="col-md-7">
	                <ul class="pull-right">
	                  <li id="welcome" class="hidden-xs"><?php echo '<b>' . $_SESSION['nombreUsuario'] . '</b>'; ?>, bienvenido al &aacute;rea de administraci&oacute;n</li>
	                  <li>
	                    <a href="php/desconectar.php" class="logout">
	                      <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
	                      log out
	                    </a>
	                  </li>
	                </ul>
	              </div>
	            </header>
	          </div>

	          <div id="content">
	            <header class="clearfix">
	              <div class="col-xs-8 col-sm-8 col-md-8"><b>Contratos Vigentes <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Listar Personal <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Documentación - <?php echo $_SESSION['trabajadorActual']; ?></b></div>
	            </header>

	            <div class="content-inner">
	            	<div class="row comments-row">
	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Contrato de Trabajo</b><br>
		            					<small>Caduca el <?php echo $val1; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod1; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
		            				<textarea id="obs1" style="width:100%;"><?php echo $obs1; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url1 ."'>" . $url1 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val1" type="date" value="<?php echo $val1; ?>">
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>

	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Inducción JoyGlobal</b><br>
		            					<small>Caduca el <?php echo $val2; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod2; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs2" name="" style="width:100%;"><?php echo $obs2; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario2" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta2">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url2 ."'>" . $url2 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file2">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val2" type="date" name="fecha_doc1" value="<?php echo $val2; ?>">	
			                    	</div>		                    	
			                    </div>
		            		</div>
	            		</div>
	            	</div>
	            	<div class="row comments-row">
	            	
	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Fotografía tamaño carnet</b><br>
		            					<small>Caduca el <?php echo $val3; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod3; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs3" name="" style="width:100%;"><?php echo $obs3; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario3" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta3">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url3 ."'>" . $url3 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file3">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val3" type="date" name="fecha_doc1" value="<?php echo $val3; ?>">	
			                    	</div>		                    	
			                    </div>
		            		</div>
	            		</div>

	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Consentimiento test alcohol y drogas</b><br>
		            					<small>Caduca el <?php echo $val4; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod4; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs4" name="" style="width:100%;"><?php echo $obs4; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario4" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta4">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url4 ."'>" . $url4 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file4">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val4" type="date" name="fecha_doc1" value="<?php echo $val4; ?>">	
			                    	</div>		                    	
			                    </div>
		            		</div>
	            		</div>
	            	</div>
	            	<div class="row comments-row">
	            	
	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Fotocopia Cédula</b><br>
		            					<small>Caduca el <?php echo $val5; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod5; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs5" name="" style="width:100%;"><?php echo $obs5; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario5" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta5">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url5 ."'>" . $url5 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file5">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val5" type="date" name="fecha_doc1" value="<?php echo $val5; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>

	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Examen Pre-Ocupacional</b><br>
		            					<small>Caduca el <?php echo $val6; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod6; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs6" name="" style="width:100%;"><?php echo $obs6; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario6" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta6">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url1 ."'>" . $url1 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file6">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val6" type="date" name="fecha_doc1" value="<?php echo $val6; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>
	            	</div>
	            	<div class="row comments-row">
	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>ODI</b><br>
		            					<small>Caduca el <?php echo $val7; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod7; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs7" name="" style="width:100%;"><?php echo $obs7; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario7" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta7">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url7 ."'>" . $url7 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file7">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val7" type="date" name="fecha_doc1" value="<?php echo $val7; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>
	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Reglamento Interno</b><br>
		            					<small>Caduca el <?php echo $val8; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod8; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs8" name="" style="width:100%;"><?php echo $obs8; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario8" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta8">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url8 ."'>" . $url8 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file8">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val8" type="date" name="fecha_doc1" value="<?php echo $val8; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>
	            	</div>
	            	<div class="row comments-row">
	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Entrega EPP</b><br>
		            					<small>Caduca el <?php echo $val9; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod9; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs9" name="" style="width:100%;"><?php echo $obs9; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario9" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta9">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url9 ."'>" . $url9 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file9">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val9" type="date" name="fecha_doc1" value="<?php echo $val9; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>

	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Último Finiquito</b><br>
		            					<small>Caduca el <?php echo $val10; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod10; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs10" name="" style="width:100%;"><?php echo $obs10; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario10" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta10">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url10 ."'>" . $url10 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file10">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val10" type="date" name="fecha_doc1" value="<?php echo $val10; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>
	            	</div>
	            	<div class="row comments-row">
	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Certificado Antecedentes</b><br>
		            					<small>Caduca el <?php echo $val11; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod11; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs11" name="" style="width:100%;"><?php echo $obs11; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario11" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta11">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url11 ."'>" . $url11 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file11">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val11" type="date" name="fecha_doc1" value="<?php echo $val11; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>

	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Certificado de Estudios</b><br>
		            					<small>Caduca el <?php echo $val12; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod12; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs12" name="" style="width:100%;"><?php echo $obs12; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario12" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta12">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url12 ."'>" . $url12 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file12">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val12" type="date" name="fecha_doc1" value="<?php echo $val12; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>
	            	</div>
	            	<div class="row comments-row">
	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Acreditación Prevencionista</b><br>
		            					<small>Caduca el <?php echo $val13; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod13; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs13" name="" style="width:100%;"><?php echo $obs13; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario13" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta13">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url13 ."'>" . $url13 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file13">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val13" type="date" name="fecha_doc1" value="<?php echo $val13; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>

	            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            		<div class="documento col-sm-12 col-md-12">
		            			<div class="row">
		            				<div class="col-xs-8 col-sm-8 col-md-8">
		            					<b>Certificado de Aprobación</b><br>
		            					<small>Caduca el <?php echo $val14; ?></small>
		            				</div>
		            				<div class="col-xs-4 col-sm-4 col-md-4">
		            					<div class="clearfix">
		            						<div class="pull-right comments-age"><small>Ultima Modificación: <br> <?php echo $mod14; ?></small></div>
		            					</div>
		            				</div>
		            			</div>
		            			<div class="well well-sm comments-well">
				            		<textarea id="obs14" name="" style="width:100%;"><?php echo $obs14; ?></textarea>
				            	</div>
				            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					            	<form method="post" id="formulario14" enctype="multipart/form-data">
				                        <div class="form-group">
				                          <label class="">
				                          	<div id="respuesta14">            	
				                          		<?php 
				                          			echo "<a target='_blank' href='http://www.chilecop.cl/acreditacion/archivos/". $_SESSION['trabajadorActual'] . "/". $url14 ."'>" . $url14 . "</a>";
				                          		?>
				                          	</div>
				                          </label>
				                          <span class="btn btn-default btn-file">                            
				                            Subir Archivo <input type="file" name="file14">
				                          </span>
				                        </div>
				                    </form>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			                    		<label class="">Caduca:</label>
			                    		<input id="val14" type="date" name="fecha_doc1" value="<?php echo $val14; ?>">	
			                    	</div>	                    	
			                    </div>
		            		</div>
	            		</div>
	            	</div>

	            </div>
	            	<div class="row">
	            		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            			<button id="guardarDocs" type="submit" class="btn btn-primary pull-right">Guardar Documentación</button>
	            		</div>
	            	</div>
	          	</div>

	          <div class="row">
	            <footer id="admin-footer" class="clearfix">
	              <div class="pull-left"><?php copyright(); ?></div>
              	  <div class="pull-right"><?php nombrePanel(); ?></div>
	            </footer>
	          </div>
	        </div>
	      </div>
	    </div>

		
		<!-- Bootstrap JavaScript -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<?php
}else{
  header("location: http://www.chilecop.cl/accesoAcreditacion.html");
}
?>