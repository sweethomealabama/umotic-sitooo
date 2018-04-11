<?php
session_start();
include ("db.php");	

include("login_Installatore_query.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>U-Motic | Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <h2>Installatore</h2>
            <form method="post" action="login_Installatore.php">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="usernameInstallatore" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="passwordInstallatore" />
              </div>
              <div align="center">
                <input type="submit" class="btn btn-default" name="loginInstallatore" value="Login">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                <p class="change_link">Vuoi accedere come Utente?
                  <u><a href="login_Umotic.php" class="to_register"> Accedi </a></u>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> U-Motic</h1>
                  <p>�2018 U-Motic. All rights reserved.</p>
                </div>
              </div>
            </form>


          </section>
        </div>

        

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
