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
		
		
		
		
		
	
	    
            
			$query = mysqli_query($db, "INSERT INTO terzo (tipoTerzo, nomeTerzo, emailTerzo, IDUtente) VALUES ('0', $nomeTerzo, $emailTerzo, '4'");
			
		header("location: aggiungi_terzo.php");
	}
?>