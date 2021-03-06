<?php ob_start(); ?>
              

<?php
    include ("crea_formattazione_query.php");
    
    $nomeInstallatore = $_SESSION["nomeInstallatore"];
    $cognomeInstallatore = $_SESSION["cognomeInstallatore"];
    $usernameInstallatore = $_SESSION["usernameInstallatore"];
    $codiceFiscaleInstallatore = $_SESSION["codiceFiscaleInstallatore"];
    $emailInstallatore = $_SESSION["emailInstallatore"];
    $passwordInstallatore = $_SESSION["passwordInstallatore"];
    $telefonoInstallatore = $_SESSION["telefonoInstallatore"];
    $dataDiNascitaInstallatore = $_SESSION["dataDiNascitaInstallatore"];
    
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>U-Motic | Crea Formattazione</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/align.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a href="index_Installatore.php" class="site_title"><i class="glyphicon glyphicon-home"></i> <span> Home</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Benvenuto,</span>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
            
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Funzioni <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="creaFormattazioneInst.php">Crea Formattazione</a></li>
                      <li><a href="creaSensoreInst.php">Crea nuovo Sensore</a></li>
                      <li><a href="aggiungiSensoreInst.php">Aggiungi Sensore</a></li>
                      <li><a href="aggiungiAdattatoreInst.php">Crea nuovo Adattatore</a></li>
                      <li><a href="eliminaSensoreInst.php">Rimuovi Sensore</a></li>
                      <li><a href="eliminaAdattatoreInst.php">Rimuovi Adattatore</a></li>
                    </ul>
                  </li>
                  
                 
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login_Umotic.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo "$nomeInstallatore $cognomeInstallatore" ?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                    <li><a href="login_Umotic.php"><i class="fa fa-sign-out pull-right"></i> Esci</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Installatore <small> Crea Formattazione</small></h3>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
            <form id="modifica_profilo" method="post" action="crea_formattazione_query.php">
            <br>
                <br>
              <div>
                <input type="text" class="form-control" placeholder="Tipo Sensore" required="" name="tipo"/>
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Valore iniziale rilevazione" required="" name="valoreI"/>
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Valore finale rilevazione" required="" name="valoreF">
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Interpretazione contenuto" required="" name="interpretazione">
              </div>
              <br>
              
              <hr>
              <br>

              <div align="center">
                <input type="submit" class="btn btn-default" name="submit" value="Crea nuova Formattazione"/>
              </div>
              <div class="clearfix"></div>
                <div class="clearfix"></div>
                <br />
              </div>
            </form>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Powered by U-Motic</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
