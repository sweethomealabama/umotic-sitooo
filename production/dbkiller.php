<?php 

include("db.php");
$lim = 9999999999999;
$sql=mysqli_query($db,"DELETE FROM rilevazione WHERE IDSensore<'$lim'");



header('Location: indexLux.php');

?>