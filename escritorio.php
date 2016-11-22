<?php
session_start();
if($_SESSION['nombreUsuario']){
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php 
    include('php/consultasAcreditacion.php');
    tituloPanel();
    $hoy = date('j-m-Y');
    $fecha = date('Y-m-j');
    $sietedias = strtotime ( '-6 day' , strtotime ( $hoy ) ) ;
    $sietedias = date ( 'j-m-Y' , $sietedias );
    ?>
    <!-- Bootstrap -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilosAdmin.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-1.10.1.min.js"></script>

    <script type="text/javascript" src="vendor/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <link rel="stylesheet" href="vendor/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="vendor/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" href="vendor/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="vendor/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="vendor/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <link rel="stylesheet" href="vendor/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="vendor/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <script type="text/javascript" src="vendor/chart/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="js/graficos.js"></script>


    <script type="text/javascript">
            $(document).ready(function(){
              if (screen.width >= 1200) {
              $(".fancy").fancybox({
                   'width' : '60%',
                   'height' : '100%',
                   'autoScale' : false,
                   'transitionIn' : 'none',
                   'transitionOut' : 'none',
                   'type' : 'iframe'
               });
          }else{
            
          }
         });
    </script>
    
  </head>
  <body>
    <div class="container-fluid display-table">
      <div class="row display-table-row">
        <?php 
        imprimirMenu();
        ?>
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

          <div id="dashboard-con">
            <div class="row">
              <div class="col-md-12">
                <div class="admin-content-con clearfix">
                    <header>
                      <h5><b>ADMINISTRACIÓN CHILECOP</b></h5>
                    </header>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th>Fono</th>
                          <th>Cargo</th>
                          <th>Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Cristian Opazo Muñoz</td>
                          <td>c.opazo@chilecop.cl</td>
                          <td>9 78941564</td>
                          <td>Gerente General</td>
                          <td><a class="btn btn-primary" href="escritorio.php?usuario=Admin">Administrador</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Juan Carlos López</td>
                          <td>j.lopez@chilecop.cl</td>
                          <td>9 73885258</td>
                          <td>Subgerencia de Desarrollo</td>
                          <td><a class="btn btn-warning" href="escritorio.php?usuario=Mandante">Mandante</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Alfredo Henriquez Sandivari</td>
                          <td>a.henriquez@chilecop.cl</td>
                          <td>9 63424158</td>
                          <td>Ingeniero Civil Informático</td>
                          <td><a class="btn btn-danger" href="escritorio.php?usuario=Contratista">Contratista</a></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- 
                    DEBERIAN SER ASI:
                    <a class="label label-success fancy" href="contacto.php?id=3">Enviar E-mail</a> -->
                </div>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/default.js"></script>
  </body>
</html>
<?php
}else{
  header("location: http://www.chilecop.cl/accesoAcreditacion.html");
}
?>