<?php ob_start(); ?>
<?php
    
	session_start();


	$msg = "";
	if(isset($_POST["submit"]))
	{
		$nomeUtente = $_POST["nome"];
		$emailUtente = $_POST["email"];
		$passwordUtente = $_POST["password"];
		$usernameUtente = $_POST["username"];
		$cognomeUtente = $_POST["cognome"];
		$dataDiNascitaUtente = $_POST["dataDiNascita"];
		$codiceFiscaleUtente = $_POST["codiceFiscale"];
		$telefonoUtente = $_POST["telefono"];

		$nomeUtente = mysqli_real_escape_string($db, $nomeUtente);
		$emailUtente = mysqli_real_escape_string($db, $emailUtente);
		$passwordUtente = mysqli_real_escape_string($db, $passwordUtente);
		$usernameUtente = mysqli_real_escape_string($db, $usernameUtente);
		$cognomeUtente = mysqli_real_escape_string($db, $cognomeUtente);
		$dataDiNascitaUtente = mysqli_real_escape_string($db, $dataDiNascitaUtente);
		$codiceFiscaleUtente = mysqli_real_escape_string($db, $codiceFiscaleUtente);
		$telefonoUtente = mysqli_real_escape_string($db, $telefonoUtente);
		$password = md5($passwordUtente);
		$codiceFiscaleUtente = strtoupper($codiceFiscaleUtente);
		
		
		$sql="SELECT emailUtente FROM utente WHERE emailUtente='$emailUtente'";
		
	
	    $result = mysqli_query($db, $query);

        if ($result->num_rows > 0) {
    
        $msg = "Spiacente, questa email esiste già...";
			echo $msg;
			header("location: registration_Utente.php");
    
        } else{
            
			$query = mysqli_query($db, "INSERT INTO utente (nomeUtente, cognomeUtente, usernameUtente, passwordUtente, codiceFiscaleUtente, dataDiNascitaUtente, telefonoUtente, emailUtente)VALUES ('$nomeUtente', '$cognomeUtente', '$usernameUtente', '$password', '$codiceFiscaleUtente', '$dataDiNascitaUtente', '$telefonoUtente', '$emailUtente')");
			if($query)
			{
				$msg = "Sei stato registrato al sistema!";
				echo $msg;
			}
		}
	}
?>
