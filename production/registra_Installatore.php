<?php ob_start(); ?>
              

<?php
    include 'registration_Installatore.php';
    
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

    <title>U-Motic | Registra Installatore</title>

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
              <a href="index_admin.php" class="site_title"><i class="fa fa-paw"></i> <span>U-Motic</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Benvenuto,</span>
                <?php echo "<h2> $nomeInstallatore $cognomeInstallatore </h2>" ?>
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
                      <li><a href="crea_sensore.php">Crea nuovo Sensore</a></li>
                      <li><a href="crea_formattazione.php">Crea Formattazione</a></li>
                      <li><a href="index3.html">PHP AMBIENTE</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Terzi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">PHP TERZO</a></li>
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
                    <li><a href="profilo_Utente.php"><i class="fa fa-user pull-right"></i> Profilo</a></li>
                    <li><a href="modifica_profilo_Utente.php"><i class="fa fa-cogs pull-right"></i> Modifica Profilo</a></li>
                    <li><a href="login_Umotic.php"><i class="fa fa-sign-out pull-right"></i> Esci</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
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
                <h3>Installatore <small> Modifica</small></h3>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
            <form id="modifica_profilo" method="post" action="registra_Installatore.php">
                
              <div>
                <input type="text" class="form-control" placeholder="Nome" required="" name="nome"/>
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Cognome" required="" name="cognome"/>
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username">
              </div>
              <br>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="Codice Fiscale" required="" name="codiceFiscale"/>
              </div>
              <br>
              <div>
                <input type="date" class="form-control" placeholder="Data di nascita" required="" name="dataDiNascita"/>
              </div>
              <br>
              <div>
                <input type="tel" class="form-control" placeholder="Telefono" required="" name="telefono"/>
              </div>
              <br>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="email"/>
              </div>
              <br>
              <div align="center">
                <input type="submit" class="btn btn-default" name="submit" value="Registra nuovo Installatore"/>
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
