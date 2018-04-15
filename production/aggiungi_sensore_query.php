<?php ob_start(); ?>
<?php
    
	include ("db.php");

		
	
	

	$msg = "";
	if(isset($_POST["aggiungi"]))
	{
		
		$sql="SELECT IDUtente FROM utente WHERE nomeUtente = 'Federico'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);

		$ID = $row["IDUtente"];
		
		
		$data = "2018"."-".rand(1, 12)."-".rand(1,31);

		$sql="SELECT IDSensore FROM sensore WHERE tipoSensore = 'TEM'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDS = $row["IDSensore"];

		$sql="SELECT IDAdattatore FROM adattatore WHERE nomeAmbiente = 'ambiente_1'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDA = $row["IDAdattatore"];

		$sql="SELECT IDInstallatore FROM installatore WHERE usernameInstallatore = 'admin'";
		$result = $db->query($sql);

		$row=mysqli_fetch_assoc($result);
		$IDI = $row["IDInstallatore"];
        
    
            
			$query = mysqli_query($db, "INSERT INTO installazionesensore (dataInstallazione, IDSensore, IDAdattatore, IDInstallatore, dataRimozione, IDInstallatoreRimozione)VALUES ('$data', '$IDS', '$IDA', '$IDI', '', '')");
			header("location: aggiungi_sensore.php");
		}
	
?>