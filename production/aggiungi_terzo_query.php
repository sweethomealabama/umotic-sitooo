<?php ob_start(); ?>
<?php

	include ("db.php");
    
	session_start();

	$msg = "";
	if(isset($_POST["aggiungi"]))
	{
		$nomeTerzo = $_POST["nometerzo"];
		$emailTerzo = $_POST["mailterzo"];
		
		

		$nomeTerzo = mysqli_real_escape_string($db, $nomeTerzo);
		$emailTerzo = mysqli_real_escape_string($db, $emailTerzo);
		
		
		
		
		
	
	    
            
			
		header("location: aggiungi_terzo.php");
	}
?>
