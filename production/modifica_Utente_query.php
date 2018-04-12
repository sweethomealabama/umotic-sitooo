<?php ob_start(); ?>
<?php
    session_start();
	include 'db.php';

	$msg = "";
	if(isset($_POST["submit"]))
	{
	   
		$nuovoNomeUtente = $_POST["nomeNuovo"];
		$nuovaEmailUtente = $_POST["emailNuova"];
		$nuovaPasswordUtente = $_POST["passwordNuova"];
		$nuovoUsernameUtente = $_POST["usernameNuovo"];
		$nuovoCognomeUtente = $_POST["cognomeNuovo"];
		$nuovaDataDiNascitaUtente = $_POST["dataDiNascitaNuova"];
		$nuovoCodiceFiscaleUtente = $_POST["codiceFiscaleNuovo"];
		$nuovoTelefonoUtente = $_POST["telefonoNuovo"];
		
		$nomeUtente = $_POST["nome"];
		$emailUtente = $_POST["email"];
		$passwordAttuale = $_POST["passwordUtente"];
		$usernameUtente = $_POST["username"];
		$cognomeUtente = $_POST["cognome"];
		$dataDiNascitaUtente = $_POST["dataDiNascita"];
		$codiceFiscaleUtente = $_POST["codiceFiscale"];
		$telefonoUtente = $_POST["telefono"];
		
		
		
		
		$nomeUtente = mysqli_real_escape_string($db, $nomeUtente);
		$emailUtente = mysqli_real_escape_string($db, $emailUtente);
		$passwordAttuale = mysqli_real_escape_string($db, $passwordAttuale);
		$usernameUtente = mysqli_real_escape_string($db, $usernameUtente);
		$cognomeUtente = mysqli_real_escape_string($db, $cognomeUtente);
		$dataDiNascitaUtente = mysqli_real_escape_string($db, $dataDiNascitaUtente);
		$codiceFiscaleUtente = mysqli_real_escape_string($db, $codiceFiscaleUtente);
		$telefonoUtente = mysqli_real_escape_string($db, $telefonoUtente);
		$password = hash('ripemd160', $passwordUtente);
		$codiceFiscaleUtente = strtoupper($codiceFiscaleUtente);
		
		$sql="SELECT * FROM utente WHERE emailUtente='$emailUtente'";

		
		$msg = "password non riconosciuta, dati non salvati.";
	
	    $result = mysqli_query($db, $sql);
	    
	    $row = mysqli_num_rows($result);
	   
	    
	    if($passwordAttuale == $row['passwordUtente']){
	       
		    
		    $nuovoNomeUtente = mysqli_real_escape_string($db, $nuovoNomeUtente);
    		$nuovaEmailUtente = mysqli_real_escape_string($db, $nuovaEmailUtente);
    		$nuovaPasswordUtente = mysqli_real_escape_string($db, $nuovaPasswordUtente);
    		$nuovoUsernameUtente = mysqli_real_escape_string($db, $nuovoUsernameUtente);
    		$nuovoCognomeUtente = mysqli_real_escape_string($db, $nuovoCognomeUtente);
    		$nuovaDataDiNascitaUtente = mysqli_real_escape_string($db, $nuovaDataDiNascitaUtente);
    		$nuovoCodiceFiscaleUtente = mysqli_real_escape_string($db, $nuovoCodiceFiscaleUtente);
    		$nuovoTelefonoUtente = mysqli_real_escape_string($db, $nuovoTelefonoUtente);
    		$nuovaPasswordUtente = hash('ripemd160', $nuovaPasswordUtente);
    		$nuovoCodiceFiscaleUtente = strtoupper($nuovoCodiceFiscaleUtente);
    		
    		
		
	        
	        
	        $nomeUtente = ucfirst($nuovoNomeUtente);
	        $cognomeUtente = ucfirst($nuovoCognomeUtente);
	        $usernameUtente = $nuovoUsernameUtente;
	        $telefonoUtente = $nuovoTelefonoUtente;
	        $codiceFiscaleUtente = strtoupper($nuovoCodiceFiscaleUtente);
	        $dataDiNascitaUtente = $nuovaDataDiNascitaUtente;
	        $emailUtente = $nuovaEmailUtente;
	        $passwordUtente = $nuovaPasswordUtente;
	        
	       
	        
	    }
	    else{
	        header("location: index.php");
	    }
        
	}
?>
