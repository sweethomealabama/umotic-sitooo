<?php ob_start(); ?>
<?php
    
	session_start();
	include 'db.php';

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$nomeInstallatore = $_POST["nome"];
		$emailInstallatore = $_POST["email"];
		$passwordInstallatore = $_POST["password"];
		$usernameInstallatore = $_POST["username"];
		$cognomeInstallatore = $_POST["cognome"];
		$dataDiNascitaInstallatore = $_POST["dataDiNascita"];
		$codiceFiscaleInstallatore = $_POST["codiceFiscale"];
		$telefonoInstallatore = $_POST["telefono"];

		$nomeInstallatore = mysqli_real_escape_string($db, $nomeInstallatore);
		$emailInstallatore = mysqli_real_escape_string($db, $emailInstallatore);
		$passwordInstallatore = mysqli_real_escape_string($db, $passwordInstallatore);
		$usernameInstallatore = mysqli_real_escape_string($db, $usernameInstallatore);
		$cognomeInstallatore = mysqli_real_escape_string($db, $cognomeInstallatore);
		$dataDiNascitaInstallatore = mysqli_real_escape_string($db, $dataDiNascitaInstallatore);
		$codiceFiscaleInstallatore = mysqli_real_escape_string($db, $codiceFiscaleInstallatore);
		$telefonoInstallatore = mysqli_real_escape_string($db, $telefonoInstallatore);
		$password = hash('ripemd160', $passwordInstallatore);
		$codiceFiscaleInstallatore = strtoupper($codiceFiscaleInstallatore);
		
		
		
		$sql="SELECT emailInstallatore FROM installatore WHERE emailInstallatore='$emailInstallatore'";
		
	
	    $result = mysqli_query($db, $query);

        if ($result->num_rows > 0) {
    
        $msg = "Spiacente, questa email esiste già...";
			echo $msg;
			header("location: registration_Installatore.php");
    
        } else{
            
			
		}
	}
?>
