<?php
  include 'server_Umotic.php';
  include 'errors_Umotic.php';
  $nome = "";
  $cognome = "";
  $username = "";
  $password = "";
  $email = "";
  $telefono = "";
  $dataDiNascita = "";
  $codiceFiscale = "";


?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL????</title>
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
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register_Umotic.php">
  	<?php include('errors_Umotic.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login_Umotic.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
