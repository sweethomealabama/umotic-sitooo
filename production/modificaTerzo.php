<?php ob_start(); ?>
<?php
    
    
    include("modifica_Utente_query.php");
    $nomeUtente = $_SESSION["nomeUtente"];
    $cognomeUtente = $_SESSION["cognomeUtente"];
    $usernameUtente = $_SESSION["usernameUtente"];
    $codiceFiscaleUtente = $_SESSION["codiceFiscaleUtente"];
    $emailUtente = $_SESSION["emailUtente"];
    $passwordUtente = $_SESSION["passwordUtente"];
    $telefonoUtente = $_SESSION["telefonoUtente"];
    $dataDiNascitaUtente = $_SESSION["dataDiNascitaUtente"];
    
    
    //echo $nomeUtente." ".$cognomeUtente;
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>U-Motic | Modifica Terzo</title>

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
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Home</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Benvenuto,</span>
                <?php echo "<h2> $nomeUtente $cognomeUtente </h2>" ?>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
            
                <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> I miei Ambienti <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">ambiente_1</a></li>
                    
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Terzi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="aggiungi_terzo.php">Aggiungi Terzo</a></li>
                      <li><a href="modificaTerzo.php">Modifica Terzo</a></li>
                      <li><a href="rimuoviTerzo.php">Rimuovi Terzo</a></li>
                      <br>
                      <li><a href="">I miei Terzi</a></li>


                      <li><a href="index_Terzo.php">Smartphone</a></li>
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
                    <img src="images/img.jpg" alt=""><?php echo "$nomeUtente $cognomeUtente" ?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="modifica_profilo_Utente.php"><i class="fa fa-cogs pull-right"></i> Profilo</a></li>
                    <li><a href="login_Umotic.php"><i class="fa fa-sign-out pull-right"></i> Esci</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>ambiente_1</span>
                          <span class="time">3 minuti fa</span>
                        </span>
                        <span class="message">
                          Il sensore di temperatura ha rilevato un errore di misurazione...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>ambiente_1</span>
                          <span class="time">40 minuti fa</span>
                        </span>
                        <span class="message">
                          Il sensore di luce sta rilevando...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>ambiente_1</span>
                          <span class="time">3 ore fa</span>
                        </span>
                        <span class="message">
                          Il sensore di temperatura sta rile...
                        </span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Guarda tutti i messaggi</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
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
              <h3>I miei Terzi</h3>
              <br>
                <h4>Smartphone <small> Modifica</small></h4>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
            <form id="modifica_profilo">
            <br>
            <br>
            <br>
            <br>
          
              <div>
                <input type="text" class="form-control" placeholder="Nome Terzo" required="" name="nome" readonly="readonly" value="<?php echo "Smartphone";?>"/>
                <input type="text" class="form-control" placeholder="Inserisci un nuovo Nome" name="nomeNuovo"/>
              </div>
              <br>
              <div>
                <input type="text" class="form-control" placeholder="E-Mail Terzo" required="" name="cognome" readonly="readonly" value="<?php echo "vinceboxx@gmail.com";?>"/>
                <input type="text" class="form-control" placeholder="Inserisci una nuova mail" name="cognomeNuovo"/>
              </div>
              <br>
              <input type="text" class="form-control" placeholder="Tipo Terzo" required="" name="cognome" readonly="readonly" value="<?php echo "Tipo Terzo";?>"/>

              <select class="form-control">
              
              <option>Persona</option>
              <option>Sistema</option>
              </select>

              <br>
              <input type="text" class="form-control" placeholder="Tipo Terzo" required="" name="cognome" readonly="readonly" value="<?php echo "Frequenza invio rilevazioni";?>"/>
              <select class="form-control">
              
              <option>5 rilevazioni</option>
              <option>10 rilevazioni</option>
              <option>20 rilevazioni</option>
              <option>50 rilevazioni</option>
              <option>1 ora</option>
              <option>3 ore</option>
              <option>12 ore</option>
              <option>24 ore</option>
              </select>
                 
                  <hr style="height:1px;border:none;color:#7d7d7d;background-color:#7d7d7d;" />
              <div align="left">
                <input type="password" class="form-control" autocomplete="off" name="password" required = "" placeholder="Conferma Password"/>
              </div>
              <br>
              <div align="center">
                <input type="submit" class="btn btn-default" name="submit" value="Salva"/>
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